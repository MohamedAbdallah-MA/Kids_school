<?php
namespace App\Http\interfaces\Admin;

use App\Http\Requests\TeacherRequests\createTeacherRequest;
use App\Http\Requests\TeacherRequests\deleteTeacherRequest;
use App\Http\Requests\TeacherRequests\updateTeacherRequest;


interface teacherInterface
{
    public function createTeacher () ;

    public function storeTeacher (createTeacherRequest $request) ;

    public function viewTeachers () ;

    public function deleteTeacher (deleteTeacherRequest $request) ;

    public function editTeacher ($teacherId) ;

    public function updateTeacher (updateTeacherRequest $request) ;
}
