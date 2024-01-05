<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\User;
use Illuminate\Http\Request;                                                                                                                                        
use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('account.dashboard',[
         'title' => 'dashboard'
        ] );
     }

    

    
   























































     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }

    


}
