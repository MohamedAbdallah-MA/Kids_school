<?php

namespace App\Http\Requests\CourseRequests;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;

class deleteCourseRequest extends FormRequest
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
        return Course::deleteRules();
    }
}
