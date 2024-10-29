<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Product;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{

    public function show(Product $product){

        $simmilerProducts = Product::where("category", $product->category)->where("id", "!=", $product->id)->take(3)->get();

        return view('single-product', [
            'currentProduct'=> $product,
            'simmilerProducts'=> $simmilerProducts,
        ]);
    }

    public function index()
    {
        return view('products');
    }

}
