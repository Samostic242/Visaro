<?php

namespace App\Repositories\V2\Merchant\Account;
use App\Enums\Merchant\Compliance\DocumentType;
use App\Interfaces\Repositories\V2\Merchant\Account\MerchantComplianceInterface;
use App\Models\Merchant\Account\MerchantCompliance;
use App\Models\Merchant\Account\MerchantDocument;

class MerchantComplianceRepository implements MerchantComplianceInterface
{

    public function findById(string $id): MerchantCompliance
    {
        return MerchantCompliance::find($id);
    }
    public function create(array $data)
    {
        $compliance = new MerchantCompliance();
        $compliance->public_id = uuid();
        $compliance->merchant_id = auth()->id();
        $compliance->cac_number = $data['cac_number'] ?? null;
        $compliance->cac_document = $data['cac_document'] ?? null;
        $compliance->proof_of_address = $data['proof_of_address'] ?? null;
        $compliance->local_government = $data['local_government'] ?? null;
        $compliance->state = $data['state'] ?? null;
        $compliance->city = $data['city'] ?? null;
        $compliance->street_address = $data['street_address'] ?? null;
        $compliance->land_mark = $data['land_mark'] ?? null;
        $compliance->meta = $data['meta'] ?? null;
        $compliance->save();
        return $compliance;
    }

    public function update(string $id, array $data)
    {
        $compliance = $this->findById($id);
        if(!$compliance){
            return false;
        }
        $compliance->public_id = uuid();
        $compliance->merchant_id = auth()->id();
        $compliance->cac_number = $data['cac_number'] ?? $compliance->cac_number;
        if(array_key_exists('cac_document', $data)){
        $uploaded_file_url = upload_to_cloudinary('Compliance CAC Document', $data['cac_document']->getRealPath());
        $file_size = $data['cac_document']->getSize();
        $file_type = $data['cac_document']->getClientMimeType();
        $file_name = $data['cac_document']->getClientOriginalName();
        $purpose = DocumentType::CAC;
        $document_data = [
            'compliance_id' => $compliance->id,
            'file_type' => $file_type,
            'file_size' => $file_size,
            'file_name' => $file_name,
            'purposes' => $purpose,
            'url' => $uploaded_file_url
        ];
        $this->createComplianceDocument($document_data);
        $compliance->cac_document = $uploaded_file_url ?? $compliance->cac_document;
        }
        if(array_key_exists('proof_of_address', $data)){
            $uploaded_file_url = upload_to_cloudinary('Compliance Proof of Address', $data['proof_of_address']->getRealPath());
            $file_size = $data['proof_of_address']->getSize();
            $file_type = $data['proof_of_address']->getClientMimeType();
            $file_name = $data['proof_of_address']->getClientOriginalName();
            $purpose = DocumentType::ADDRESS;
            $document_data = [
                'compliance_id' => $compliance->id,
                'file_type' => $file_type,
                'file_size' => $file_size,
                'file_name' => $file_name,
                'purposes' => $purpose,
                'url' => $uploaded_file_url
            ];
            $this->createComplianceDocument($document_data);
            $compliance->proof_of_address = $uploaded_file_url ?? $compliance->proof_of_address;
        }
        $compliance->local_government = $data['local_government'] ??  $compliance->local_government;
        $compliance->state = $data['state'] ?? $compliance->state;
        $compliance->city = $data['city'] ?? $compliance->city;
        $compliance->street_address = $data['street_address'] ?? $compliance->street_address;
        $compliance->land_mark = $data['land_mark'] ?? $compliance->land_mark;
        $compliance->meta = $data['meta'] ??  $compliance->meta;
        $compliance->save();
        return $compliance;
    }

    public function createComplianceDocument(array $data)
    {
        $document = new MerchantDocument();
        $document->compliance_id = $data['compliance_id'] ?? null;
        $document->public_id = uuid();
        $document->url = $data['url'] ?? null;
        $document->file_type = $data['file_type'] ?? null;
        $document->file_size = $data['file_size'] ?? null;
        $document->file_name = $data['file_name'] ?? null;
        $document->purpose = $data['purpose'] ?? null;
        $document->save();
        return $document;
    }
}

