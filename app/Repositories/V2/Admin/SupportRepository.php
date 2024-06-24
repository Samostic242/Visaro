<?php

namespace App\Repositories\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\SupportRepositoryInterface;
use App\Models\Contact\Contact;

class SupportRepository implements SupportRepositoryInterface
{
    public function getAll()
    {
        $data = Contact::paginate(10);
        return $data;
    }
}
