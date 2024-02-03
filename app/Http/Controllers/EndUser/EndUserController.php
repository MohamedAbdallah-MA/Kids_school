<?php

namespace App\Http\Controllers\EndUser;

use App\Models\Course;
use App\Models\Slider;
use App\Models\Teacher;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\interfaces\EndUser\endUserInterface;

class EndUserController extends Controller
{
    public $endUserInterface ;

    public function __construct(endUserInterface $endUser)
    {
        $this->endUserInterface = $endUser ;
    }
    public function home ()
    {
        return $this->endUserInterface->home();
    }
}
