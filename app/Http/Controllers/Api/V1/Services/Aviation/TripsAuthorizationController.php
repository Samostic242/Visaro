<?php

namespace App\Http\Controllers\Api\V1\Services\Aviation;

use App\Http\Controllers\Controller;
use App\Http\Integrations\Trips\Requests\FlightBookingRequest;
use App\Http\Integrations\Trips\Requests\GetBalanceRequest;
use App\Http\Integrations\Trips\Requests\GetTokenRequest;
use App\Http\Integrations\Trips\TripsConnection;
use App\Models\FlightBooking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Saloon\Http\Response;

class TripsAuthorizationController extends Controller
{
    /**
     ******************************************************************************************************************************
     * @OA\Get(
     * path="/aviation/widget/initialize",
     * summary="Get aviation widget token",
     * description="Get aviation widget token",
     * operationId="aviation.authorize",
     * tags={"Get aviation widget token"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="Authorization initalized successfully",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Authorization initalized successfully"),
     *       @OA\Property(property="data",
     *          type="object",
     *                example={
     *                     "token":"a3d174d829eaf55778187ea3c5b25a35ec21dd26054c48f2d42cb337db0cb0d9b6a86061d4bae642c60cd23341cbf4a75e7a4728d30b512808a2b3ad6cf31874",
     *                     "url":"https://tripswebwidget.staging.vggdev.com/?MerchantCode=VISA&MerchantHash=a3d174d829eaf55778187ea3c5b25a35ec21dd26054c48f2d42cb337db0cb0d9b6a86061d4bae642c60cd23341cbf4a75e7a4728d30b512808a2b3ad6cf31874&CustomerNmae=Maxwell Agu&CustomeId=23",
     *                },
     *              ),
     *       )
     *     )
     * )
     * ********/
    public function getWidgetAuthorizationToken()
    {
        $user = Auth::user();
        $name = $user->firstname . '-' . $user->lastname;
        $trips = new TripsConnection();
        $response = $trips->send(new GetTokenRequest($name, $user->id));
        $response->onError(function (Response $resp) {
            Log::info('token request', [$resp]);
            return respondError('01', "Attempt to authenticate process failed", $resp);
        });
        $response = (object)$response->json();
        $data = [
            // "token" => $response->Token,
            "url" => "https://tripswebwidget.staging.vggdev.com/?MerchantCode={$response->MerchantCode}&MerchantHash={$response->Token}&CustomerName={$response->ExtraData['CustomerName']}&CustomerId={$response->ExtraData['CustomerIdentifier']}",
        ];
        return respondSuccess("Authorization initialized successfully", $data);
    }

    public function bookFlight($flightId)
    {
        $booking = FlightBooking::where('user_id', auth()->user()->id)
        ->where('id', $flightId)
        ->first();
        if (!$booking) {
            return respondError(400, '01', "Booking not found");
        }

        $trips = new TripsConnection();
        $response = $trips->send(new FlightBookingRequest($booking));
        $response->onError(function (Response $resp) {
            Log::info('token request', [$resp]);
            return respondError(400, "An error occurred", $resp);
        });
       return (object) $response->json();
       /*  if(!$response_data->IsSuccessful){
            return respondError(400, "01", $response_data->Message);
        }

        $booking->status = $response_data->BookingStatus ?? $booking->status;
        $booking->confirmation_code = $response_data->Pnr;
        $booking->save();
        return respondSuccess('Your Ticket has been booked successfully', $booking); */
    }

    public function fetchBalance()
    {
        $trips = new TripsConnection();
        $response = $trips->send(new GetBalanceRequest());
        $response->onError(function (Response $resp) {
            return respondError(400, "An error occurred", $resp);
        });
        $data = $response->json();
        return respondSuccess('Balance Fetched Successfully', $data);
    }

    public function getFlightBooking($flightId)
    {
    }
}
