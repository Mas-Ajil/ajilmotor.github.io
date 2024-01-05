<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    
    public function purchaseProduct(Request $request, $productId)
    {
        // Get the authenticated user
        $user = auth()->user();
        $products = Product::find($productId);


        // Check if the user has already purchased the product
        if ($user->hasPurchased($productId)) {
            return redirect()->route('products.show', ['id' => $products->id]);

        }

        // Find the product
        $product = Product::findOrFail($productId);

        // Create a new purchase record
        $purchase = new Purchase();
        $purchase->user_id = $user->id;
        $purchase->product_id = $product->id;
        $purchase->save();

        return redirect()->route('purchased-products.index', ['id' => $product->id]);

    }
    public function viewPurchasedProducts()
    {
        // Get the authenticated user
        $user = auth()->user();
        $title = 'show';
        // Retrieve purchased products for the user
        $purchasedProducts = $user->purchases()->with('product')->get();

        return view('purchased-products.index', compact('purchasedProducts', 'title'));
    }

}
