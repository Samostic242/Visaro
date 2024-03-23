<?php

namespace App\Http\Controllers\api\V2\Commerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Commerce\Attribute\CreateAttributeOptionRequest;
use App\Http\Requests\V2\Commerce\Attribute\CreateAttributeRequest;
use App\Http\Requests\V2\Commerce\Attribute\UpdateAttributeRequest;
use App\Interfaces\Repositories\V2\Commerce\AttributeRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @group Attributes
 * @subgroup
 * @description APIs for Attribute
 */
class AttributeController extends Controller
{
    //
    function __construct(
        protected AttributeRepositoryInterface $attributeRepository
    )
    {

    }

    /**
     * Create Attribute
     */
    public function create(CreateAttributeRequest $request)
    {
        $validated_data = $request->validated();
        if(!$created = $this->attributeRepository->create($validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Attribute created Successfully', $created);
    }

    /**
     * Update Attribute
     */
    public function update(UpdateAttributeRequest $request, string $attribute_id)
    {
        $validated_data = $request->validated();
        if(!$updated = $this->attributeRepository->update($attribute_id, $validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Attribute updated Successfully', $updated);
    }

    /**
     * Create Attribute Option
     */
   public function createAttributeOption(CreateAttributeOptionRequest $request)
   {
        $validated_data = $request->validated();
        if(!$created = $this->attributeRepository->createAttributeOption($validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Attribute created Successfully', $created);

   }

}
