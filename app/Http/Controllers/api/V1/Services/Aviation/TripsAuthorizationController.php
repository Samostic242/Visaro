<?php

namespace App\Http\Controllers\api\V1\Services\Aviation;

use App\Http\Controllers\Controller;
use App\Http\Integrations\Trips\Requests\GetTokenRequest;
use App\Http\Integrations\Trips\TripsConnection;
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
        return respondSuccess("Authorization initalized successfully", $data);
    }
}
