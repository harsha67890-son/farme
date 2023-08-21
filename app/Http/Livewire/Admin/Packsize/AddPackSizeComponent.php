<?php

namespace App\Http\Livewire\Admin\Packsize;

use Livewire\Component;
use App\Models\Packsize;

class AddPackSizeComponent extends Component
{
    public $packsize;

   

    public function storePacksize()
    {
        $packsizes = new Packsize;
        $packsizes->packsize = $this->packsize;
        $packsizes->save();
        $this->packsize= "";
        session()->flash('message', 'Pack size has been create successfully');
    }
    public function render()
    {
        return view('livewire.admin.packsize.add-pack-size-component')->layout('layouts.admin');
    }
}
