<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    // help
    public function help(){
        return view('account.user.help',[
         'title' => 'help'
        ] );
     }


    //  order
     public function order(){
        $user = auth()->user();
        $purchasedProducts = $user->purchases()->with('product')->get();

        return view('account.user.order',[
        'purchasedProducts' => $purchasedProducts,
         'title' => 'order'
        ] );
     }


// user
     public function user(){
        $loggedInUser = Auth::user();
        $users = User::where('id', $loggedInUser->id)->get();
        return view('account.user.user',[
            'users' => $users,
            'title' => 'user'
        ] );
     }


   //   edit
   public function edit($id){
      $user = User::find($id);
      return view('account.user.useredit', [
         'user' => $user,
         'title' => 'user edit'
     ]);
  }

public function update(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
    ]);

    // Find the user by ID
    $user = User::findOrFail($id);

    // Update user data
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    // You can add more fields to update as needed

    // Save the changes
    $user->save();

    // Redirect to the edit view with the updated user data
    return redirect('/user')->with('success', 'Data updated successfully.');
}
}
