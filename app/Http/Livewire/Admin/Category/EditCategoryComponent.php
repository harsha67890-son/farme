<?php

namespace App\Http\Livewire\Admin\Category;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class EditCategoryComponent extends Component
{
use WithFileUploads;

    public $category_slug;
    public $category_id;
    public $category_name;
    public $slug;
    public $image;
    public $newimage;


    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
        $category = Category::where('slug',$category_slug)->first();
        $this->category_id = $category->id;
        $this->category_name  = $category->category_name ;
        $this->slug = $category->slug;
        $this->image = $category->image; 
        $this->images = explode(",",$category->images);     
    }
    
    public function generateslug()
    {
        $this->slug = Str::slug($this->category_name);
    }
    public function updateCategory()
    {
        $category = Category::find($this->category_id);
        $category->category_name = $this->category_name;
        $category->slug = $this->slug;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('category',$imageName);
            $category->image = $imageName;
        }
        $category->save();
        session()->flash('message','Category has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.category.edit-category-component')->layout('layouts.admin');
    }
}
