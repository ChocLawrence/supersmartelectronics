<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $slider_id;

    public function mount($slide_id){
        $slider = HomeSlider::find($slide_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;

    }

    public function updateSlide(){

        $slider = HomeSlider::find($this->slider_id);
        $slider->title =  $this->title;
        $slider->subtitle =  $this->subtitle;
        $slider->price =  $this->price;
        $slider->link =  $this->link;
        if($this->newimage){
            
            if(!empty($slider->image)){
                if (file_exists(public_path('assets/images/sliders'.'/'.$slider->image))) {
                   unlink('assets/images/sliders'.'/'.$slider->image);
                }
            }

            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('sliders',$imageName);
            $slider->image =  $imageName;
        }
        $slider->status =  $this->status;
        $slider->save();
        session()->flash('message','slider has been updated successfully');

    }
    

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.base');
    }
}
