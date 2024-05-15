<?php

namespace App\Http\Integrations\Firebase\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class SendNotificationRequest extends Request
{
    function __construct(
        protected array $data,
        protected string $user_device_token,
        protected string $tag
    ){

    }


    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    protected function defaultBody(): array
    {
        return [
            "tag" => $this->tag,
            "registration_ids" => [$this->user_device_token],
            "notification" => $this->data
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/fcm/send';
    }
}
