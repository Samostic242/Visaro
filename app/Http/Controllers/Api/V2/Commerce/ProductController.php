<?php

namespace App\Http\Controllers\Api\V2\Commerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Commerce\Product\CreateProductRequest;
use App\Http\Requests\V2\Commerce\Product\UpdateProductRequest;
use App\Http\Resources\V2\Commerce\Product\ProductResource;
use App\Http\Resources\V2\Commerce\StoreFront\StoreFrontResource;
use App\Interfaces\Repositories\V2\Commerce\ProductRepositoryInterface;

/**
 * @group Commerce
 * @subgroup Products
 * @description APIs for Products
 */
class ProductController extends Controller
{
    function __construct(
        protected ProductRepositoryInterface $productRepository
    )
    {

    }

    /**
     * Create Product
     */
    public function create(CreateProductRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->productRepository->create($validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Product Created Successfully', new ProductResource($created));
    }


    public function getProducts()
    {
        $id = auth()->id();
        $products = $this->productRepository->getProducts($id);
        return respondSuccess('Products Fetched Successfully', ProductResource::collection($products));
    }
    /**
     * Update Products
     * @param UpdateProductRequest $request
     */
    public function update(UpdateProductRequest $request, string $product_id)
    {
        $validated_data = $request->validated();
        if (!$updated = $this->productRepository->update($product_id, $validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Product updated Successfully', new ProductResource($updated));
    }

    public function getProductById(string $id)
    {
        $products = $this->productRepository->getProductById($id);
        return respondSuccess('Products Fetched Successfully', new ProductResource($products));
    }
     public function getStoreFrontByProductId(string $id)
     {

        if(!$storefronts = $this->productRepository->getStoreFrontByProductId($id))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('StoreFronts Fetched Successfully', $storefronts);

     }

}
