<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;

class SliderComponent extends Component
{
    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('admin.slider');
    }
    public function render()
    {
        $slider = Slider::all();
        return view('livewire.admin.slider.slider-component',['slider'=>$slider])->layout('layouts.admin');
       
    }
}
