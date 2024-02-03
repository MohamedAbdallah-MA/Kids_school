<?php
namespace App\Http\repositories\Admin;
use App\Http\interfaces\Admin\homeInterface;

class homeRepository implements homeInterface
{
    public function index ()
    {
        return view('Admin/index') ;
    }
}

?>