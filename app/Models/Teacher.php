<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'course_id' , 'image' , 'description'] ;

    public function getImageAttribute ($value)
    {
        return 'images/teacher/'.$value ;
    }

    public function getCourseName ($value)
    {
        return Course::select('name')
            ->where('id' , $value)
            ->first()
            ->name ;
    }

    public static function createRules ()
    {
        return [
            'name' => 'required | min:3 | max:50' ,
            'description' => 'max:100' ,
            'course_id' => 'required | exists:courses,id' ,
            'image' => 'image'
        ];
    }

    public static function deleteRules ()
    {
        return [
            'teacherId' => 'required | exists:teachers,id'
        ];
    }

    public function course ()
    {
        return $this->belongsTo(Course::class , 'course_id' , 'id');
    }
}
