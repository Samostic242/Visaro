<?php

use App\Models\BookedFlight;
use App\Models\Flight;
use App\Models\PaymentInstallment;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Str;
use Okolaa\TermiiPHP\Termii;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use function PHPUnit\Framework\isType;

if (!function_exists('uuid')) {
    function uuid(): string
    {
        return Str::uuid()->toString();
    }
}
if (!function_exists('slug')) {
    function slug($string): String
    {
        return Str::slug($string, '-');
    }
}
if (!function_exists('generateReference')) {
    function generateReference($length = 57, $type = 'mixed'): string
    {
        srand((float) microtime() * 10000000000);
        $rand = mt_rand(113167114121212511111, 999992121212129999099999978);
        $characters = $type == 'mixed'
            ? str_replace('-', '', uuid()) . "ABCDEFGHIJKLMOPQRSTUVWXYZ012345678998765432100ZYXWVUTSRQPOMLKJIHGFEDCBA011223344556677889900998ABCDEFGHIJKLMOPQRSTUVWXYZ877665544332211{$rand}"
            : "012345678998765432100011223344556677889900998877665544332211{$rand}";
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
        srand((float) microtime() * 10000000000);
        $rand = mt_rand(12, 12);
        $characters =  "{$string}012345678998765432100011223344556677889900998877665544332211{$rand}";
        return substr(
            str_shuffle($characters),
            0,
            $length
        );
    }
}
if (!function_exists('generateRandomNumber')) {
    function generateRandomNumber($length = 6): ?int
    {
        if ($length <= 0) {
            return null; // Handle invalid input
        }

        $min = pow(10, ($length - 1)); // Minimum value based on length
        $max = pow(10, $length) - 1;    // Maximum value based on length

        return mt_rand($min, $max); // Generate a random number within the specified range
    }
}
if (!function_exists('sendSmsMessage')) {
    function sendSmsMessage(String $phone_number, String $message, String $purpose = 'transaction'): Termii|bool
    {
        $termii = new Termii('TERMII_SENDER_ID', 'TERMII_API_KEY');
        try {
            $termii->sendMessage(
                [
                    "phone_number" => $phone_number,
                    "message" => $message
                ]
            );
            return  $termii;
        } catch (\Throwable $e) {
            Log::error("Failed to send sms message {$e->getMessage()}");
            return false;
        }
        return true;
    }
}
if (!function_exists('sendSmsToken')) {
    function sendSmsToken(String $phone_number, String $purpose = 'transaction'): Termii|bool
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
            return  $termii;
        } catch (\Throwable $e) {
            Log::error("Failed to verify sms token {$e->getMessage()}", [$e]);
            return false;
        }
    }
}
if (!function_exists('verifySmsToken')) {
    function verifySmsToken(User $user, String $token, String $token_id): Termii|bool
    {
        try {
            $termii = new Termii(config('services.messaging.sms.termii.sender_id', config('services.messaging.sms.termii.api_key')));
            $termii->verifyToken(
                [
                    "pin_id" => $token_id,
                    "pin" => $token,
                ]
            );
            return  $termii;
        } catch (\Throwable $e) {
            Log::error("Failed to send sms token {$e->getMessage()}", [$e]);
            return false;
        }
    }
}
if (!function_exists('getCountry')) {
    function getCountry(String $code): Object|null
    {
        return Country::where('code', $code)->first();
    }
}
if (!function_exists('nairaToKobo')) {
    function nairaToKobo(Int $amount): int
    {
        return $amount * 100;
    }
}
if (!function_exists('koboToNaira')) {
    function koboToNaira(Int $amount): int
    {
        return $amount / 100;
    }
}
if (!function_exists('formatMoney')) {
    function formatMoney(Int|float $amount): string
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
