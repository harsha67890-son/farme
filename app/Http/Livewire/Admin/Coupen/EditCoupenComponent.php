<?php

namespace App\Http\Livewire\Admin\Coupen;

use App\Models\Coupen;
use Livewire\Component;

class EditCoupenComponent extends Component
{
    public $title; 
    public $code;
    public $value;
    public $cart_value;
    // public $id;
    public $coupen_id;
  


   public function mount($coupen_slug)
   {
       $this->coupen_slug = $coupen_slug;
       $coupen = Coupen::where('id',$coupen_slug)->first();
       $this->coupen_id = $coupen->id;
       $this->code  = $coupen->code ;
       $this->title = $coupen->title;
       $this->value = $coupen->value;
       $this->cart_value = $coupen->cart_value;  
   }
  
   public function updateCoupen()
   {
       $coupen = Coupen::find($this->coupen_id);
       $coupen->title = $this->title;
       $coupen->code = $this->code;
       $coupen->value = $this->value;
       $coupen->cart_value = $this->cart_value;
       $coupen->save();
       session()->flash('message','Coupen has been updated successfully!');
   }

    public function render()
    {
        return view('livewire.admin.coupen.edit-coupen-component')->layout('layouts.admin');
    }
}
