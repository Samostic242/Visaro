<?php

namespace App\Http\Controllers\Api\V2\Account\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Services\Card\CardRequest;
use App\Http\Requests\V2\Account\Services\Card\EditCardRequest;
use App\Interfaces\Repositories\V2\Account\Services\CardRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @group Banks
 * @subgroup Cards
 * @description APIs for Card  Related Functions
 */
class CardController extends Controller
{
    function __construct(
        protected CardRepositoryInterface $cardRepository
    )
    {

    }

    /**
     * Add a New Card
     */
    public function create(CardRequest $request)
    {
        $validated_data = $request->validated();
        $addCard = $this->cardRepository->create($validated_data);
        return $addCard;
    }

    /**
     * Fecth User Card
     */
    public function fetchCard()
    {
        if (!$card = $this->cardRepository->getCard()) {
            return respondError(400, '01', "You have not added a card");
        }
        return respondSuccess("Card Returned Successfully", $card);
    }

    /**
     * Delete a card
     */
    public function deleteCard($cardId)
    {
        if (!$card = $this->cardRepository->findById($cardId)) {
            return respondError(404, '01', "Card Not Found");
        }
        if (!$deleted = $this->cardRepository->delete($cardId)) {
            return respondError(400, '01', "An error encountered while deleting card");
        }
        return respondSuccess("Card Deleted Successfully");
    }

    public function editCard(EditCardRequest $request){
        $validated_data = $request->validated();
        if (!$card = $this->cardRepository->findById($validated_data['card_id'])){
            return respondError(404, '01', "Card Not Found");
        }
        if (!$updated = $this->cardRepository->update($validated_data)) {
            return respondError(400, '01', "An error encountered while updating card");
        }
        return respondSuccess('Nickname Set Successfully', $updated);
    }
    public function webhookController(Request $request)
    {
        $payload = $request->getContent();
        $signature = $request->header('x-paystack-signature');
        if(!$verify = verifyPaystackWebhook($signature, $payload)){
            return respondError(400, '01', "Yipee, Scammer Go away");
        }
        $data = $request->all();
        if($data['event'] == 'charge.success' && $data['data']['amount'] == 5000){
        return $this->cardRepository->updateCardStatus($data);
        }
        return respondSuccess('Webhook Received But not Processed');

    }
}
