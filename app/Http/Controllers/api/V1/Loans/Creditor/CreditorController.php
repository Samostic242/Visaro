<?php

namespace App\Http\Controllers\api\V1\Loans\Creditor;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Loans\Creditor\CreateNewCreditorRequest;
use App\Http\Requests\V1\Loans\Creditor\UpdateCreditorConditionsRequest;
use App\Http\Requests\V1\Loans\Creditor\UpdateCreditorRequest;
use App\Repositories\CreditorRepositories\CreditorConditionsRepository;
use App\Repositories\CreditorRepositories\CreditorRepository;
use Illuminate\Http\Request;

/**
 * @group Creditors
 * @description APIs for managing creditors
 */
class CreditorController extends Controller
{
    public function __construct(
        protected CreditorRepository           $creditorRepository,
        protected CreditorConditionsRepository $creditorConditionsRepository,
    )
    {

    }

    /**
     * Fetch all creditors.
     */
    public function fetchCreditors(Request $request)
    {
        $creditors = $this->creditorRepository->getAll();
        return respondSuccess("Creditors fetched successfully", $creditors);
    }

    /**
     * Get a creditor.
     */
    public function fetchCreditor(int $creditor_id)
    {
        if (!$creditor = $this->creditorRepository->findById($creditor_id)) {
            return respondError(404, '01', 'Creditor does not exist');
        }
        return respondSuccess("Creditor fetched successfully", $creditor);
    }

    /**
     * Add new creditor.
     */
    public function createCreditorRecord(CreateNewCreditorRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->creditorRepository->create($validated_data)) {
            return respondError(400, '01', 'Error encountered adding new creditor');
        }
        # Create default condition
        $data = [
            'creditor_id' => $created->id
        ];
        $this->creditorConditionsRepository->create($data);
        return respondSuccess("Creditor added successfully, kindly update conditions", $created);
    }

    /**
     * Update creditor record.
     */
    public function updateCreditorRecord(UpdateCreditorRequest $request, int $creditor_id)
    {
        $validated_data = $request->validated();
        if (!$creditor = $this->creditorRepository->findById($creditor_id)) {
            return respondError(404, '01', 'Creditor does not exist');
        }
        if (!$updated = $this->creditorRepository->update($creditor->id, $validated_data)) {
            return respondError(400, '01', 'Error encountered updating creditor');
        }
        return respondSuccess("Creditor updated successfully", $updated);
    }

    /**
     * Delete creditor record.
     */
    public function deleteCreditor(int $creditor_id)
    {
        if (!$creditor = $this->creditorRepository->findById($creditor_id)) {
            return respondError(404, '01', 'Creditor does not exist');
        }
        if (!$deleted = $this->creditorRepository->destroyById($creditor_id)) {
            return respondError(400, '01', 'Error deleting creditor record');
        }
        return respondSuccess("Creditor deleted successfully");
    }

    /**
     * fetch Creditor Conditions
     * @subgroup Conditions
     */
    public function fetchCreditorConditions(int $creditor_id)
    {

        if (!$creditor = $this->creditorRepository->findById($creditor_id)) {
            return respondError(404, '01', 'Creditor does not exist');
        }
        if (!$condition = $this->creditorConditionsRepository->findByCreditorId($creditor_id)) {
            $data = [
                'creditor_id' => $creditor->id
            ];
            $condition = $this->creditorConditionsRepository->create($data);
        }
        return respondSuccess("Condition fetched successfully", $condition);
    }

    /**
     * Update Creditor Conditions
     * @subgroup Conditions
     */
    public function updateCreditorConditions(UpdateCreditorConditionsRequest $request, int $creditor_id)
    {
        $validated_data = $request->validated();
        if (!$creditor = $this->creditorRepository->findById($creditor_id)) {
            return respondError(404, '01', 'Creditor does not exist');
        }
        if (!$condition = $this->creditorConditionsRepository->findByCreditorId($creditor_id)) {
            $data = [
                'creditor_id' => $creditor->id
            ];
            $condition = $this->creditorConditionsRepository->create($data);
        }
        if (!$updated = $this->creditorConditionsRepository->update($condition->id, $validated_data)) {
            return respondError(400, '01', 'Error encountered updating creditor');
        }
        return respondSuccess("Condition updated successfully", $updated);
    }


}
