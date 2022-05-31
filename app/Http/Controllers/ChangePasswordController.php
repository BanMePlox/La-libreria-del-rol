<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class ChangePasswordController extends Controller
{
    public function index()
    {

      return view('change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
          'current_password' => 'required',
          'password' => 'required|string|min:8|confirmed',
          'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'La contraseña no coincide!');
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Password modificada satisfactoriamente!');
    }
}
