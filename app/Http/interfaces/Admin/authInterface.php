<?php
namespace App\Http\interfaces\Admin;

use App\Http\Requests\Auth\loginRequest;


interface authInterface
{
    public function viewLogin ();

    public function login (loginRequest $request);

    public function logout ();
}

?>