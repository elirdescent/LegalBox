<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LawFirm;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LawFirmAuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required'
        ],
    
    );

        $lawfirm = LawFirm::create([
            'name' => $fields['name'],
            'username' => $fields['username'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $lawfirm->createToken('myapptoken')->plainTextToken;

        $response = [
            'lawfirm' => $lawfirm,
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
        $lawfirm = LawFirm::where('email', $fields['email'])->first();

        // Check password
        if(!$lawfirm || !Hash::check($fields['password'], $lawfirm->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $lawfirm->createToken('myapptoken')->plainTextToken;
    

        $response = [
            'lawfirm' => $lawfirm,
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
