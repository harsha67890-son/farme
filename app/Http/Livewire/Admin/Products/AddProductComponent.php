<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

class AddProductComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.products.add-product-component')->layout('layouts.admin');
    }
}
