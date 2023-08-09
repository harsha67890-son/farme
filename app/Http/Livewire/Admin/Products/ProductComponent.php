<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.products.product-component')->layout('layouts.admin');
    }
}
