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

}
