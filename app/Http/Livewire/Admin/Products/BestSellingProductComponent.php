<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class BestSellingProductComponent extends Component
{
    public $bestProduct;
    public $bestProduct1;

    public function mount()
    {
        $this->bestProduct = [];
        $this->bestProduct1 = [];
    }
    public function addbestProduct()
    {
        if ($this->bestProduct) {
            Product::query()
                ->whereIn('slug', $this->bestProduct)
                ->update(['best_product' => ($this->best_product = '1')]);
            session()->flash('message', 'Best Selling Product has been successfully');
        }
        if ($this->bestProduct1) {
            Product::query()
                ->whereIn('slug', $this->bestProduct1)
                ->update(['best_product' => ($this->best_product1 = '0')]);
            session()->flash('message', 'Remove Best Selling Product has been successfully');
        }
    }
    public function render()
    {
        $best_products = Product::all()->unique('name');
        return view('livewire.admin.products.best-selling-product-component',compact('best_products'))->layout('layouts.admin');
    }
}
