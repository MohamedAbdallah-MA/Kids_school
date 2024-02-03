<?php
namespace App\Http\repositories\EndUser;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Teacher;
use App\Models\Activity;
use App\Http\interfaces\EndUser\endUserInterface;


class enduserRepository implements endUserInterface
{
    public function home ()
    {
        $sliders = Slider::get();
        $activities = Activity::get();
        $teachers = Teacher::get();
        $courses = Course::get();
        return view('index' , compact(['sliders' , 'activities' , 'teachers' , 'courses' ]));
    }
}
?>