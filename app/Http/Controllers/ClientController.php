<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clientlist', compact('clients'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'caseid' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'job' => 'required',
            'description' => 'required',
            'lawyer_id' => 'required'
        ]);

        $client = Client::create($request->all());
        
        return redirect(route('clients'), 201)->with(['success' => 'Client created successfully']);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Client::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        $client->update($request->all());
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Client::findOrFail($id);
        $post->delete();

        return redirect(route('clients'));
    }


   /**
     * @param string $name
     * @return \Illuminate\Http\Response 
     */
    public function search($name)
    {
       $clients = Client::where('name','like','%'.$name.'%')->get();
      
       return response()->json($clients);
       

    }
}
