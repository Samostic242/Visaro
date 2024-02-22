<?php

namespace App\Repositories\V2\Newsletter;
use App\Interfaces\Repositories\V2\Newsletter\NewsletterRepositoryInterface;
use App\Mail\V2\Newsletter\NewsletterMail;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;

class NewsletterRepository implements NewsletterRepositoryInterface
{
    public function subscribe(array $data)
    {
        $newsletter = new Newsletter();
        $newsletter->email = $data['email'] ?? null;
        $newsletter->save();

        Mail::send(new NewsletterMail($data['email']));
        return $newsletter;
    }


}
