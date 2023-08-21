<?php

namespace App\Http\Livewire\Admin\Packsize;

use Livewire\Component;
use App\Models\Packsize;

class EditpackSizeComponent extends Component
{
    public $packsize_id;
    public $packsize;

    public function mount($packsize_id)
    {
        $this->packsize_id = $packsize_id;
        $packsizes = Packsize::where('id',$packsize_id)->first();
        $this->packsize_id = $packsizes->id;
        $this->packsize  = $packsizes->packsize ;
       
    }

    public function updatePacksize()
    {
        $packsizes = Packsize::find($this->packsize_id);
        $packsizes->packsize = $this->packsize;
        $packsizes->save();
        session()->flash('message','Pack Size has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.packsize.editpack-size-component')->layout('layouts.admin');
    }
}
