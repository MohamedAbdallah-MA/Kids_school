<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\interfaces\Admin\homeInterface;
use Illuminate\Http\Request;

class adminHomeController extends Controller
{
    public $homeInterface ;

    public function __construct(homeInterface $home)
    {
        $this->homeInterface = $home ;
    }
    public function index ()
    {
        return $this->homeInterface->index() ;
    }
}
