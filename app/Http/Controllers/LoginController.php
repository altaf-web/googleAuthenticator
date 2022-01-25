<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email|exists:users,email',
        //     'password' => 'required'
        // ]);
        $user= User::find(1);
        if (true) {
            Auth::login($user);
            //$userRole = $user->role()->first();
            $userRole="moderator";
            if ($userRole) {
                $scope123 = $userRole;
            }
            $token = $user->createToken($user->email . '-' . now(), [$scope123]);

            return response()->json([
                'token' => $token->accessToken
            ]);
        }
    }
}
