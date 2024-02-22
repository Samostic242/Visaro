<?php

namespace App\Http\Controllers\api\V2\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Newsletter\NewsletterRequest;
use App\Interfaces\Repositories\V2\Newsletter\NewsletterRepositoryInterface;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    function __construct(
     protected  NewsletterRepositoryInterface $newsletterRepository
    )
    {

    }

    public function subscribe(NewsletterRequest $request)
    {
        $validated_data = $request->validated();
        if(!$created = $this->newsletterRepository->subscribe($validated_data)){
            return \respondError('An error occured while subscribing');
        }
        return \respondSuccess('You have successfully subscribed to our newsletter', $created);
    }
}
