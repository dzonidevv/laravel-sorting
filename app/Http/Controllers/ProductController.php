<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

 public function index() {
    
    $products = Product::sortable()->paginate(10);

    return view('products', compact(
        'products'
    ));

 }

}
