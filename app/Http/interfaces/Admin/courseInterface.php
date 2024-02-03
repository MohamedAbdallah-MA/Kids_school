<?php
namespace App\Http\interfaces\Admin;

use App\Http\Requests\CourseRequests\createCourseRequest;
use App\Http\Requests\CourseRequests\deleteCourseRequest;
use App\Http\Requests\CourseRequests\updateCourseRequest;

interface courseInterface
{

    public function createCourse () ;
    public function storeCourse (createCourseRequest $request) ;
    public function viewCourses () ;
    public function deleteCourse (deleteCourseRequest $request) ;
    public function editCourse ($courseId) ;
    public function updateCourse (updateCourseRequest $request ) ;

}

?>
