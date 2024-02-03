<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\interfaces\Admin\activityInterface;
use App\Http\Requests\ActivityRequests\createActivityRequest;
use App\Http\Requests\ActivityRequests\deleteActivityRequest;
use App\Http\Requests\ActivityRequests\updateActivityRequest;


class adminActivityController extends Controller
{
    public $activityinterface ;

    public function __construct(activityInterface $activity)
    {
        $this->activityinterface = $activity ;
    }

    public function createActivity ()
    {
        return $this->activityinterface->createActivity();
    }

    public function storeActivity (createActivityRequest $request)
    {
        return $this->activityinterface->storeActivity($request);

    }

    public function viewActivities ()
    {
        return $this->activityinterface->viewActivities();

    }

    public function deleteActivity (deleteActivityRequest $request)
    {
        return $this->activityinterface->deleteActivity($request);

    }

    public function editActivity ($activityId)
    {
        return $this->activityinterface->editActivity($activityId);
    }

    public function updateActivity (updateActivityRequest $request)
    {
        return $this->activityinterface->updateActivity($request);

    }
}
