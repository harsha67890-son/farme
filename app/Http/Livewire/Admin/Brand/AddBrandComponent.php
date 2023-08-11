<?php

namespace App\Http\Livewire\Admin\Brand;

use Carbon\Carbon;
use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddBrandComponent extends Component
{

    use WithFileUploads;

    public $brand_name;
    public $slug;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->brand_name);
    }

    public function storeBrand()
    {
        $this->validate([
            'brand_name' => 'required',
            'slug' => 'required:unique:categories',
            'image' => 'required',
        ]);
        $brand = new Brand();
        $brand->brand_name = $this->brand_name;
        $brand->slug = $this->slug;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('brand/',$imageName);
        $brand->image = $imageName;
        $brand->save();
        //null input box
        $this->brand_name="";
        $this->slug = "";
        $this->image = "";
        session()->flash('message', 'Brand has been create successfully');
    }
    public function render()
    {
        return view('livewire.admin.brand.add-brand-component')->layout('layouts.admin');
    }
}
