<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

class AddcategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.category.addcategory-component')->layout('layouts.admin');
    }
}
