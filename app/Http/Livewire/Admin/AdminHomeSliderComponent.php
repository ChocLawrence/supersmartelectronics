<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlide($slide_id){
        
        $slider = HomeSlider::find($slide_id);

        if (Storage::disk('public')->exists('sliders/'.$slider->image))
        {
            Storage::disk('public')->delete('sliders/'.$slider->image);
        }

        $slider->delete();
        session()->flash('message','Slide has been deleted successfully');

    }

    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
