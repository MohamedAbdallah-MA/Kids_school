<?php

namespace App\Http\Requests\CourseRequests;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;

class updateCourseRequest extends FormRequest
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
        return array_merge(Course::createRules() , [
        'courseId' => 'requirerd | exists:courses,id'
        ]);
    }
}
