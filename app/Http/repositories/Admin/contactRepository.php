<?php
namespace App\Http\repositories\Admin;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\interfaces\Admin\contactInterface;
use App\Http\Requests\ContactRequests\createContactRequest;
use App\Http\Requests\ContactRequests\deleteContactRequest;

class contactRepository implements contactInterface 
{
    private $contactModel ;

    public function __construct (Contact $contact)
    {
        $this->contactModel = $contact ;
    }

    public function createContact ()
    {
        return view('admin.contact.create');
    }

    public function storeContact (createContactRequest $request)
    {
        $this->contactModel->create([
            'name' => $request->name ,
            'email' => $request->email ,
            'message' => $request->message
        ]);

        Alert::success('added' , 'message added successfully') ;
        return redirect()->back();

    }

    public function viewContacts ()
    {
        $contacts = $this->contactModel::get();
        return view('admin.contact.index' , compact('contacts'));
    }

    public function deleteContact (deleteContactRequest $request)
    {
        $this->contactModel::where('id' , $request->contactId)->delete();
        Alert::success('deleted' , 'contact deleted successfully') ;
        return redirect()->back();
    }
}

?>