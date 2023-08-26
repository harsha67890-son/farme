<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryViewComponent extends Component
{
    public function render()
    {
        $category = Category::all();
        // dd($category);
        return view('livewire.category-view-component',compact('category'));
    }
}
