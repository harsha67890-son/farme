<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class TopProductsComponent extends Component
{
    // public $id;
    public $topProduct;
    public $topProduct1;

    public function mount()
    {
        $this->topProduct = [];
        $this->topProduct1 = [];
        // $this->topProduct1 = ['top_product'=>'0'];
        // $products = Product::find(2);
        // $this->top_product = 0;
        // $this->top_product1 = 0;
        // $this->topProduct = explode(',',$this->top_product);
    }

    public function addTopProduct()
    {
        if ($this->topProduct) {
            Product::query()
                ->whereIn('slug', $this->topProduct)
                ->update(['top_product' => $this->top_product='1']);
            session()->flash('message','Top Product has been successfully');
        }
        if($this->topProduct1){
            Product::query()
                ->whereIn('slug', $this->topProduct1)
                ->update(['top_product' => $this->top_product1='0']);
            session()->flash('message','Remove Top Product has been successfully');
        }
    }
    public function render()
    {
        $products = Product::all()->unique('name');
        // $products = Product::with('category')->get()->unique('name');
        return view('livewire.admin.products.top-products-component', ['products' => $products])->layout('layouts.admin');
    }
}
