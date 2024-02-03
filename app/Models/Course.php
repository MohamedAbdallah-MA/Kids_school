<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'image' , 'price' , 'description'];

    public function getImageAttribute ($value)
    {
        return 'images'.DIRECTORY_SEPARATOR.'course'.DIRECTORY_SEPARATOR.$value ;
    }

    public static function createRules ()
    {
        return  [
            'name' => 'required | max:50 | min:3' ,
            'price' => 'required' ,
            'description' => ' max:200 ' ,
            'image' => 'image'
        ];
    }

    public static function deleteRules ()
    {
        return [
            'courseId' => 'required | exists:courses,id'
        ];
    }

    public function teacher ()
    {
        return $this->hasMany(Teacher::class , 'course_id' , 'id');
    }

}
