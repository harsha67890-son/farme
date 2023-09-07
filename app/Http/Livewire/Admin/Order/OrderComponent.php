<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;

class OrderComponent extends Component
{
    public function render()
    {
        $orders = Order::OrderBy('created_at','DESC')->get();
        return view('livewire.admin.order.order-component',compact('orders'))->layout('layouts.admin');
    }
}
