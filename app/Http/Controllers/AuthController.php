<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @response array{"firstname":"","lastname":"","phone":"","password":""}
     */
    public function register(Request $request)
    {
        
        $user = new User([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password'=>Hash::make($request->password),
        ]);

        if($user->save()){
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->plainTextToken;

            return response()->json([
            'message' => 'Successfully created user!',
            'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }   
    }

    /**
     * @param Request $request
     * @response array{"firstname":"","password":""}
     */

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('name', $data['name'])->first();

         if (!$user || !Hash::check($data['password'], $user->password)) {
            return response([
                'msg' => 'incorrect username or password'
            ], 401);
        }

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $user,
            'token' => $token
        ];

        return response($res, 201);
    }
}
