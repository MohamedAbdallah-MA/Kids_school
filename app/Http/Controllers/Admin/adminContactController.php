<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\interfaces\Admin\contactInterface;
use App\Http\Requests\ContactRequests\createContactRequest;
use App\Http\Requests\ContactRequests\deleteContactRequest;


class adminContactController extends Controller
{
    public $contactInterface ;

    public function __construct (contactInterface $contact)
    {
        $this->contactInterface = $contact ;
    }

    public function createContact ()
    {
        return $this->contactInterface->createContact();
    }

    public function storeContact (createContactRequest $request)
    {
        return $this->contactInterface->storeContact($request);

    }

    public function viewContacts ()
    {
        return $this->contactInterface->viewContacts();

    }

    public function deleteContact (deleteContactRequest $request)
    {
        return $this->contactInterface->deleteContact($request);

    }
}
