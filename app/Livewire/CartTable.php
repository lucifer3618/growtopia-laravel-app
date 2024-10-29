<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\User;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use App\Http\Controllers\CartController as Cart;

class CartTable extends Component
{

    public function increaseQuantity($itemId){
        Cart::updateQty($itemId, +1);
        $this->dispatch('cartUpdated');
    }

    public function reduceQuantity($itemId){
        Cart::updateQty($itemId, -1);
        $this->dispatch('cartUpdated');
    }


    public function removeItem($itemId){
        Cart::remove($itemId);
        $this->dispatch('cartUpdated');
    }

    public function clearCart(){
        if(!empty(session()->get('cart'))){
            Cart::clearCart();
            flash()->success('Cart Cleared Successfully!');
            $this->dispatch('cartUpdated');
        }
    }

    public function checkOut(){
        if(!empty(session()->get('cart'))){
            Cart::clearCart();
            $this->dispatch('cartUpdated');
            $this->dispatch('js-function-success');
        }else{
            $this->dispatch('js-function-error');
        }
    }

    public function render()
    {
        $content = Cart::getContent();

        $subTotal = Cart::getSubTotal();
        $total = Cart::getSubTotal() * 1.1;
        $tax = Cart::getSubTotal() * 0.1;


        return view('livewire.cart-table', [
            'content' => $content,
            'subTotal'=> $subTotal,
            'tax'=> $tax,
            'total'=> $total,
        ]);
    }
}
