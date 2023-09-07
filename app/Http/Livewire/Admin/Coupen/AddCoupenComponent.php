<?php

namespace App\Http\Livewire\Admin\Coupen;

use App\Models\Coupen;
use Livewire\Component;

class AddCoupenComponent extends Component
{
    public $type,$slug, $code, $value, $cart_value,$expiry_date;

    public function store()
    {
        $coupens = new Coupen;
        $coupens->type = $this->type;
        // $coupens->slug = $this->slug;
        $coupens->code = $this->code;
        $coupens->value = $this->value;
        $coupens->expiry_date = $this->expiry_date;
        $coupens->cart_value = $this->cart_value;
        $coupens->save();
        $this->type = '';
        $this->code = '';
        $this->value = '';
        $this->cart_value = '';
        $this->expiry_date = '';
        session()->flash('message','coupen added successfully..');
    
    }

    public function render()
    {
        return view('livewire.admin.coupen.add-coupen-component')->layout('layouts.admin');
    }
}
