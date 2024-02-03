<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'message'];

    public static function createRules ()
    {
        return [
            'name' => 'required | min:3' ,
            'email' => 'required' ,
            'message' => 'required | max:100'
        ];

    }

    public static function deleteRules ()
    {
        return [
            'contactId' => 'required | exists:contacts,id'
        ];
    }
}
