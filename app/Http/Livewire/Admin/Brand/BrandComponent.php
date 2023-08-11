<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;

class BrandComponent extends Component
{

    public function deleteBrand($id)
    {
        $brands = Brand::find($id);
        $brands->delete();
        return redirect()->route('admin.brand');
    }
    public function render()
    {
        $brands = Brand::all();
        return view('livewire.admin.brand.brand-component',['brands'=>$brands])->layout('layouts.admin');
    }
}
