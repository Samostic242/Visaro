<?php

namespace App\Http\Controllers\api\V2\Commerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Commerce\Sku\CreateSkuRequest;
use App\Http\Requests\V2\Commerce\Sku\UpdateSkuRequest;
use App\Interfaces\Repositories\V2\Commerce\SkusRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @group Sku
 * @subgroup
 * @description APIs for Sku Functions
 */
class SkuController extends Controller
{
    function  __construct(
        protected SkusRepositoryInterface $skuRepository
    )
    {

    }

    /**
     * Create Sku
     */
    public function create(CreateSkuRequest $request)
    {
        $validated_data = $request->validated_data();
        if(!$created = $this->skuRepository->create($validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Sku created Successfully', $created);
    }

    /**
     * Update Sku
     */
    public function update(UpdateSkuRequest $request, string $sku_id)
    {
        $validated_data = $request->validated();
        if(!$updated = $this->skuRepository->update($sku_id, $validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Sku updated Successfully', $updated);

    }
}
