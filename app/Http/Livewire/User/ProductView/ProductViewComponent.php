<?php

namespace App\Http\Livewire\User\ProductView;

use App\Models\Product;
use Livewire\Component;
use App\Models\Packsize;

class ProductViewComponent extends Component
{
    public $product_slug; 
    public $product_id;

    public function mount($product_slug)
    {
        $this->product_slug = $product_slug;
        $product = Product::where('slug',$product_slug)->first();
        $this->product_id = $product->id;
    }
    public function render()
    {
        $packsizes = Packsize::all();
        $product = Product::find($this->product_id);
        return view('livewire.user.product-view.product-view-component',compact('product','packsizes'))->layout('layouts.base');
    }
}
