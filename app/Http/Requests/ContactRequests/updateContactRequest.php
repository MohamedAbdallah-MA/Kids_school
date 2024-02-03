<?php

namespace App\Http\Requests\ContactRequests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;

class updateContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array_merge(Contact::deleteRules() ,
        [
            'CourseId' => 'required'
        ]);
    }
}
