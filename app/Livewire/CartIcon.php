<?php

namespace App\Livewire;

use Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Http\Controllers\CartController as Cart;

class CartIcon extends Component
{
    #[On('cartUpdated')]
    public function render()
    {
        $count = Cart::getTotalQuantity();
        return view('livewire.cart-icon', compact('count'));
    }
}
