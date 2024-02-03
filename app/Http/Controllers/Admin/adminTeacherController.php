<?php

namespace App\Http\Controllers\Admin;

use App\Http\interfaces\Admin\teacherInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequests\createTeacherRequest;
use App\Http\Requests\TeacherRequests\deleteTeacherRequest;
use App\Http\Requests\TeacherRequests\updateTeacherRequest;

class adminTeacherController extends Controller
{

    public $teacherInterface;

    public function __construct(teacherInterface $teacher)
    {
        $this->teacherInterface = $teacher;
    }

    public function createTeacher()
    {

        return $this->teacherInterface->createTeacher();
    }

    public function storeTeacher(createTeacherRequest $request)
    {
        return $this->teacherInterface->storeTeacher($request);
    }

    public function viewTeachers()
    {
        return $this->teacherInterface->viewTeachers();
    }

    public function deleteTeacher(deleteTeacherRequest $request)
    {
        return $this->teacherInterface->deleteTeacher($request);
    }

    public function editTeacher($teacherId)
    {
        return $this->teacherInterface->editTeacher($teacherId);
    }

    public function updateTeacher(updateTeacherRequest $request)
    {
        return $this->teacherInterface->updateTeacher($request);
    }

    
}
