<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\interfaces\Admin\courseInterface;
use App\Http\Requests\CourseRequests\createCourseRequest;
use App\Http\Requests\CourseRequests\deleteCourseRequest;
use App\Http\Requests\CourseRequests\updateCourseRequest;


class adminCourseController extends Controller
{
    public $courseInterface ;

    public function __construct (courseInterface $course)
    {
        $this->courseInterface = $course ;
    }

    public function createCourse ()
    {
        return $this->courseInterface->createCourse();
    }

    public function storeCourse (createCourseRequest $request)
    {
        return $this->courseInterface->storeCourse($request);
    }

    public function viewCourses ()
    {
        return $this->courseInterface->viewCourses();
    }

    public function deleteCourse (deleteCourseRequest $request)
    {
        return $this->courseInterface->deleteCourse($request);
    }

    public function editCourse ($courseId)
    {
        return $this->courseInterface->editCourse($courseId) ;
    }

    public function updateCourse (updateCourseRequest $request )
    {
        return $this->courseInterface->updateCourse($request);
    }
}
