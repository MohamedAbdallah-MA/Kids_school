<?php

namespace App\Http\Requests\ContactRequests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;

class deleteContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Contact::deleteRules() ;
    }
}
