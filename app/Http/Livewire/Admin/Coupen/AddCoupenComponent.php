<?php

namespace App\Http\Livewire\Admin\Coupen;

use App\Models\Coupen;
use Livewire\Component;

class AddCoupenComponent extends Component
{
    public $title,$slug, $code, $value, $cart_value;

    public function store()
    {
        $coupens = new Coupen;
        $coupens->title = $this->title;
        // $coupens->slug = $this->slug;
        $coupens->code = $this->code;
        $coupens->value = $this->value;
        $coupens->cart_value = $this->cart_value;
        $coupens->save();
        $this->title = '';
        $this->code = '';
        $this->value = '';
        $this->cart_value = '';
        session()->flash('message','coupen added successfully..');

        // $this->resetInputFields();
        // $this->emit('userStore');
    
    
    }

    // public function generateslug()
    // {
    //  $this->slug = Str::slug($this->title,'-');
    // }
 

    public function render()
    {
        return view('livewire.admin.coupen.add-coupen-component')->layout('layouts.admin');
    }
}
