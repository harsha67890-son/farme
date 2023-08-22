<?php

namespace App\Http\Livewire\Admin\Coupen;

use App\Models\Coupen;
use Livewire\Component;

class CoupenComponent extends Component
{
    public function deleteCoupen($id)
    {
        $coupen = Coupen::find($id);
        $coupen->delete();
        session()->flash('message','Coupen has been deleted successfully!');
        return redirect()->route('admin.coupen');
    }


    public function render()
    {
        $coupens=Coupen::all();
        return view('livewire.admin.coupen.coupen-component',['coupens'=>$coupens])->layout('layouts.admin');
    }
}
