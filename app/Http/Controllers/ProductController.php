<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $product = Product::create([
            'name' => 'silver 123',
            'price' => 20
        ]);
  
        dd($product);
    }
}
