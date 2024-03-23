<?php
namespace App\Repositories\V2\Commerce;
use App\Interfaces\Repositories\V2\Commerce\AttributeRepositoryInterface;
use App\Models\Commerce\Attribute;
use App\Models\Commerce\AttributeOption;


class AttributeRepository implements AttributeRepositoryInterface
{
    public function findAttributeByid(string $id)
    {
        return Attribute::find($id);
    }
    public function findAttributeOptionById(string $id)
    {
        return AttributeOption::find($id);
    }
    public function create(array $data)
    {
        $attribute = new Attribute();
        $attribute->public_id = uuid();
        $attribute->name = $data['name'] ?? null;
        $attribute->save();
        return $attribute;
    }

    public function update(string $id, array $data)
    {
        $attribute = $this->findAttributeByid($id);
        $attribute->public_id = uuid();
        $attribute->name = $data['name'] ?? $attribute->name;
        $attribute->save();
        return $attribute;
    }

    public function createAttributeOption(array $data)
    {
        $attributeOption = new AttributeOption();
        $attributeOption->public_id = uuid();
        $attributeOption->attribute_id = $data['attribute_id'];
        $attributeOption->value = $data['value'] ?? null;
        $attributeOption->save();
        return $attributeOption;
    }

    public function updateAttributeOption(string $id, array $data)
    {
        $attributeOption = $this->findAttributeOptionByid($id);
        $attributeOption->public_id = uuid();
        $attributeOption->value = $data['value'] ?? $attributeOption->value;
        $attributeOption->save();
        return $attributeOption;
    }
}
