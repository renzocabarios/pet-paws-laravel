<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function authUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user == null) return redirect('/');
        if (!(Hash::check($request->password, $user->password))) return redirect('/fail');
        auth()->login($user);
        if ($user->role == "Admin" || $user->role == "Employee") return redirect('/pet');
        return redirect('/asdasd');
    }
}
