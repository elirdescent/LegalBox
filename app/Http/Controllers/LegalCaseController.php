<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\LegalCase;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class LegalCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $legalcases = LegalCase::all();
        return view('legalcases', compact('legalcases'));
    }


    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        try {
            $request->validate([
                'case_id' => 'required',
                'title' => 'required',
                'client' => 'required',
                'category' => 'required',
                'progress' => 'required',
                
            ]);

            $legalcase = LegalCase::create($request->all());

            return redirect(route('cases'), 201)->with(['success' => 'Case created successfully']);
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
        try {
            $legalcases = LegalCase::findOrFail($id);
            $legalcases->delete();

            return redirect(route('clients'))->with('success', 'Case deleted successfully!');
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Case not found'], 404);
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
     * @param string $name
     * @return \Illuminate\Http\Response 
     */
    public function search($name)
    {
     

    }
}

