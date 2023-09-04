<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VbaasController extends Controller
{
    private $vbaas_base_url;
    private $vbaas_onboarding;
    private $vbaas_access_token;
    private $vbaas_username;
    private $vbaas_wallet_credentials;

    public function __construct()
    {
        $settings = DB::table('tbl_settings')->get();
        $this->vbaas_base_url = $settings->where('name','vbaas_base_url')->first()->value;
        $this->vbaas_onboarding = $settings->where('name','vbaas_onboarding')->first()->value;
        $this->vbaas_access_token = $settings->where('name','vbaas_access_token')->first()->value;
        $this->vbaas_username = $settings->where('name','vbaas_username')->first()->value;
        $this->vbaas_wallet_credentials = $settings->where('name','vbaas_wallet_credentials')->first()->value;
    }

    public function Onboarding()
    {

        $url = $this->vbaas_base_url."/wallet2/onboarding?wallet-credentials=".$this->vbaas_wallet_credentials; // Replace with your actual POST URL

        $data = [
            "username" => "visaro",
            "walletName" => "visaro wallet",
            "webhookUrl" => "",
            "shortName" => "zedv",
            "implementation" => "Pool"
        ];

        $headers = [
            'Authorization' => 'Bearer '. $this->vbaas_access_token,
            'Content-Type' => 'application/json'
        ];

        $client = new Client();
        $response = $client->post($url, [
            'headers' => $headers,
            'json' => $data
        ]);

        $responseBody = $response->getBody();
        echo $responseBody;

    }


    public function get_client_account($accountNo, $bank)
    {
        // Set the base URL and API endpoint
        $baseURL = $this->vbaas_access_token;
        $endpoint = "wallet2/client/account";

        // Build the URL for the API request
        $url = $baseURL . $endpoint . "?wallet-credentials=" . urlencode($this->vbaas_wallet_credentials) . "&accountNo=" . urlencode($accountNo) . "&bank=" . urlencode($bank);

        // Prepare the headers
        $headers = [
            'Authorization' => 'Bearer ' . $this->access_token,
        ];

        // Make the API request
        $client = new GuzzleHttp\Client();
        $response = $client->get($url, [
            'headers' => $headers,
        ]);

        // Check the response status code
        if ($response->getStatusCode() == 200) {
            // Decode the JSON response
            $responseData = json_decode($response->getBody(), true);

            // Check if the request was successful
            if (isset($responseData['data']['walletAccount'])) {
                return $responseData['data']['walletAccount'];
            } else {
                // Log the error message and return null
                Log::error('Failed to get wallet account: ' . $response->getBody());
                return null;
            }
        } else {
            // Log the error message and return null
            Log::error('Failed to get wallet account: ' . $response->getBody());
            return null;
        }
    }



    public function get_biller_category()
    {
        $baseURL = $this->vbaas_access_token;
        $endpoint = "billspaymentstore/billercategory";

        $url = $baseURL. $endpoint. "?wallet-credentials=" . $this->vbaas_wallet_credentials;

        $headers = [
            'Authorization' => 'Bearer ' . $this->vbaas_access_token,
            'Content-Type' => 'application/json'
        ];

        $client = new Client();
        $response = $client->get($url, [
            'headers' => $headers
        ]);

        $responseBody = $response->getBody();
        echo $responseBody;
    }









}