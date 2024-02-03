<?php

namespace App\Http\repositories\Admin;

use App\Models\Course;
use App\Http\Traits\imageTraits;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\interfaces\Admin\courseInterface;
use App\Http\Requests\CourseRequests\createCourseRequest;
use App\Http\Requests\CourseRequests\deleteCourseRequest;
use App\Http\Requests\CourseRequests\updateCourseRequest;


class courseRepository implements courseInterface
{
    use imageTraits;
    public $courseModel;

    public function __construct(Course $course)
    {
        $this->courseModel = $course;
    }

    public function createCourse()
    {
        return view('Admin.course.create');
    }

    public function storeCourse(createCourseRequest $request)
    {
        $imageName = $this->setImageName($request->image, 'course');
        $this->uploadImage($request->image, $imageName, 'course');
        $this->courseModel::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName
        ]);
        Alert::success("Done", "course created successfully");
        return redirect()->back();
    }

    public function viewCourses()
    {
        $courses = $this->courseModel::get();
        return view('Admin.course.index', compact('courses'));
    }

    public function deleteCourse(deleteCourseRequest $request)
    {
        $course = $this->courseModel::find($request->courseId);

        unlink(public_path($course->image));
        $course->delete();

        Alert::success('delete', 'course deleted successfully');
        return redirect()->back();
    }

    public function editCourse($courseId)
    {
        $course = $this->courseModel::find($courseId);
        return view('Admin.course.edit', compact('course'));
    }

    public function updateCourse(updateCourseRequest $request)
    {
        $oldCourse = $this->courseModel::where('id', $request->id)->first();

        if ($request->has('image')) {
            $imageName = $this->setImageName($request->image, 'course');
            $this->uploadImage($request->image, $imageName, 'course', $oldCourse->image);
        } else {
            $oldImageName = explode('\\', $oldCourse->image, 3);
        }

        $this->courseModel::where('id', $request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => (isset($request->image)) ? $imageName : $oldImageName[2]
        ]);

        Alert::success('Updated', 'course updated successfully');
        return redirect(route('admin.course.view'));
    }
}
