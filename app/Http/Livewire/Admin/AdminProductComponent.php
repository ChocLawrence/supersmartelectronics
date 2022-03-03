<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;

class AdminProductComponent extends Component
{

    use WithPagination;
    public $searchTerm;


    public function deleteProduct($id){

        $product = Product::find($id);

        if(!empty($product->image)){
            if (file_exists(public_path('assets/images/products'.'/'.$product->image))) {
               unlink('assets/images/products'.'/'.$product->image);
            }
        }

        if($product->images){
            $images = array_filter(explode(",",$product->images));
           
            foreach($images as $image){
              
                if (file_exists(public_path('assets/images/products'.'/'.$image))) {
                    unlink('assets/images/products'.'/'.$image);
                }  
            }
        }

        $product->delete();

        session()->flash('message','Product has been deleted successfully');

    }

    public function render()
    {
        $search = '%'.$this->searchTerm .'%';
        $products = Product::where('name','LIKE',$search)
                           ->orWhere('stock_status','LIKE',$search)
                           ->orWhere('regular_price','LIKE',$search)
                           ->orWhere('sale_price','LIKE',$search)
                           ->orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
