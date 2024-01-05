<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    // bagian view admin
    public function admin(){
        $users = User::where('level', '!=', 'admin')->get();
        return view('account.admin.admin',[
            'users' => $users,
            'title' => 'admin'
        ] );
    
     }
     public function destroy($id){
        $users = User::find($id);
        $users->delete();
    
        return redirect('/admin')->with('success', 'User deleted successfully');
    }





    // bagian view adminProduct
    public function adminProduct(){
        return view('account.admin.adminProduct',[
            'title' => 'admin',
            "products" => product::all()
        ]);
            
     }

    
     public function create()
     {
         return view('account.admin.createProduct',[
            'title' => 'admin'
         ]);
     }
 
     public function store(Request $request){
         
        $validate = $request->validate([
            'nama' => 'required',
             'deskripsi' => 'required',
             'harga' => 'required|numeric',
             'gambar' => 'image|file',
        ]);
    
        if($request->file('gambar')){
            $validate['gambar'] = $request->file('gambar')->store('post-image');
        }

        Product::create($validate);
        
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
}
    public function destroyProduct($id){
        $products = Product::find($id);
        $products->delete();

        return redirect('/adminProducts')->with('success', 'image deleted successfully');
}








    // bagian view adminPenjualan

    //  public function adminPenjualan(){
    //     return view('account.admin.adminPenjualan',[
    //         'title' => 'admin'
    //     ] );
    //  }
     
     public function adminPenjualan()
    {
        // Get all purchases with related user and product information
        $purchases = Purchase::with(['user', 'product'])->get();
        $title = 'show';
        return view('account.admin.adminPenjualan', compact('purchases', 'title'));
    }
   
    public function destroyPenjualan($id){
        $purchases = Purchase::find($id);
        $purchases->delete();

        return redirect('/adminPenjualan')->with('success', 'image deleted successfully');
}


    
}
