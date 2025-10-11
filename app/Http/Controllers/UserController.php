<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class UserController extends Controller
{
    public function registration(UserRequest $request)
    {
        $user = $request->validated();
        User::create([$user]);
        if (!$user) {
            return response()->json([
                'message' => 'Registration failed',
                'status' => 'error'
            ]);
        };
        return response()->json([
            'message' => 'Registration successful',
            'status' => 'success'
        ]);
    }

    public function authentication(Request $request)
    {

        dd($request);
    }
}
