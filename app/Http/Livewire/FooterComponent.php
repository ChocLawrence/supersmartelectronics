<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use App\Models\Category;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        $setting = Setting::find(1);
        return view('livewire.footer-component',['setting'=>$setting,'categories'=>$categories]);
    }
}
