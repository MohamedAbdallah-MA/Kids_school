<?php
namespace App\Http\repositories\Admin;

use App\Http\interfaces\Admin\teacherInterface;
use App\Http\Traits\imageTraits;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\TeacherRequests\createTeacherRequest;
use App\Http\Requests\TeacherRequests\deleteTeacherRequest;
use App\Http\Requests\TeacherRequests\updateTeacherRequest;

class teacherRepository implements teacherInterface
{
    use imageTraits ;

    public $teacherModel ;

    public function __construct(Teacher $teacher)
    {
        $this->teacherModel = $teacher ;
    }

    public function createTeacher ()
    {
        $courses = Course::select('id','name')->get();
        return view('Admin.teachers.create' , compact('courses'));
    }


    public function storeTeacher (createTeacherRequest $request)
    {
        $imageName = $this->setImageName($request->image , 'teacher');
        $this->uploadImage($request->image , $imageName , 'teacher');
        $this->teacherModel::create([
            'name' => $request->name ,
            'description' => $request->description ,
            'course_id' => $request->course_id ,
            'image' => $imageName
        ]);
        Alert::Success('Added' , 'Teacher added successfully') ;
        return redirect()->back();
    }


    public function viewTeachers ()
    {
        $teachers = $this->teacherModel::get();
        return view('Admin.teachers.index' , compact('teachers') ) ;
    }

    public function deleteTeacher (deleteTeacherRequest $request)
    {
        $teacher = $this->teacherModel::find($request->teacherId);
        unlink(public_path($teacher->image));
        $teacher->delete();
        Alert::success('Deleted' , 'Teacher deleted successfully');
        return redirect()->back();
    }


    public function editTeacher ($teacherId)
    {
        $teacher = $this->teacherModel::find($teacherId);
        $courses = Course::select('id' , 'name')->get();
        return view('Admin.teachers.edit' , compact('teacher' , 'courses')) ;
    }


    public function updateTeacher (updateTeacherRequest $request)
    {
        $teacher = $this->teacherModel::find($request->teacherId);

        if ( $request->has('image'))
        {
            $imageName = $this->setImageName($request->image , 'teacher');
            $this->uploadImage($request->image , $imageName , 'teacher' , $teacher->image );
        }
        else
        {
            //get the image name from request as it reterns in format 'images\teacher\'.$value
            $oldImageName = explode('\\' ,  $teacher->image , 3);
        }

        $this->teacherModel::where('id',$request->teacherId)->update([
            'name' => $request->name ,
            'description' => $request->description ,
            'image' => (isset($imageName)) ? $imageName : $oldImageName[2] ,
            'course_id' => $request->course_id
        ]);

        Alert::success('Updated' , 'Teacher updated successfully');
        return redirect(route('admin.teacher.view'));
    }
}

?>
