<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function create(){
        return view('register.create');
    }

    public function store(){

        $attributes=request()->validate([
            'name'=>['string','required','min:3','max:255'],
            'username'=>['string','required','min:3','max:255','unique:users,username','alpha_dash'],
            'email'=>['required','email','max:255','unique:users,email'],
            'password'=>['required','min:5','max:255']
        ]);

        $user=User::create($attributes);

        Auth::login($user);

        return redirect('/index');

    }
}
