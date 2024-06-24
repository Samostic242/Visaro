<?php

namespace App\Http\Controllers\Api\V2\Admin\Merchant;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\V2\Admin\MerchantRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MerchantController extends Controller
{
    function __construct(
        protected MerchantRepositoryInterface $merchantRepository
    ) {
    }

    public function getMerchants()
    {
        try {
            $merchants = $this->merchantRepository->getMerchants();
            return respondSuccess("Merchants", $merchants);
        } catch (\Exception $e) {
            return respondError(500, '01', "Error getting merchants");
        }
    }
    public function getMerchantsSearchResults(Request $request)
    {
        $search_rule = [
            'name' => ['required', 'string'],
        ];
        $validator = Validator::make($request->all(), $search_rule);
        if ($validator->fails()) {
            return respondError(400, '01', "Query string required", $validator->errors()->all());
        }
        try {
            $search_results = $this->merchantRepository->getMerchantsSearchResults($request->query('name'));
            return respondSuccess("Search results", $search_results);
        } catch (\Exception $e) {
            return respondError(500, '01', "Error getting search results");
        }
    }
    public function createMerchant(array $data)
    {
        return respondError(501, '01', 'Not Implemented');
    }
    public function getMerchant(string $id)
    {
        try {
            $merchant = $this->merchantRepository->getMerchant($id);
            return respondSuccess("Merchant", $merchant);
        } catch (ModelNotFoundException $e) {
            return respondError(404, "01", "Merchant not found");
        } catch (\Exception $ex) {
            return respondError(500, '01', "Error while retrieving Merchant");
        }

    }
    public function getMerchantHistory(string $id)
    {
        try {
            $history = $this->merchantRepository->getMerchantHistory($id);
            return respondSuccess("Merchant History", $history);
        } catch (ModelNotFoundException $e) {
            return respondError(404, "01", "Merchant not found");
        } catch (\Exception $ex) {
            return respondError(500, '01', "Error while retrieving Merchant history");
        }
    }
    public function activateMerchant(string $id)
    {
        try {
            $this->merchantRepository->activateMerchant($id);
        } catch (ModelNotFoundException $e) {
            return respondError(404, '01', "Merchant not found");
        } catch (\Exception $ex) {
            return respondError(500, "01", "Error while activating account");
        }
    }
    public function deactivateMerchant(string $id)
    {
        try {
            $this->merchantRepository->deactivateMerchant($id);
        } catch (ModelNotFoundException $e) {
            return respondError(404, '01', "Merchant not found");
        } catch (\Exception $ex) {
            return respondError(500, "01", "Error while deactivating account");
        }
    }
}
