<?php

namespace App\Http\Requests\ActivityRequests;

use App\Models\Activity;
use Illuminate\Foundation\Http\FormRequest;

class deleteActivityRequest extends FormRequest
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
        return Activity::deleteRules();
    }
}
