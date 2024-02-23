<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Meetings;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MeetingsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meeting = Meeting::all();
        return view('meetings', compact('meetings'));
    }


    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'location' => 'required',
                'status' => 'required',
                'description' => 'required',
                
            ]);

            $meeting = Meeting::create($request->all());

            return redirect(route('cases'), 201)->with(['success' => 'Meeting created successfully']);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->validator->errors()], 400);
        } catch (QueryException $e) {
            // Check for specific SQLSTATE error code indicating a constraint violation
            if ($e->getCode() === '23000') {
                return response()->json(['error' => 'Bad Request: Integrity constraint violation'], 400);
            }

            // If it's not an integrity constraint violation, you can handle it accordingly
            // (e.g., log the error, return a generic error response, etc.)
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Meeting::find($id);
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
