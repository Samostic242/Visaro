<?php

namespace App\Http\Controllers\Api\V2\Commerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Commerce\Sku\CreateSkuRequest;
use App\Http\Requests\V2\Commerce\Sku\UpdateSkuRequest;
use App\Interfaces\Repositories\V2\Commerce\SkusRepositoryInterface;

/**
 * @group Commerce
 * @subgroup Product-Sku
 * @description APIs for Sku Functions
 */
class SkuController extends Controller
{
    function __construct(
        protected SkusRepositoryInterface $skuRepository
    )
    {

    }

    /**
     * Create product Sku
     */
    public function create(CreateSkuRequest $request)
    {
        $validated_data = $request->validated_data();
        if (!$created = $this->skuRepository->create($validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Sku created Successfully', $created);
    }

    /**
     * Update product Sku
     */
    public function update(UpdateSkuRequest $request, string $sku_id)
    {
        $validated_data = $request->validated();
        if (!$updated = $this->skuRepository->update($sku_id, $validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Sku updated Successfully', $updated);

    }
}
