<?php

namespace App\Repositories\V2\Admin;
use App\Enums\Admin\EmailRecipient;
use App\Interfaces\Repositories\V2\Admin\NotificationRepositoryInterface;
use App\Jobs\V2\Admin\SendEmailNotification;
use App\Mail\V2\Admin\EmailNotification;
use App\Models\Merchant\Onboarding\Merchant;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class NotificationRepository implements NotificationRepositoryInterface
{
    public function sendEmailNotification(array $data)
    {
        $recipients = $data['recipients'];
        $subject = $data['subject'];
        $body = $data['message'];
        if(strtolower($recipients) == EmailRecipient::USERS)
        {
            $email_recipients = User::get();
        }elseif(strtolower($recipients) == EmailRecipient::MERCHANTS){
            $email_recipients = Merchant::get();
        }
        //send email
        if(!$email_recipients){
            return false;
        }
        foreach($email_recipients as $recipient){
            //send email
            SendEmailNotification::dispatch($recipient->email, $subject, $body);
        }
        return true;
    }

    public function sendSmsNotification(array $data)
    {
        //send sms
        return true;
    }

    public function sendPushNotification(array $data)
    {
        //send push notification
        return true;
    }

    public function sendNotification(array $data)
    {
        //send notification
        return true;
    }
}
