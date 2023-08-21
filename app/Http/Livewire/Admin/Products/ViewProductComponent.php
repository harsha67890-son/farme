<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class ViewProductComponent extends Component
{

    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $products = Product::where('slug',$this->slug)->get();
        return view('livewire.admin.products.view-product-component',['products'=>$products])->layout('layouts.admin');
    }
}
