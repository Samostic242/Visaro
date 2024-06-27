<?php

namespace App\Http\Controllers\Api\V2\Admin\Notification;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Admin\Notification\SendNotificationRequest;
use App\Interfaces\Repositories\V2\Admin\NotificationRepositoryInterface;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function __construct(
        protected NotificationRepositoryInterface $notificationRepository
    ){}

    public function sendNotification(SendNotificationRequest $request)
    {
        $validated_data = $request->validated();
        if(!$send = $this->notificationRepository->sendEmailNotification($validated_data)){
            return respondError(400, '01', 'Email Notification Not Sent');
        }
        return respondSuccess('Email Notification Sent Successfully');
    }
}
