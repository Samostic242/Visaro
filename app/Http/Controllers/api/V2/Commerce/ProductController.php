<?php

namespace App\Http\Controllers\api\V2\Commerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Commerce\Product\CreateProductRequest;
use App\Http\Requests\V2\Commerce\Product\UpdateProductRequest;
use App\Interfaces\Repositories\V2\Commerce\ProductRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup
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
        if(!$created = $this->productRepository->create($validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Product Created Successfully', $created);
    }

    /**
     * Update Products
     * @param UpdateProductRequest $request
     */
    public function update(UpdateProductRequest $request, string $product_id)
    {
        $validated_data = $request->validated();
        if(!$updated = $this->productRepository->update($product_id, $validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Product updated Successfully', $updated);
    }


}
