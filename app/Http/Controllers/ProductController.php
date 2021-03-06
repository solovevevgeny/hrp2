<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Offer;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::with('offers')->get();
        return response ($products, 200);
    }

    public function offers ($productId) {
        $offers = Offer::find();
    }

    public function view($id) 
    {
        $product = Product::with('offers','offers.warehouse','offers.prices', 'offers.prices.priceTypes', 'offers.quality')->where('id','=',$id)->get();
        return response ($product, 200);
    }

    public function category($id) 
    {
        $products = Product::with('offers')->where('category_id', '=', $id) -> get();
        return response ($products, 200);
    }

}
