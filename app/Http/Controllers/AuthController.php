<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    function __construct()
    {
        $this->middleware("auth:sanctum");
    }
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

        $user = User::where('email', $data['email'])->first();

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


    public function roles(){

        $user = Auth::user();
        
        return RoleResource::collection($user->roles);
    }
}
