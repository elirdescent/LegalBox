<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LawyerAuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string'
        ]);

        $lawyer = Lawyer::create([
            'name' => $fields['name'],
            'surname' => $fields['surname'],
            'username' => $fields['username'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $lawyer->createToken('myapptoken')->plainTextToken;

        $response = [
            'lawyer' => $lawyer,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $lawyer = Lawyer::where('email', $fields['email'])->first();

        // Check password
        if(!$lawyer || !Hash::check($fields['password'], $lawyer->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $lawyer->createToken('myapptoken')->plainTextToken;
    

        $response = [
            'lawyer' => $lawyer,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
