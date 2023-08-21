<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::all()->unique('name');
        $categorys = Category::all();
        return view('livewire.home-component',['products'=>$products,'categorys'=>$categorys])->layout('layouts.base');
    }
}
