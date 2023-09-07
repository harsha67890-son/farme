<?php

namespace App\Http\Livewire\Admin\Coupen;

use App\Models\Coupen;
use Livewire\Component;

class EditCoupenComponent extends Component
{
    public $type; 
    public $code;
    public $value;
    public $cart_value;
    public $expiry_date;

    public $coupen_id;
  


   public function mount($coupen_slug)
   {
       $this->coupen_slug = $coupen_slug;
       $coupen = Coupen::where('id',$coupen_slug)->first();
       $this->coupen_id = $coupen->id;
       $this->code  = $coupen->code ;
       $this->type = $coupen->type;
       $this->value = $coupen->value;
       $this->expiry_date = $coupen->expiry_date;
       $this->cart_value = $coupen->cart_value;  
   }
  
   public function updateCoupen()
   {
       $coupen = Coupen::find($this->coupen_id);
       $coupen->type = $this->type;
       $coupen->code = $this->code;
       $coupen->value = $this->value;
       $coupen->cart_value = $this->cart_value;
       $coupen->expiry_date = $this->expiry_date;
       $coupen->save();
       session()->flash('message','Coupen has been updated successfully!');
   }

    public function render()
    {
        return view('livewire.admin.coupen.edit-coupen-component')->layout('layouts.admin');
    }
}
