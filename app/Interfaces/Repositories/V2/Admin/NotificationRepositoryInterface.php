<?php

namespace App\Interfaces\Repositories\V2\Admin;

interface NotificationRepositoryInterface
{
    public function sendEmailNotification(array $data);
}
