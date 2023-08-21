<?php

namespace App\Http\Livewire\Admin\Packsize;

use Livewire\Component;
use App\Models\Packsize;

class PackSizeComponent extends Component
{
    public function deletePacksize($id)
    {
        $packsizes = Packsize::find($id);
        $packsizes->delete();
        return redirect()->route('admin.packsize');
    }
    public function render()
    {
        $packsizes = Packsize::all();
        return view('livewire.admin.packsize.pack-size-component',['packsizes'=>$packsizes])->layout('layouts.admin');
    }
}
