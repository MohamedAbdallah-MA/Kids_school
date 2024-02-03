<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question' , 'answer'];

    public static function createRules ()
    {
        return [
            'question' => 'required|min:10' ,
            'answer' => 'required|min:10'
        ];
    }

    public static function deleteRules ()
    {
        return [
            'faqId' => 'required|exists:faqs,id'
        ] ;
    }



}
