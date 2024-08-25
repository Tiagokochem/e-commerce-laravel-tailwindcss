<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductListing extends Component
{
    public $products;
    public function mount($category_id)
    {
        if($category_id == 0){
            $this->products = Product::with('category')->limit(4)->orderBy('created_at', 'desc')->get();
        }else{
            $this->products = Product::with('category')->where('category_id', $category_id)->limit(4)->get();
        }
    }
    public function render()
    {
        return view('livewire.product-listing');
    }
}
