<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProductAttribute;

class AdminAddAttributeComponent extends Component
{
    public $name;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=> 'required',
        ]);
    }

    public function storeAttribute(){

        $this->validate([
            'name'=> 'required',
        ]);

        $pattribute = new ProductAttribute();
        $pattribute->name = $this->name;
        $pattribute->save();
    
        session()->flash('message','Product attribute has been created successfully');
    }

    public function render()
    {
        $pattributes = ProductAttribute::all();
        return view('livewire.admin.admin-add-attribute-component',['pattributes' => $pattributes])->layout('layouts.base');
    }
}
