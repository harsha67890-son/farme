<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;

class OrderDetailsComponent extends Component
{
    public $order_id;
    public $counter = '';

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function counter()
    {

        $cartCollection = Order::all();

        $this->counter = $cartCollection->count();
      
    }
    public function render()
    {
        $this->counter();
        $order = Order::find($this->order_id);
        return view('livewire.admin.order.order-details-component',compact('order'))->layout('layouts.admin');
    }
}
