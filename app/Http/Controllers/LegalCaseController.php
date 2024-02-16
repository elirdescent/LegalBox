<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\LegalCase;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return LegalCase::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }


   /**
     * @param string $name
     * @return \Illuminate\Http\Response 
     */
    public function search($name)
    {
     

    }
}

