<?php

namespace App\Livewire;

use Auth;
use Livewire\Component;
use App\Http\Controllers\CartController as Cart;

class AddToCart extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart(){
        if(Auth::check()){
            Cart::add($this->product);
            $this->dispatch("cartUpdated");
            flash()->timeout(1500)->info('Can be viewed in the cart.', [],'Item Added!');
        }else{
            flash()->flash('error', "You must logged in first! ", ['timeout' => 2000, 'position' => 'top-center'], 'Error');
            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
