<?php
namespace App\Http\interfaces\Admin;

use App\Http\Requests\ActivityRequests\createActivityRequest;
use App\Http\Requests\ActivityRequests\deleteActivityRequest;
use App\Http\Requests\ActivityRequests\updateActivityRequest;

interface activityInterface
{

    public function createActivity ();

    public function storeActivity (createActivityRequest $request);

    public function viewActivities ();

    public function deleteActivity (deleteActivityRequest $request);

    public function editActivity ($activityId);

    public function updateActivity (updateActivityRequest $request);
}



?>
