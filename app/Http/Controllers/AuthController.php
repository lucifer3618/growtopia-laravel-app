<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('login-register');
    }

    public function store(){

        $validator = Validator::make(request()->all(), [
            'email' => 'required|email|unique:users,email',
        ]);

        if($validator->errors()->has('email')){

            flash()->flash('error', 'This email already has an account.', [], 'Cannot create the Account.');
        }else{
            $user = User::create([
                "name"=> request()->get("name"),
                "email"=> request()->get("email"),
                "nic"=> request()->get("nic"),
                "password"=> Hash::make(request()->get("password")),
            ]);

            flash()->flash('success', 'Please login to use our services.', [], 'Account Successfully Created.');
        }

        return redirect()->route('login');
    }

    public function authenticate(){

        $validated = request()->validate([
            //check email is unique or not in the users table email column
            "email"=> "required | email",
            //confirmation password name should be checked !!!important
            "password"=> "required | min:8",
        ]);

        if(auth()->attempt($validated)){
            //Clear the session and regenerate
            request()->session()->regenerate();

            CartController::restore();

            flash()->flash('success', "Successfully logged in as ". Auth::user()->name .".", ['timeout' => 5000, 'position' => 'top-center'], 'Success');
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('error',"Credentials don't match check again!");
    }

    public function logout(){
        CartController::storeInDB();
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerate();

        flash()->flash('success', 'Logout Successfully!', ['timeout' => 5000, 'position' => 'top-center'], 'Success');
        return redirect()->route('home');
    }

}
