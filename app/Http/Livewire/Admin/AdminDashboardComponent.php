<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public $search;
    public $products;
    
    public function render()
    {
        $this->products = Product::orderBy('created_at', 'desc')
        ->where('name', 'like', '%' . $this->search . '%')
        // ->unique('name')
        ->get();

    $products = Product::all()->unique('name');
        return view('livewire.admin.admin-dashboard-component',['products'=>$products])->layout('layouts.admin');
    }
}
