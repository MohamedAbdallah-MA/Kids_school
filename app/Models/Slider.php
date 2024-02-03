<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['image'] ;

    public static function createRules ()
    {
        return [ 'image' => 'required | image' ] ;
    }


    public function getImageAttribute ($value)  //public function get(Something)Attribute ($value)
    {
        return 'images\Sliders\\'.$value ;
    }

    public static function deleteRules ()
    {
        return [
            'imageId' => 'required|exists:sliders,id'
        ];
    }
}
