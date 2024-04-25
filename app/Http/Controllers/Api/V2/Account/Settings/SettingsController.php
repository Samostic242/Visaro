<?php

namespace App\Http\Controllers\Api\V2\Account\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Settings\ChangeEmailRequest;
use App\Http\Requests\V2\Account\Settings\CompleteEmailRequest;
use App\Http\Requests\V2\Account\Settings\ContactRequest;
use App\Interfaces\Repositories\V2\Account\Settings\SettingsRepositoryInterface;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function __construct(
    protected SettingsRepositoryInterface $settingsRepository
    )
    {

    }

    public function getOtpForChangingEmail(ChangeEmailRequest $request)
    {
        $validated_data = $request->validated();
        return $this->settingsRepository->changeEmail($validated_data);
    }

    public function completeEmailChangeRequest(CompleteEmailRequest $request)
    {
        $validated_data = $request->validated();
        return $this->settingsRepository->completeChangeEmail($validated_data);
    }

    public function contactUs(ContactRequest $request)
    {
        $validated_data = $request->validated();
        if(!$created = $this->settingsRepository->contact($validated_data)){
            return respondError(400, '01', 'An error occurred while sending your message. Please try again later.');
        }
        return respondSuccess('Your message has been sent successfully. A typical response time is within 24Hours', $created);
    }
}
