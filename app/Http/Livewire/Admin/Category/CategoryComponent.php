<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{

    public function deleteCategory($id)
    {
        $categorys = Category::find($id);
        $categorys->delete();
        session()->flash('message','Product has been deleted successfully');
    }
    public function render()
    {
        $category = Category::all();
        return view('livewire.admin.category.category-component',['category'=>$category])->layout('layouts.admin');
    }
}
