<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;

class BrandComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.brand.brand-component')->layout('layouts.admin');
    }
}
