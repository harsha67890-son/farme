<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AddSliderComponent extends Component
{
    
    use WithFileUploads;

    public $slider_name;
    public $slider_link;
    public $image;
    public $slider_link2;
    public $image2;
    public $slider_link3;
    public $image3;
    public $slider_link4;
    public $image4;
    public function storeSlider()
    {
        // $this->validate([
        //     'brand_name' => 'required',
        //     'slug' => 'required:unique:categories',
        //     'image' => 'required',
        // ]);
        $slider = new Slider();
        $slider->slider_name = $this->slider_name;
        $slider->slider_link = $this->slider_link;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('slider/',$imageName);
        $slider->image = $imageName;

        $slider->slider_link2 = $this->slider_link2;
        $imageName2 = Carbon::now()->timestamp.'.'.$this->image2->extension();
        $this->image2->storeAs('slider/a/',$imageName2);
        $slider->image2 = $imageName2;

        $slider->slider_link3 = $this->slider_link3;
        $imageName3 = Carbon::now()->timestamp.'.'.$this->image3->extension();
        $this->image3->storeAs('slider/b/',$imageName3);
        $slider->image3 = $imageName3;

        $slider->slider_link4 = $this->slider_link4;
        $imageName4 = Carbon::now()->timestamp.'.'.$this->image4->extension();
        $this->image4->storeAs('slider/c/',$imageName4);
        $slider->image4 = $imageName4;
        $slider->save();
        //null input box
        $this->slider_name="";
        $this->slider_link = "";
        $this->image = "";
        $this->slider_link2 = "";
        $this->image2 = "";
        $this->slider_link3 = "";
        $this->image3 = "";
        $this->slider_link4 = "";
        $this->image4 = "";
        session()->flash('message', 'Slider has been create successfully');
    }
    public function render()
    {
        return view('livewire.admin.slider.add-slider-component')->layout('layouts.admin');
    }
}
