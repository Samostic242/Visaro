<?php

namespace App\Http\Controllers\api;
use DB;
use GuzzleHttp\Client;

class VbaasController
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

    //Run this method first before calling any method
    public function Onboarding()
    {

        $url = $this->vbaas_base_url."/wallet2/onboarding?wallet-credentials=" . urlencode($this->vbaas_wallet_credentials); // Replace with your actual POST URL

        $data = [
            "username" => "visaro",
            "walletName" => "Visaro Nigeria",
            "webhookUrl" => "",
            "shortName" => "visa",
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
        $baseURL = $this->vbaas_base_url;
        $endpoint = "wallet2/client/account";

        // Build the URL for the API request
        $url = $baseURL . $endpoint . "?wallet-credentials=" . urlencode($this->vbaas_wallet_credentials) . "&accountNo=" . urlencode($accountNo) . "&bank=" . urlencode($bank);

        $headers = [
            'Authorization' => 'Bearer ' . $this->vbaas_access_token,
            'Content-Type' => 'application/json'
        ];

        $client = new Client();
        $response = $client->get($url, [
            'headers' => $headers
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

    //Get list of biller e.g. AIRTIME, CABLE, ELECTRICITY
    public function get_biller_category()
    {
        $baseURL = $this->vbaas_base_url;
        $endpoint = "/billspaymentstore/billercategory";

        $url = $baseURL. $endpoint. "?wallet-credentials=" . urlencode($this->vbaas_wallet_credentials);

        $headers = [
            'Authorization' => 'Bearer ' . $this->vbaas_access_token,
            'Content-Type' => 'application/json'
        ];


        $client = new Client();
        $response = $client->get($url, [
            'headers' => $headers
        ]);

        $responseBody = $response->getBody();
        $arr = json_decode($responseBody);

        if($arr->status == "00")
        {
            $insert = array();

            foreach($arr->data as $biller )
            {
               $insert[] = [
                  "category_name" => $biller->category,
                  "category_code" => $biller->category,
               ];
            }

            if (count($insert) > 0)
            {
                DB::table('bill_payment_category')->delete();
                DB::table('bill_payment_category')->insert($insert);
            }

            return 1;
        }else
        {
            return 0;
        }
    }



    public function beneficial_enquiry($accountNo, $bank_code, $transfer_type = "inter")
    {
        $baseURL = $this->vbaas_base_url;
        $endpoint = "/wallet2/transfer/recipient";

        $url = $baseURL. $endpoint;

        $headers = [
            'Authorization' => 'Bearer ' . $this->vbaas_access_token,
            'Content-Type' => 'application/json',
        ];

        $queryParams = [
            "accountNo" => $accountNo,
            "bank" => $bank_code,
            "transfer_type" => $transfer_type,
            "wallet-credentials" => $this->vbaas_wallet_credentials
        ];

        $client = new Client();


            $response = $client->request('GET', $url, [
                'headers' => $headers,
                'query' => $queryParams,
                'http_errors' => false // Handle 404 error code
            ]);



            $statusCode = $response->getStatusCode();
            $responseBody = $response->getBody()->getContents();

            if ($statusCode == 404) {
                return json_decode($responseBody);
            } else if ($statusCode != 200) {
                return json_decode($responseBody);
            }

            $arr = json_decode($responseBody, true);

            return $arr;

    }


    //Get our account info we have on Vbaas. e.g Current bal, Client ID, Client, Account No.
    public function get_acct_enquiry()
    {
        $baseURL = $this->vbaas_base_url;
        $endpoint = "/wallet2/account/enquiry";

        $url = $baseURL. $endpoint. "?wallet-credentials=" . urlencode($this->vbaas_wallet_credentials);

        $headers = [
            'Authorization' => 'Bearer ' . $this->vbaas_access_token,
            'Content-Type' => 'application/json'
        ];

        $client = new Client();
        $response = $client->get($url, [
            'headers' => $headers
        ]);

        $responseBody = $response->getBody();
        $arr = json_decode($responseBody);

        if($arr->status == "00")
        {
            $insert = array();
            $account_details = $arr->data;

            $insert[] = [
                'account_no' => $account_details->accountNo,
                'account_bal' => $account_details->accountBalance,
                'account_id' => $account_details->accountId,
                'client' => $account_details->client,
                'client_id' => $account_details->clientId,
                'saving_product_name' => $account_details->savingsProductName,
            ];

            if(count($insert) > 0)
            {
                DB::table('vbaas_account_details')->delete();
                DB::table('vbaas_account_details')->insert($insert);
            }

            return 1;
        }else
        {
            return 0;
        }
    }

    //Get List of banks for Vbaas
    public function get_bank_list()
    {
        $baseURL = $this->vbaas_base_url;
        $endpoint = "/wallet2/bank";

        $url = $baseURL. $endpoint. "?wallet-credentials=" . urlencode($this->vbaas_wallet_credentials);

        $headers = [
            'Authorization' => 'Bearer ' . $this->vbaas_access_token,
            'Content-Type' => 'application/json'
        ];

        $client = new Client();
        $response = $client->get($url, [
            'headers' => $headers
        ]);

        $responseBody = $response->getBody();
        $arr = json_decode($responseBody);

        if($arr->status == "00")
        {
            $insert = array();
            $banks = $arr->data;

            foreach($banks->bank as $bank) {
                $insert[] = [
                    "id" => $bank->id,
                    "bank_code" => $bank->code,
                    "bank_name" => $bank->name,
                    "display_img" => $bank->logo !=""?$bank->code.".png":"no_logo.png"
                ];

                $base64Image = $bank->logo;

                if ($base64Image != "")
                {
                    // Extract image data and extension from base64 string
                    list(, $base64Data) = explode(';', $base64Image);
                    list(, $imageData) = explode(',', $base64Data);
                    $imageData = base64_decode($imageData);

                    // Generate unique file name
                    $fileName = $bank->code . '.png';

                    // Define the directory path where you want to save the image
                    $directory = public_path('uploads/banks');

                    // Create the directory if it doesn't exist
                    if (!file_exists($directory)) {
                        mkdir($directory, 777, true);
                    }
                    // Save the image to the directory
                    file_put_contents($directory . '/' . $fileName, $imageData);
                }


            }

            if(count($insert) > 0)
            {
                DB::table('banks')->delete();
                DB::table('banks')->insert($insert);
            }

            return 1;
        }else
        {
            return 0;
        }
    }

    public function run_parameter()
    {
        $insert_bank = $this->get_bank_list();
        $insert_account_enq = $this->get_acct_enquiry();
        $insert_biller_cat = $this->get_biller_category();

        if($insert_bank == 1 && $insert_account_enq == 1 && $insert_biller_cat ==1)
        {
            DB::table('tbl_settings')->where('name', 'visaro_vbaas_get_parameters')->update(['value' => 1]);
            return 1;
        }else
        {
            return 0;
        }
    }














}
