<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\interfaces\Admin\authInterface;
use App\Http\Requests\Auth\loginRequest;


class authController extends Controller
{
    public $authInterface ;

    public function __construct(authInterface $auth)
    {
        $this->authInterface = $auth ;
    }
    public function viewLogin ()
    {
        return $this->authInterface->viewLogin() ;
    }

    public function login (loginRequest $request)
    {
        return $this->authInterface->login($request) ;

    }

    public function logout ()
    {
        return $this->authInterface->logout() ;
    }
}
