<?php

namespace App\Livewire;

use App\Models\Product;
use Auth;
use App\Http\Controllers\CartController as Cart;
use Livewire\Component;
use Livewire\WithPagination;


class ProductsList extends Component
{
    use WithPagination;
    public function addToCart(Product $product){
        if(Auth::check()){
            Cart::add($product);
            $this->dispatch("cartUpdated");
            flash()->timeout(1500)->info('Can be viewed in the cart.', [],'Item Added!');
        }else{
            flash()->flash('error', "You must logged in first! ", ['timeout' => 2000, 'position' => 'top-center'], 'Error');
            return redirect()->back();
        }
    }

    public function render()
    {
        $products = Product::paginate(8);

        return view('livewire.products-list', compact('products'));
    }
}
