<?php

namespace App\Http\Traits ;

use Directory;
use Nette\Utils\Strings;

use Symfony\Component\HttpFoundation\File\File;
use function PHPUnit\Framework\isNull;

trait imageTraits
{
    private function setImageName (File $image ,String $category  )
    {
        $imageMimeType = explode('/' , $image->getMimeType() )  ; // explode ('Something' , String) to seperate string by 'Something' || getMimeType () to access mimtype
        $imageName = time()."_{$category}.{$imageMimeType[1]}" ;
        return $imageName ;
    }

    private function uploadImage (File $image ,String $imageName ,String $path , string $oldPath = null)
    {
        $image->move(public_path('images'.DIRECTORY_SEPARATOR.$path) , $imageName) ; // move ( Location you want , imagename) to move file from its temp location to location you want ..
        if (! is_null($oldPath))
        {
            unlink(public_path($oldPath)); // unlink (location) to delete a file from a location2
        }
        return true ;
    }
}





?>

