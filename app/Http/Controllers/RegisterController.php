<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'confPassword' => 'required|string|same:password',
            'agreement' => 'required'
        ]);
        
        $request->validate([
            'fieldname.required' => 'Please provide a value for the :attribute field.',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'confPassword' => 'required|string|same:password',
            'agreement' => 'required'
        ]);

        $user = new User;
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password =  bcrypt($request->input('password'));
        $user->agreement = true;

        $save = $user->save();
        Auth::login($user);
        return redirect('blog');
        
        
    }
}

