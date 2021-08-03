<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function root()  {
        $categories = Category::where ('parent_id', '=', 0) -> get();
        return response ($categories, 200);
    }
}
