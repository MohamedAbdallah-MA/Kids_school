<?php
namespace App\Http\repositories\Admin;
use App\Models\Activity;
use App\Http\Traits\imageTraits;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\interfaces\Admin\activityInterface;
use App\Http\Requests\ActivityRequests\createActivityRequest;
use App\Http\Requests\ActivityRequests\deleteActivityRequest;
use App\Http\Requests\ActivityRequests\updateActivityRequest;

class activityRepository implements activityInterface
{
    use imageTraits;
    public $activityModel ;

    public function __construct(Activity $activity)
    {
        $this->activityModel = $activity ;
    }

    public function createActivity ()
    {
        return view('Admin.activity.create');
    }

    public function storeActivity (createActivityRequest $request)
    {

        $iconName = $this->setImageName($request->icon , 'activity');
        $this->uploadImage($request->icon , $iconName , 'activity' );
        $this->activityModel::create([
            'title' => $request->title ,
            'slug' => $request->slug ,
            'icon' => $iconName
        ]);
        Alert::success('Done' , 'Activity Added Successfully' );
        return redirect()->back();
    }

    public function viewActivities ()
    {
        $activities = $this->activityModel::get();
        return view('admin.activity.index' , compact('activities')) ;
    }

    public function deleteActivity (deleteActivityRequest $request)
    {
        $activity = $this->activityModel::find($request->activityId);
        unlink(public_path($activity->icon));
        $activity->delete();
        Alert::success('deleted' , 'Activity Deleted successfully');
        return redirect()->back();
    }

    public function editActivity ($activityId)
    {
        $activity = $this->activityModel::find($activityId) ;
        return view('Admin.activity.edit' , compact('activity')) ;
    }

    public function updateActivity (updateActivityRequest $request)
    {
        $oldActivity = $this->activityModel::find($request->activityId) ;
        if ($request->has('icon'))
        {
            $iconName = $this->setImageName($request->icon , 'activity');
            $this->uploadImage($request->icon , $iconName , 'activity' , $oldActivity->icon ) ;
        }
        else
        {
            $oldIconName = explode('\\' , $oldActivity->icon , 3 ) ;
        }
        $this->activityModel::where('id' , $request->activityId)->update([
            'title' => $request->title ,
            'slug' => $request->slug ,
            'icon' =>  (isset($request->image)) ? $iconName : $oldIconName[2]
        ]);
        Alert::success('Updated' , 'Activity Updated Successfully');
        return redirect(route('admin.activity.view'));
    }
}

?>
