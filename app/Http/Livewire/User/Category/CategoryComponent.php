<?php

namespace App\Http\Livewire\User\Category;

use App\Models\Slider;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{

    public $slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $category_id =$category->id;
        $category_name = $category->category_name;

        $sliders = Slider::all()->unique('slider_name');
        $products = Product::all()->unique('name');
        $top_products = Product::where('top_product','1')->get()->unique('name');
        $best_products = Product::where('best_product','1')->get()->unique('name');
        $categorys = Category::all();
        return view('livewire.user.category.category-component',[ 'sliders'=>$sliders, 'products'=>$products,'categorys'=>$categorys,'top_products'=>$top_products,'best_products'=>$best_products])->layout('layouts.base');
    }
}

