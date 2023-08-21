<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;


class ProductComponent extends Component
{
    public function render()
    {
        $products = Product::all()->unique('name');
        return view('livewire.admin.products.product-component',['products'=>$products])->layout('layouts.admin');
    }
}
