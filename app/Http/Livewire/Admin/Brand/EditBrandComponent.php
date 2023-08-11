<?php

namespace App\Http\Livewire\Admin\Brand;

use Carbon\Carbon;
use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditBrandComponent extends Component
{
    use WithFileUploads;

    public $brand_slug;
    public $brand_id;
    public $brand_name;
    public $slug;
    public $image;
    public $newimage;


    public function mount($brand_slug)
    {
        $this->brand_slug = $brand_slug;
        $brands = Brand::where('slug',$brand_slug)->first();
        $this->brand_id = $brands->id;
        $this->brand_name  = $brands->brand_name ;
        $this->slug = $brands->slug;
        $this->image = $brands->image; 
        $this->images = explode(",",$brands->images);     
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->brand_name);
    }
    public function updateBrand()
    {
        $brands = Brand::find($this->brand_id);
        $brands->brand_name = $this->brand_name;
        $brands->slug = $this->slug;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('brand',$imageName);
            $brands->image = $imageName;
        }
        $brands->save();
        session()->flash('message','Brand has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.brand.edit-brand-component')->layout('layouts.admin');
    }
}
