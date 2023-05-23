<?php

//declare(strict_types = 1);

namespace App\Services;

use App\Traits\RequestService;

use function config;

class MessageService
{

    use RequestService;

    /**
     * @var string
     */
    protected $baseUri;

    /**
     * @var string
     */
    protected $secret;

    /**
     * MessageService constructor.
     */
    public function __construct()
    {
        $this->baseUri = config('services.article.base_uri');
        $this->secret = config('services.article.secret');
    }

    /**
     * @return string
     */

    public function validate_otp($data) : string
    {
        return $this->validate_otp('POST', '/api/v1/validate_otp', $data);
    }


}
