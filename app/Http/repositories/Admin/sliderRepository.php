<?php
namespace App\Http\repositories\Admin;
use App\Models\Slider;
use App\Http\Traits\imageTraits;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\interfaces\Admin\sliderInterface;
use App\Http\Requests\SliderRequests\createSliderRequest;
use App\Http\Requests\SliderRequests\deleteSliderRequest;


class sliderRepository implements sliderInterface
{
    use imageTraits ;
    public $sliderModel ;

    public function __construct (Slider $slider)
    {
        $this->sliderModel = $slider ;
    }

    public function createSlider ()
    {
        return view('Admin.slider.create');
    }

    Public function storeslider (createSliderRequest $request)
    {
        $imageName = $this->setImageName($request->image , 'slider') ;
        $this->uploadImage($request->image , $imageName , 'Sliders' );
        $this->sliderModel::create([
            'image' => $imageName
        ]);

        Alert::success('uploaded' , 'Image Uploaded successfully');

        return redirect()->back();
    }

    public function viewSliders ()
    {
        $sliders = Slider::get();
        return view('admin.slider.sliders' , compact('sliders'));
    }

    public function deleteSlider (deleteSliderRequest $request )
    {
        $imageName = Slider::find($request->imageId);
        unlink(public_path($imageName->image));
        $imageName->delete();
        Alert::success('deleted' , 'Slider deleted successfully');
        return redirect()->back();
    }

    public function editSlider ($imageId)
    {
        $slider = Slider::find($imageId);
        return view('Admin.slider.edit' , compact('slider'));
    }

    public function updateSlider (createSliderRequest $request)
    {

        $oldSlider = Slider::find($request->sliderId);
        $imageName = $this->setImageName($request->image , 'slider');
        $this->uploadImage($request->image , $imageName , 'Sliders' , $oldSlider->image);
        Slider::where('id' , $request->sliderId)->update([
            'image' => $imageName
        ]);
        Alert::success('updated' , 'Slider updated Successfully');
        return redirect(route('admin.slider.view'));
    }
}

?>