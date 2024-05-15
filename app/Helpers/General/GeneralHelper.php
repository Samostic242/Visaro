<?php

use App\Http\Integrations\Firebase\Requests\SendNotificationRequest;
use App\Http\Integrations\Trips\FcmConnection;
use App\Models\BookedFlight;
use App\Models\Country;
use App\Models\Flight;
use App\Models\User;
use App\Models\UserSecurity;
use App\Models\Wallet;
use Carbon\Carbon;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Okolaa\TermiiPHP\Termii;
use SimpleSoftwareIO\QrCode\Facades\QrCode;






if (!function_exists('uuid')) {
    function uuid(): string
    {
        return Str::uuid()->toString();
    }
}
if (!function_exists('ulid')) {
    function ulid(): string
    {
        return Str::ulid();
    }
}
if (!function_exists('slug')) {
    function slug($string): string
    {
        return Str::slug($string, '-');
    }
}
if (!function_exists('generateReference')) {
    function generateReference($length = 57, $type = 'mixed'): string
    {
        return ulid();
        srand((float)microtime() * 10000000000);
//        $rand = mt_rand(113167114121212511111, 999992121212129999099999978);
        $characters = $type == 'mixed'
            ? str_replace('-', '', uuid()) . "ABCDEFGHIJKLMOPQRSTUVWXYZ012345678998765432100ZYXWVUTSRQPOMLKJIHGFEDCBA011223344556677889900998ABCDEFGHIJKLMOPQRSTUVWXYZ877665544332211"
            : "012345678998765432100011223344556677889900998877665544332211";
        return substr(
            str_shuffle($characters),
            0,
            $length
        );
    }
}
if (!function_exists('generateCode')) {
    function generateCode($string = null, $length = 6): string
    {
        srand((float)microtime() * 10000000000);
        $rand = mt_rand(12, 12);
        $characters = "{$string}012345678998765432100011223344556677889900998877665544332211{$rand}";
        return substr(
            str_shuffle(strtoupper($characters)),
            0,
            $length
        );
    }
}
if (!function_exists('generateRandomNumber')) {
    function generateRandomNumber($length = 6): ?int
    {

        $min = pow(10, ($length - 1)); // Minimum value based on length
        $max = pow(10, $length) - 1;    // Maximum value based on length

        return mt_rand((int)$min, (int)$max); // Generate a random number within the specified range
    }
}
if (!function_exists('sendSmsMessage')) {
    function sendSmsMessage(string $phone_number, string $message, string $purpose = 'transaction'): Termii|bool
    {
        $termii = new Termii(config('services.messaging.sms.termii.sender_id'), config('services.messaging.sms.termii.api_key'));
        try {
            $termii->sendMessage(
                [
                    "phone_number" => $phone_number,
                    "message" => $message
                ]
            );
            return $termii;
        } catch (\Throwable $e) {
            Log::error("Failed to send sms message {$e->getMessage()}");
            return false;
        }
        return true;
    }
}
if (!function_exists('sendSmsToken')) {
    function sendSmsToken(string $phone_number, string $purpose = 'transaction'): Termii|bool
    {
        try {
            $termii = new Termii(config('services.messaging.sms.termii.sender_id', config('services.messaging.sms.termii.api_key')));
            $termii
                ->setPinTimeToLive(10)
                ->SetPinLength(4)
                ->setPinType("NUMERIC")
                ->setMaxAttempts(5)
                ->sendToken(
                    [
                        "phone_number" => $phone_number,
                        "message" => "Your VISARO pin is < _pin_ >"
                    ]
                );
            Log::info("Message - token sent", [$termii]);
            return $termii;
        } catch (\Throwable $e) {
            Log::error("Failed to verify sms token {$e->getMessage()}", [$e]);
            return false;
        }
    }
}
if (!function_exists('verifySmsToken')) {
    function verifySmsToken(User $user, string $token, string $token_id): Termii|bool
    {
        try {
            $termii = new Termii(config('services.messaging.sms.termii.sender_id', config('services.messaging.sms.termii.api_key')));
            $termii->verifyToken(
                [
                    "pin_id" => $token_id,
                    "pin" => $token,
                ]
            );
            return $termii;
        } catch (\Throwable $e) {
            Log::error("Failed to send sms token {$e->getMessage()}", [$e]);
            return false;
        }
    }
}
if (!function_exists('getCountry')) {
    function getCountry(string $code): object|null
    {
        return Country::where('code', $code)->first();
    }
}
if (!function_exists('nairaToKobo')) {
    function nairaToKobo(int $amount): int
    {
        return $amount * 100;
    }
}
if (!function_exists('koboToNaira')) {
    function koboToNaira(int $amount): int
    {
        return $amount / 100;
    }
}
if (!function_exists('formatMoney')) {
    function formatMoney(int|float $amount): string
    {
        return number_format($amount, 2);
    }
}
if (!function_exists('getTripsAuthorizationCode')) {
    function getTripsAuthorizationCode($user_name, $user_id)
    {
        $base_url = config('services.sectors.aviation.providers.trips.base_url');
        $headers = [
            "Authorization" => "Bearer " . config('services.sectors.aviation.providers.trips.authorization_code'),
            "Content-Type" => "application/json",
            "Accept" => "application/json",
            "MerchantCode" => config('services.sectors.aviation.providers.trips.merchant_code'),
        ];
        $data = [
            'CustomerName' => $user_name,
            'CustomerIdentifier' => $user_id,
        ];
        return Http::withHeaders($headers)
            ->post("$base_url/account/gettoken", $data)->json();
    }
}
if (!function_exists('bookFlightOnTrips')) {
    function bookFlightOnTrips($booking, $user_id)
    {
        try {
            $user = auth()->user();
            $base_url = config('services.sectors.aviation.providers.trips.base_url');
            $headers = [
                "Authorization" => "Bearer " . config('services.sectors.aviation.providers.trips.authorization_code'),
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "MerchantCode" => config('services.sectors.aviation.providers.trips.merchant_code'),
            ];
            $data = [
                'SelectedFlights' => $booking->copy['PassengerDetails']['SelectedFlights'],
                'SessionId' => $booking->copy['PassengerDetails']['SessionId'],
                'AmountPaid' => $booking->copy['PassengerDetails']['AmountPaid'],
                'BillingAddress' => $booking->copy['PassengerDetails']['BillingAddress'],
                'PaymentType' => $booking->copy['PassengerDetails']['PaymentType'],
                'TicketType' => $booking->copy['PassengerDetails']['TicketType'],
                'AirTravellers' => $booking->copy['PassengerDetails']['AirTravellers'],
                'PaymentTexts' => $booking->copy['PassengerDetails']['PaymentTexts'],
                'PromoCode' => $booking->copy['PassengerDetails']['PromoCode'],
                'CloseSessionAfterBooking' => $booking->copy['PassengerDetails']['CloseSessionAfterBooking'],
            ];
            $flight = Http::withHeaders($headers)
                ->post("$base_url/Flight/Domestic/BookFlight", $data);
            if (!$flight || $flight->failed()) {
                Log::error("Error booking flight 1", [
                    'booking' => $booking,
                    'response' => $flight->json(),
                ]);
                $result = $flight->json()[0];
                if (isset($result['Errors']) && str_contains($result['Errors'][0], 'ticket for a similar booking')) {
                    $flight = BookedFlight::where('user_id', $user->id)
                        ->where('flight_booking_id', $booking->id)
                        ->where('type', $booking->type)
                        ->first();
                    if ($flight) {
                        $flight_entries = $flight->flight_sets;
                        $tickets = saveFlight($flight, $flight_entries);
                        $flight->tickets = $tickets;
                        return $flight;
                    } else {
                        Log::error('Not found', [$result]);
                    }
                } else {
                    Log::error('Does not contain', [$result]);
                }
                return false;
            }
            if ($flight->successful()) {
                if ($store = saveBookedFlightOnTrips($booking, $flight[0])) {
                    return $store;
                }
                Log::error("Error booking flight - store", [
                    'booking' => $booking,
                    'response' => $flight,
                    'store' => $store,
                ]);
                return false;
            }
            Log::error("Error booking flight  -2", [
                'booking' => $booking,
                'response' => $flight,
            ]);
            return false;
        } catch (\Throwable $th) {
            Log::error("Error booking flight- {$th->getMessage()}", [
                'booking' => $booking,
                'data' => $data,
            ]);
            return false;
        }
    }
}
if (!function_exists('saveBookedFlightOnTrips')) {
    function saveBookedFlightOnTrips($booking, $data)
    {
        try {
            $user = auth()->user();
            $flight = BookedFlight::where('user_id', $user->id)
                ->where('flight_booking_id', $booking->id)
                ->where('type', $booking->type)
                ->first();
            if (!$flight) {
                $flight = new BookedFlight();
                $flight->user_id = $user->id;
                $flight->public_id = uuid();
                $flight->flight_booking_id = $booking->id;
                $flight->type = $booking->type;
                $flight->session = $booking->session;
            }
            $flight->reference_number = $data['ReferenceNumber'];
            $flight->booking_reference_id = $data['BookingReferenceId'];
            $flight->booking_reference_type = $data['BookingReferenceType'];
            $flight->ticket_time_limit = $data['TicketTimeLimit'];
            $flight->air_travelers = $data['AirTravellers'];
            $flight->flight_sets = $data['FlightSets'];
            $flight->flight_rules = $data['FlightRules'];
            $flight->flight_rule_penalties = $data['FlightRulePenalties'];
            $flight->new_passenger_fares = $data['NewPassengerFares'];
            $flight->errors = $data['Errors'];
            $flight->warnings = $data['Warnings'];
            $flight->copy = $data;
            $flight->save();
            $tickets = saveFlight($flight, $data['FlightSets']);
            $flight->tickets = $tickets;
            return $flight;
        } catch (\Throwable $th) {
            Log::error("Error saving booking - {$th->getMessage()}", [
                'booking' => $booking,
                'response' => $data,
            ]);
            return false;
        }
    }
}
if (!function_exists('saveFlight')) {
    function saveFlight($booked_flight, $flight_sets): array|bool
    {
        Log::info('saving data', [$flight_sets]);
        try {
            $tickets = [];
            foreach ($flight_sets as $flight_entries) {
                foreach ($flight_entries['FlightEntries'] as $key => $data) {
                    $user = auth()->user();
                    $ticket = Flight::where('user_id', $user->id)
                        ->where('flight_booking_id', $booked_flight->flight_booking_id)
                        ->where('booked_flight_id', $booked_flight->id)
                        ->where('type', $booked_flight->type)
                        ->first();
                    if (!$ticket) {
                        $ticket = new Flight();
                        $ticket->user_id = $user->id;
                        $ticket->public_id = uuid();
                        $ticket->flight_booking_id = $booked_flight->flight_booking_id;
                        $ticket->booked_flight_id = $booked_flight->id;
                        $ticket->type = $booked_flight->type;
                        $ticket->session = $booked_flight->session;
                    }
                    $ticket->flight_number = $data['FlightNumber'];
                    $ticket->aircraft = $data['Aircraft'];
                    $ticket->marketing_airline_name = $data['MarketingAirlineName'];
                    $ticket->marketing_airline_code = $data['MarketingAirlineCode'];
                    $ticket->operating_airline_code = $data['OperatingAirlineCode'];
                    $ticket->operating_airline_name = $data['OperatingAirlineName'];
                    $ticket->flight_class = $data['FlightClass'];
                    $ticket->departure_date = $data['DepartureDate'];
                    $ticket->departure_airport_code = $data['DepartureAirportCode'];
                    $ticket->departure_airport_name = $data['DepartureAirportName'];
                    $ticket->departure_airport_fullname = $data['DepartureAirportFullName'];
                    $ticket->departure_terminal = $data['DepartureTerminal'];
                    $ticket->departure_gate = $data['DepartureGate'];

                    $ticket->arrival_date = $data['ArrivalDate'];
                    $ticket->arrival_airport_code = $data['ArrivalAirportCode'];
                    $ticket->arrival_airport_name = $data['ArrivalAirportName'];
                    $ticket->arrival_airport_fullname = $data['ArrivalAirportFullName'];
                    $ticket->arrival_terminal = $data['ArrivalTerminal'];
                    $ticket->arrival_gate = $data['ArrivalGate'];

                    $ticket->copy = $data;
                    $ticket->save();
                    array_push($tickets, $ticket);
                    // $tickets[] = $ticket;
                }
            }
            return $tickets;
        } catch (\Throwable $th) {
            Log::error("Error saving flight - {$th->getMessage()}", [
                'booked_flight' => $booked_flight,
                'flight_sets' => $flight_sets,
                'line' => $th->getLine(),
            ]);
            return false;
        }
    }
}
if (!function_exists('generateKey')) {
    function generateKey(): string
    {
        return date('Ymd') . Str::ulid();
    }
}
if (!function_exists('generateQrCode')) {
    function generateQrCode(string $key, string $format = 'svg'): string|false
    {
        try {
            $path = '../storage/app/qrcode';
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true);
            }
            $file = "{$path}/{$key}.{$format}";
            QrCode::format($format)
                ->size(512)
                ->style('round')
                ->backgroundColor(255, 255, 255, 0)
                ->color(0, 0, 0, 90)
                ->margin(2)
                ->generate($key, $file);
            if (File::exists($file)) {
                Log::info('QrCode created, uploading to cloud');
                return cloudinary()->upload($file, [
                    'folder' => 'qrcodes',
                    'public_id' => Str::uuid()->toString(),
                ])->getSecurePath();
            }
            return $key;
        } catch (Throwable $exception) {
            return false;
        }

    }
}

if (!function_exists('upload_to_cloudinary')) {
    function upload_to_cloudinary(string $folder, $fil): ?string
    {
        $upload = cloudinary()->upload($fil, [
            'folder' => $folder,
            'public_id' => Str::uuid()->toString(),
        ])->getSecurePath();
        // $upload = (new UploadApi())->upload($fil);
        return $upload;
    }
}

if (!function_exists('debitWallet')) {
    function debitWallet(string $wallet_id, int $amount): ?string
    {
        $wallet = Wallet::where('id', $wallet_id)
            ->where('owner_id', auth()->id())
            ->decrement('balance', $amount);
        if (!$wallet) {
            return false;
        }
        return true;
    }

}

if (!function_exists('creditWallet')) {
    function creditWallet(string $wallet_id, int $amount): ?string
    {
        $wallet = Wallet::where('id', $wallet_id)
            ->where('owner_id', auth()->id())
            ->increment('balance', $amount);
        if (!$wallet) {
            return false;
        }
        return true;
    }
}
if (!function_exists('getFileType')) {
    function getFileType(string $data): ?string
    {
        $file = $data;
        $mimeType = $file->getClientMimeType();
        if ($mimeType === 'application/pdf') {
            $fileType = 'PDF';
        } elseif (in_array($mimeType, ['image/jpeg', 'image/jpg'])) {
            $fileType = 'JPG';
        } elseif ($mimeType === 'video/mp4') {
            $fileType = 'MP4';
        } elseif ($mimeType === 'image/png') {
            $fileType = 'PNG';
        } else {
            $fileType = 'Unknown';
        }
        return $fileType;
    }

    if (!function_exists('validatePin')) {
        function validatePin(string $pin, string $user_id) {
            $user = UserSecurity::where('user_id', $user_id)->first();
            if($user->next_available_trial != null && Carbon::now() < Carbon::parse($user->next_available_trial))
            {
                $message = 'You have exceeded the maximum number of attempts, Please try again at ' . $user->next_available_trial;
                return [
                    'status' => false,
                    'message' => $message
                ];
            }
            // Check if the pin is correct
            if(!Hash::check($pin, $user->pin)){
                $user->invalid_pin_count = $user->invalid_pin_count + 1;
                $user->save();
                if($user->invalid_pin_count >= 4){

                    $user->next_available_trial = Carbon::now()->addMinutes(60) ?? null;
                    $user->invalid_pin_count = 0;
                    $user->active = false ?? null;
                    $user->save();
                    $message = 'You have now exceeded the maximum number of attempts, Please try again later at ' . $user->next_available_trial;
                    return [
                    'status' => false,
                    'message' => $message
                ];
                }
                $message = 'Incorrect pin, '. 4 - intval($user->invalid_pin_count) . ' attempts remaining.';
                return [
                    'status' => false,
                    'message' => $message
                ];
            }
            $user->invalid_pin_count = 0;
            $user->active = true;
            $user->save();
            $message = 'Successful';
            return [
                    'status' => true,
                    'message' => $message
            ];
        }
    }

    if(!function_exists('sendPushNotification')){
        function sendPushNotification($title, $message, $userId, $tag){
            $user = User::find($userId);
            $token = $user->device_token;
            $data = [
                "title" => $title,
                "body" => $message,
                "image" => asset('img/visaro_icon.png')
            ];
            $sendFcm = new FcmConnection();
            $send = $sendFcm->send(new SendNotificationRequest($data, $token, $tag));
            $sendFcm->onError(function (Response $resp) {
                Log::info('Send Notification request', [$resp]);
                return respondError('01', "Attempt to send notification failed", $resp);
            });
            return $send;
        }
    }
}
