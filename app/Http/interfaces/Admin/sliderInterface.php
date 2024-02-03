<?php
namespace App\Http\interfaces\Admin;

use App\Http\Requests\SliderRequests\createSliderRequest;
use App\Http\Requests\SliderRequests\deleteSliderRequest;

interface sliderInterface
{
    
    public function createSlider ();

    Public function storeslider (createSliderRequest $request);

    public function viewSliders ();
    public function deleteSlider (deleteSliderRequest $request );

    public function editSlider ($imageId);

    public function updateSlider (createSliderRequest $request);
}
?>