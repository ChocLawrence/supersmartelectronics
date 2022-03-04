<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount(){
        $this->status = 0;
    }

    public function addSlide(){

        $slider = new HomeSlider();
        $slider->title =  $this->title;
        $slider->subtitle =  $this->subtitle;
        $slider->price =  $this->price;
        $slider->link =  $this->link;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        if(!Storage::disk('public')->exists('/sliders'))
        {
            Storage::disk('public')->makeDirectory('/sliders');
        }
        $slideImage = Image::make($this->image)->save();
        Storage::disk('public')->put('sliders/'.$imageName,$slideImage);
        $slider->image = $imageName;
        $slider->status =  $this->status;
        $slider->save();
        session()->flash('message','slider has been added successfully');

    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
