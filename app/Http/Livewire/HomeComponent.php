<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Cart;

class HomeComponent extends Component
{

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
        // $this->redirectRoute('product_view', $this->slug);
    }
    public function render()
    {
        $sliders = Slider::all()->unique('slider_name');
        $products = Product::all()->unique('name');
        $top_products = Product::where('top_product','1')->get()->unique('name');
        $best_products = Product::where('best_product','1')->get()->unique('name');
        $categorys = Category::all();
        return view('livewire.home-component',[ 'sliders'=>$sliders, 'products'=>$products,'categorys'=>$categorys,'top_products'=>$top_products,'best_products'=>$best_products])->layout('layouts.base');
    }
}
