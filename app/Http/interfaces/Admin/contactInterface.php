<?php
namespace App\Http\interfaces\Admin;

use App\Http\Requests\ContactRequests\createContactRequest;
use App\Http\Requests\ContactRequests\deleteContactRequest;


interface contactInterface
{
    public function createContact ();

    public function storeContact (createContactRequest $request);

    public function viewContacts ();

    public function deleteContact (deleteContactRequest $request);
}
?>
