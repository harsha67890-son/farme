<?php

namespace App\Http\Livewire\User\ProductView;

use App\Models\Product;
use Livewire\Component;
use App\Models\Packsize;
use Cart;

class ProductViewComponent extends Component
{
    public $slug;
    public $qty;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
        
    }
    public function AddToCart($product_id, $product_name, $product_price)
    {
        $carts=Cart::instance('cart')->add($product_id, $product_name, $this->qty, $product_price)->associate('App\Models\Product');
        session()->flash('message', 'Item Add In Cart');
        $this->redirectRoute('product_view', $this->slug);
    }

    public function buy($product_id, $product_name, $product_price)
    {
        $carts=Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('message', 'Item Add In Cart');
        // $this->redirectRoute('product_view', $this->slug);
        return redirect()->route('cart');
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
        $this->redirectRoute('product_view', $this->slug);
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                $this->redirectRoute('product_view', $this->slug);
            }
        }
    }

    public function render()
    {
        $packsizes = Packsize::all();
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.user.product-view.product-view-component', compact('product', 'packsizes'))->layout('layouts.base');
    }
}
