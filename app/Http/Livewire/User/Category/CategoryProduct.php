<?php

namespace App\Http\Livewire\User\Category;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class CategoryProduct extends Component
{
    // public $productCats;
    public $category_slug;
    public $category_id;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
        $category = Category::where('slug',$category_slug)->first();
        $this->category_id = $category->id;
    }
    public function render()
    {
        
        $categoryProduct = Product::where('category_id',$this->category_id)->get()->unique('name');
        return view('livewire.user.category.category-product', compact('categoryProduct'))->layout('layouts.base');
    }
}
