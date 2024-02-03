<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\interfaces\Admin\sliderInterface;
use App\Http\Traits\imageTraits ;
use App\Http\Requests\SliderRequests\createSliderRequest;
use App\Http\Requests\SliderRequests\deleteSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class adminSliderController extends Controller
{
    
    public $sliderInterface ;

    public function __construct (sliderInterface $slider)
    {
        $this->sliderInterface = $slider ;
    }
    public function createSlider ()
    {
        return $this->sliderInterface->createSlider() ;
    }

    Public function storeslider (createSliderRequest $request)
    {
        return $this->sliderInterface->storeslider($request) ;

    }

    public function viewSliders ()
    {
        return $this->sliderInterface->viewSliders() ;

    }

    public function deleteSlider (deleteSliderRequest $request )
    {
        return $this->sliderInterface->deleteSlider($request) ;

    }

    public function editSlider ($imageId)
    {
        return $this->sliderInterface->editSlider($imageId) ;

    }

    public function updateSlider (createSliderRequest $request)
    {
        return $this->sliderInterface->updateSlider($request) ;

    }
}
