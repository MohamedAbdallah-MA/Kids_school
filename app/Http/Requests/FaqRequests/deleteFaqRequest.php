<?php

namespace App\Http\Requests\FaqRequests;

use App\Models\Faq;
use Illuminate\Foundation\Http\FormRequest;

class deleteFaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Faq::deleteRules();
    }
}
