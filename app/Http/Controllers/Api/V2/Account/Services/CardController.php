<?php

namespace App\Http\Controllers\Api\V2\Account\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Services\Card\CardRequest;
use App\Interfaces\Repositories\V2\Account\Services\CardRepositoryInterface;

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
        if (!$created = $this->cardRepository->create($validated_data)) {
            return respondError(400, '01', "An error occurred while adding a new card");
        }
        return respondSuccess("Card Added Successfully", $created);
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
    public function deleteCard(int $cardId)
    {
        if (!$card = $this->cardRepository->findById($cardId)) {
            return respondError(404, '01', "Card Not Found");
        }
        if (!$deleted = $this->cardRepository->delete($cardId)) {
            return respondError(400, '01', "An error encountered while deleting card");
        }
        return respondSuccess("Card Deleted Successfully");
    }

}
