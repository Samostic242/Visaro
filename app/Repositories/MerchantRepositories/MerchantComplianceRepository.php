<?php

namespace App\Repositories\MerchantRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Merchants\MerchantCompliance;
use Illuminate\Database\Eloquent\Collection;

class MerchantComplianceRepository implements CreditorRepositoryInterface
{
    public function getAll(): Collection
    {
        return MerchantCompliance::all();
    }

    public function findById(string $id): ?MerchantCompliance
    {
        return MerchantCompliance::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return MerchantCompliance::find($array);
    }

    public function findByPublicId(string $public_id): ?MerchantCompliance
    {
        return MerchantCompliance::where('public_id', $public_id)->first();
    }

    public function findByMerchantId(string $merchant_id): ?MerchantCompliance
    {
        return MerchantCompliance::where('merchant_id', $merchant_id)->first();
    }

    public function create(array $data): MerchantCompliance
    {
        $compliance = new MerchantCompliance();
        $compliance->public_id = uuid() ?? null;
        $compliance->merchant_id = $data['merchant_id'] ?? null;
        $compliance->business_name = $data['business_name'] ?? null;
        $compliance->business_registration_number = $data['business_registration_number'] ?? null;
        $compliance->business_registration_document = $data['business_registration_document'] ?? null;
        $compliance->business_license_document = $data['business_license_document'] ?? null;
        $compliance->business_tax_document = $data['business_tax_document'] ?? null;
        $compliance->business_certificate_of_incorporation_document = $data['business_certificate_of_incorporation_document'] ?? null;
        $compliance->business_proof_of_address_document = $data['business_proof_of_address_document'] ?? null;
        $compliance->identity_number_of_director = $data['identity_number_of_director'] ?? null;
        $compliance->identity_document_of_director = $data['identity_document_of_director'] ?? null;
        $compliance->bvn = $data['bvn'] ?? null;
        $compliance->account_name = $data['account_name'] ?? null;
        $compliance->account_number = $data['account_number'] ?? '+234';
        $compliance->bank_name = $data['bank_name'] ?? null;
        $compliance->bank_code = $data['bank_code'] ?? null;
        $compliance->website = $data['website'] ?? null;
        $compliance->logo = $data['logo'] ?? null;
        $compliance->code = generateRandomNumber(7) ?? null;
        $compliance->country_id = $data['country_id'] ?? 158;
        $compliance->state = $data['state'] ?? null;
        $compliance->lga = $data['lga'] ?? null;
        $compliance->address1 = $data['address1'] ?? null;
        $compliance->address2 = $data['address2'] ?? null;
        $compliance->description = $data['description'] ?? null;
        $compliance->email = $data['email'] ?? null;
        $compliance->phone_code = $data['phone_code'] ?? "+234";
        $compliance->phone = $data['phone'] ?? null;
        $compliance->conflict_resolution_email = $data['conflict_resolution_email'] ?? null;
        $compliance->conflict_resolution_phone_code = $data['conflict_resolution_phone_code'] ?? null;
        $compliance->conflict_resolution_phone = $data['conflict_resolution_phone'] ?? null;
        $compliance->meta = $data['meta'] ?? null;
        $compliance->active = $data['active'] ?? true;
        $compliance->save();

        return $compliance;
    }

    public function update(string $id, array $data): MerchantCompliance|false
    {
        $compliance = $this->findById($id);
        if (!$compliance) {
            return false;
        }
        $compliance->business_name = $data['business_name'] ?? $compliance->business_name;
        $compliance->business_registration_number = $data['business_registration_number'] ?? $compliance->business_registration_number;
        $compliance->business_registration_document = $data['business_registration_document'] ?? $compliance->business_registration_document;
        $compliance->business_tax_document = $data['business_tax_document'] ?? $compliance->business_tax_document;
        $compliance->business_license_document = $data['business_license_document'] ?? $compliance->business_license_document;
        $compliance->business_certificate_of_incorporation_document = $data['business_certificate_of_incorporation_document'] ?? $compliance->business_certificate_of_incorporation_document;
        $compliance->business_proof_of_address_document = $data['business_proof_of_address_document'] ?? $compliance->business_proof_of_address_document;
        $compliance->identity_number_of_director = $data['identity_number_of_director'] ?? $compliance->identity_number_of_director;
        $compliance->identity_document_of_director = $data['identity_document_of_director'] ?? $compliance->identity_document_of_director;
        $compliance->bvn = $data['bvn'] ?? $compliance->bvn;
        $compliance->account_name = $data['account_name'] ?? $compliance->account_name;
        $compliance->account_number = $data['account_number'] ?? $compliance->account_number;
        $compliance->bank_name = $data['bank_name'] ?? $compliance->bank_name;
        $compliance->bank_code = $data['bank_code'] ?? $compliance->bank_code;
        $compliance->website = $data['website'] ?? $compliance->website;
        $compliance->state = $data['state'] ?? $compliance->state;
        $compliance->lga = $data['lga'] ?? $compliance->lga;
        $compliance->address1 = $data['address1'] ?? $compliance->address1;
        $compliance->address2 = $data['address2'] ?? $compliance->address2;
        $compliance->description = $data['description'] ?? $compliance->description;
        $compliance->conflict_resolution_email = $data['conflict_resolution_email'] ?? $compliance->conflict_resolution_email;
        $compliance->conflict_resolution_phone_code = $data['conflict_resolution_phone_code'] ?? $compliance->conflict_resolution_phone_code;
        $compliance->conflict_resolution_phone = $data['conflict_resolution_phone'] ?? $compliance->conflict_resolution_phone;
        $compliance->logo = $data['logo'] ?? $compliance->logo;
        $compliance->country_id = $data['country_id'] ?? $compliance->country_id;
        $compliance->email = $data['email'] ?? $compliance->email;
        $compliance->phone_code = $data['phone_code'] ?? $compliance->phone_code;
        $compliance->phone = $data['phone'] ?? $compliance->phone;
        $compliance->meta = $data['meta'] ?? $compliance->meta;
        $compliance->active = $data['active'] ?? $compliance->active;
        $compliance->save();

        return $compliance;
    }

    public function destroyById(string $id): int
    {
        return MerchantCompliance::destroy($id);
    }

}
