<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class NewPassword extends Controller
{
    public function create(){
        return view('newPass.newPassword');
    }

    public function reset(Request $request)
    {
    

    $request->validate([
        'new_password' => 'required|min:8|confirmed',
        'new_password_confirmation' => 'required', 
    ], [
        'new_password.required' => 'Please enter a new password.',
        'new_password.min' => 'The new password must be at least 8 characters.',
        'new_password.confirmed' => 'The new password and confirm new password do not match.',
        'new_password_confirmation.required' => 'Please confirm your new password.', 
    ]);

    $user = User::find(Auth::id());

    if (!$user) {
        return redirect()->back()->withErrors(['error' => 'User not found.']);
    }

    $user->password = Hash::make($request->input('new_password'));
    $user->save();

    return redirect('posts');
}
}
