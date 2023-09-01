<?php

namespace App\Http\Livewire\User\ProductView;

use App\Models\Product;
use Livewire\Component;
use App\Models\Packsize;
use Cart;

class ProductViewComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function store($product_id, $product_name, $product_price)
    {
        $carts=Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('message', 'Item Add In Cart');
        $this->redirectRoute('product_view', $this->slug);
    }

    public function render()
    {
        $packsizes = Packsize::all();
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.user.product-view.product-view-component', compact('product', 'packsizes'))->layout('layouts.base');
    }
}
