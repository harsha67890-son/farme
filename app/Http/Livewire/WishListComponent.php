<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class WishListComponent extends Component
{

    public function removeFormWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        if($witem->id == $product_id)
        {
            Cart::instance('wishlist')->remove($witem->rowId);
            $this->emitTo('wishlist-count-component','$refreshComponent');
            return ;
        }
    }

    public function moveProductFormWishlistToCart($rowId)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')
            ->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Product');
    }
    public function render()
    {
        return view('livewire.wish-list-component')->layout('layouts.base');
    }
}
