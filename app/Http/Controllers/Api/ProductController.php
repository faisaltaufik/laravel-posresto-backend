<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // index api
    public function index()
    {
        // get all products
        $products = Product::all();
        // $products = Product::paginate(10); //pakai pagination
        return response()->json([
            'status' => 'success',
            'data' => $products,
        ], 200);
    }
}
