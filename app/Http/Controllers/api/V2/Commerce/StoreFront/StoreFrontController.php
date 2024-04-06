<?php

namespace App\Http\Controllers\Api\V2\Commerce\StoreFront;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Commerce\StoreFront\AddProductToStoreFrontRequest;
use App\Http\Requests\V2\Commerce\StoreFront\CreateStoreFrontRequest;
use App\Http\Requests\V2\Commerce\StoreFront\UpdateStoreFrontRequest;
use App\Http\Resources\V2\Commerce\Order\OrderResource;
use App\Http\Resources\V2\Commerce\Product\ProductResource;
use App\Http\Resources\V2\Commerce\StoreFront\StoreFrontResource;
use App\Interfaces\Repositories\V2\Commerce\StoreFrontRepositoryInterface;
use Illuminate\Http\Request;

class StoreFrontController extends Controller
{
    function __construct(
        protected StoreFrontRepositoryInterface $storeFrontRepository
    ) {

    }

    public function create(CreateStoreFrontRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->storeFrontRepository->create($validated_data)) {
            return respondError(400, '01', 'An error occurred while creating storefront');
        }
        return respondSuccess('Store Front created successfully', new StoreFrontResource($created));
    }

    public function update(UpdateStoreFrontRequest $request, string $id)
    {
        $validated_data = $request->validated();
        if (!$updated = $this->storeFrontRepository->update($id, $validated_data)) {
            return respondError(400, '01', 'An error occurred while updating storefront');
        }
        return respondSuccess('Store Front updated successfully', new StoreFrontResource($updated));
    }

    public function getStoreFrontsById(string $id)
    {
        if(!$storefront = $this->storeFrontRepository->getStoreFrontById($id))
        {
            return respondError(400, '01', 'An error occurred while fetching storefront');
        }
        return respondSuccess('Store Front Fetched successfully', new StoreFrontResource($storefront));

    }

    public function AddProductToStoreFront(AddProductToStoreFrontRequest $request, string $id)
    {
        $validated_data = $request->validated();
        if (!$created = $this->storeFrontRepository->addProductToStoreFronts($id, $validated_data['product_id'])) {

            return respondError(400, '01', 'An error occurred while adding product to storefront');
        }

        return respondSuccess('Product added to storefront successfully');
    }

    public function getMerchantStorefronts()
    {
        $id = auth()->id();
        if(!$storefront = $this->storeFrontRepository->get($id))
        {
            return respondError(400, '01', 'An error occurred while fetching storefront');
        }
        return respondSuccess('Store Front Fetched successfully', StoreFrontResource::collection($storefront));
    }

    public function getStoreFrontProducts(string $id)
    {
       if(!$products = $this->storeFrontRepository->getStoreFrontProducts($id))
       {
        return respondError(400, '01', 'An error occurred while fetching storefront');
       }
       return respondSuccess('StoreFront Product fetched Successfully', ProductResource::collection($products));

    }

    public function getStoreFrontsOrder(string $id)
    {
        if(!$orders = $this->storeFrontRepository->getStoreFrontsOrder($id))
       {
        return respondError(400, '01', 'An error occurred while fetching order');
       }
       return respondSuccess('StoreFront Order fetched Successfully', OrderResource::collection($orders));
    }
}
