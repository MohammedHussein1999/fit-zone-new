<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\InviteLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $user = User::get();


        return response()->json(["user" => $user], 200);
    }
    public function create(Request $request)
    {

        $user =  User::create($request->all());

        $token1 = $user->createToken('token', ['server:update'])->plainTextToken;
        Auth::login($user);

        $cod = InviteLink::create(['cod' => Str::random(20), "user_id" => $user->id]);

        $user->cod;
        $user->roles;
        $user->class;
        return response()->json(['token1' => $token1, "cod" => $cod, "user" => $user], 200);
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, "password" => $request->password])) {
            $user = Auth::user();
            $user->cod;
            $user->roles;
            $user->class;

            $token = $user->createToken('Bearer')->plainTextToken;
            $user = Auth::user();
            return response()->json(['message' => 'User is logged in', 'token' => $token, 'user' => $user], 200);
        }
        return response()->json('no');
        // $user =  User::create($request->all());
        // $token1= $user->createToken('token',['server:update'])->plainTextToken;
        // Auth::login($user);
        // return $request;


        // return response()->json(['token1' => $token1, "user" => $user], 200);
    }
    public function show(Request $request)
    {
        $user = Auth::user();
        $user->cod;
        $user->roles;
        $user->class;

        return response()->json(["user" => $user], 200);
    }
}
