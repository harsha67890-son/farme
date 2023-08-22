<?php

namespace App\Http\Livewire\Admin\Slider;

use Carbon\Carbon;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSliderComponent extends Component
{
   
    use WithFileUploads;

    // public $brand_slug;
    // public $brand_id;
    public $slider_name;
    public $slider_link;
    public $image;
    public $slider_link2;
    public $image2;
    public $slider_link3;
    public $image3;
    public $slider_link4;
    public $image4;
    public $newimage;
    public $newimage2;
    public $newimage3;
    public $newimage4;

    public function mount($slider_slug)
    {
        $this->slider_slug = $slider_slug;
        $slider = Slider::where('id',$slider_slug)->first();
        $this->slider_id = $slider->id;
        $this->slider_name  = $slider->slider_name ;
        $this->slider_link = $slider->slider_link;
        $this->image = $slider->image; 
        
        $this->slider_link2 = $slider->slider_link2;
        $this->image2 = $slider->image2; 
        $this->slider_link3 = $slider->slider_link3;
        $this->image3 = $slider->image3; 
        $this->slider_link4 = $slider->slider_link4;
        $this->image4 = $slider->image4; 
        $this->images = explode(",",$slider->images);     
    }
   
    public function updateSlider()
    {
        $slider = Slider::find($this->slider_id);
        $slider->slider_name = $this->slider_name;

        $slider->slider_link = $this->slider_link;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('slider',$imageName);
            $slider->image = $imageName;
        }
        $slider->slider_link2 = $this->slider_link2;
        if ($this->newimage2) {
            $imageName2 = Carbon::now()->timestamp . '.' . $this->newimage2->extension();
            $this->newimage2->storeAs('slider/a',$imageName2);
            $slider->image2 = $imageName2;
        }
        $slider->slider_link3 = $this->slider_link3;
        if ($this->newimage3) {
            $imageName3 = Carbon::now()->timestamp . '.' . $this->newimage3->extension();
            $this->newimage3->storeAs('slider/b',$imageName3);
            $slider->image3 = $imageName3;
        }
        $slider->slider_link4 = $this->slider_link4;
        if ($this->newimage4) {
            $imageName4 = Carbon::now()->timestamp . '.' . $this->newimage4->extension();
            $this->newimage4->storeAs('slider/c',$imageName4);
            $slider->image4 = $imageName4;
        }
        $slider->save();
        session()->flash('message','slides has been updated successfully!');
    }


    public function render()
    {
        return view('livewire.admin.slider.edit-slider-component')->layout('layouts.admin');
    }
}
