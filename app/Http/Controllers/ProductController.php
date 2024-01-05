<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product',[
            "title" => "Product",
            "products" => product::all()
        ]);
    }
    
    
    public function show($id)
    {
        $products = Product::where('id', $id)->get()->first();
        $title = 'show';
        return view('products.show', compact('products', 'title'));
    }
    
    
}
