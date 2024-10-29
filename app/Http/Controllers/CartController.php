<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use App\Models\Cart as CartModel;
use Livewire\Attributes\On;

class CartController extends Controller
{

    public function index(){

        $content = session()->get('cart');

        return view('cart', compact('content'));
    }

    //Add to Cart
    public static function add(Product $product){
        $cart = session()->get('cart', []);

        if (!isset($cart[$product->id])){
            $cart[$product->id] = [
                'id'=> $product->id,
                'name'=> $product->name,
                'qty' => 1,
                'price'=> $product->price,
                'image' => $product->getImageURL(),
            ];
        }else{
            $cart[$product->id]['qty'] += 1;
        }

        session()->put('cart', $cart);
    }

    //Get Items form the Cart
    public static function getContent(){
        $cart =session()->get('cart', []);
        ksort($cart);
        return $cart;
    }


    //Update the Quantity of the Cart
    public static function updateQty($itemId, $value){
        if(session()->has('cart')){
            $cart = session()->get('cart');
            $currentQty = $cart[$itemId]['qty'];
            $cart[$itemId]['qty'] = $currentQty+$value;
            if($cart[$itemId]['qty'] > 0){
                session()->put('cart', $cart);
            }
        }
    }


    //Remove an item from the Cart
    public static function remove($itemId){
        if(session()->has('cart')){
            $cart = session()->get('cart');
            if(isset($cart[$itemId])){
                unset($cart[$itemId]);
                session()->put('cart', $cart);
            }
        }
    }

    //Clear all items in the Cart
    public static function clearCart(){
        if(session()->has('cart')){
            session()->forget('cart');
        }
    }

    //Calculate Subtotal
    public static function getSubTotal(){
        if(session()->has('cart')){
            $subTotal = 0;
            $cart = session()->get('cart');
            foreach($cart as $item){
                $subTotal += $item['price']*$item['qty'];
            }
            return $subTotal;
        }
    }

    public static function storeInDB(){
        if(session()->has('cart')){
            CartModel::where('user_id',Auth::user()->id)->delete();
            $cart = session()->get('cart');
            foreach($cart as $item){
                CartModel::create([
                    'user_id'=> Auth::user()->id,
                    'product_id'=> $item['id'],
                    'qty' => $item['qty'],
                ]);
            }
        }
    }

    public static function restore(){
        $cartItems = CartModel::where('user_id', Auth::user()->id)->orderBy('id','desc')->get();
        if(session()->has('cart')){
            session()->forget('cart');
        }

        $cart = [];
        foreach($cartItems as $item){
            $cart[$item->product->id] = [
                'id'=> $item->product->id,
                'name'=> $item->product->name,
                'price'=> $item->product->price,
                'qty' => $item->qty,
                'image' => $item->product->getImageURL(),
            ];
        }
        session()->put('cart', $cart);
    }

    public static function getTotalQuantity(){
        $totalQuantity = 0;
        if(session()->has('cart')){
            $cart = session()->get('cart');
            foreach($cart as $item){
                $totalQuantity += $item['qty'];
            }
            return $totalQuantity;
        }
    }

}
