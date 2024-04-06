<?php

namespace App\Repositories\V2\Account\Services;
use App\Interfaces\Repositories\V2\Account\Services\CardRepositoryInterface;
use App\Models\Card;

class CardRepository implements CardRepositoryInterface
{
    public function findById(string $id)
    {
        return Card::find($id);
    }
    public function create(array $data)
    {
        $card = new Card();
        $card->public_id = uuid() ?? null;
        $card->owner_id = auth()->user()->id;
        $card->owner = auth()->user()->firstname ?? null ;
        $card->type = $data['type'] ?? null ;
        $card->number = $data['number'] ?? null ;
        $card->expiration_month = $data['expiration_month'] ?? null ;
        $card->expiration_year = $data['expiration_year'] ?? null ;
        $card->cvv = $data['cvv'] ?? null ;
        $card->last_four_digit = $data['last_four_digit'] ?? null ;
        $card->country = $data['country'] ?? null ;
        $card->state = $data['state'] ?? null ;
        $card->postal_code = $data['postal_code'] ?? null ;
        $card->city = $data['city'] ?? null ;
        $card->street_address = $data['street_address'] ?? null ;
        $card->lga = $data['lga'] ?? null ;
        $card->provider = $data['provider'] ?? null ;
        if(array_key_exists('ProviderLogo', $data)){
        $card->provider_logo = upload_to_cloudinary('ProviderLogo', $data['provider_logo']->getRealPath()) ?? null;
        }
        $card->allow_charge = $data['allow_charge'];
        $card->save();

        return $card ;

    }

    public function update(string $id, array $data)
    {
        $card = $this->findById($id);
        if(!$card)
        {
            return false;
        }
        $card->owner = $data['owner'] ?? $card->owner ;
        $card->type = $data['type'] ?? $card->type ;
        $card->number = $data['number'] ?? $card->number ;
        $card->expiration_month = $data['expiration_month'] ?? $card->expiration_month ;
        $card->expiration_year = $data['expiration_year'] ?? $card->expiration_year ;
        $card->cvv = $data['cvv'] ?? $card->cvv ;
        $card->last_four_digit = $data['last_four_digit'] ?? $card->last_four_digit ;
        $card->country = $data['country'] ?? $card->country ;
        $card->state = $data['state'] ?? $card->state ;
        $card->postal_code = $data['postal_code'] ?? $card->postal_code ;
        $card->city = $data['city'] ?? $card->city ;
        $card->street_address = $data['street_address'] ?? $card->street_address ;
        $card->lga = $data['lga'] ?? $card->lga ;
        $card->provider = $data['provider'] ?? $card->provider ;
        $card->provider_logo = upload_to_cloudinary('ProviderLogo', $data['provider_logo']->getRealPath()) ?? null ;
        $card->allow_charge = $data['allow_charge'] ?? $card->allow_charge ;
        $card->active = $data['active'] ?? true ;
        $card->status = $data['status'] ?? $card->status ;
        $card->save();
        return $card ;
    }

    public function getCard()
    {
        $user = auth()->user();
        return  $user->card;
    }

    public function delete(string $id)
    {
        return Card::destroy($id);
    }

}
