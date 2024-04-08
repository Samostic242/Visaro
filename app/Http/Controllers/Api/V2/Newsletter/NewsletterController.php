<?php

namespace App\Http\Controllers\Api\V2\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Newsletter\NewsletterRequest;
use App\Interfaces\Repositories\V2\Newsletter\NewsletterRepositoryInterface;

/**
 * @group Newsletter
 * @description APIs for managing Newsletter
 */
class NewsletterController extends Controller
{
    function __construct(
        protected NewsletterRepositoryInterface $newsletterRepository
    )
    {

    }

    /**
     * Subscribe to newsletter
     */
    public function subscribe(NewsletterRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->newsletterRepository->subscribe($validated_data)) {
            return respondError(400, '01', 'An error occurred while subscribing');
        }
        return respondSuccess('You have successfully subscribed to our newsletter', $created);
    }
}
