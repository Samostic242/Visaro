<?php
namespace App\Interfaces\Repositories\V2\Account\Settings;

Interface SettingsRepositoryInterface
{
    public function changeEmail(array $data);

    public function completeChangeEmail(array $data);

    public function contact(array $data);

}
