<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Exists;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'slug' ,'icon' ] ;

    public static function createRules ()
    {
        return [
            'title' => 'required|min:5' ,
            'slug' => 'required|min:10' ,
            'icon' => 'image'
        ];
    }

    public static function deleteRules ()
    {
        return [
            'activityId' => 'required|exists:activities,id'
        ];
    }

    public function getIconAttribute ($value)
    {
        return 'images\activity\\'.$value ;
    }
}
