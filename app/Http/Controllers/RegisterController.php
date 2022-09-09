<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //



    public function create(){


        return view(

            'register.create'
        );

    }


    public function store(Request $request){


        $validated = request()->validate([

            'name' => 'required|min:5|max:20|unique:users,name',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'


        ]);

        $validated['password'] = bcrypt($validated['password']);

       
        $user = User::create($validated);

        auth()->login($user);

        return redirect("/tweets");



       // dd($validated);




    }


    public function delete(){

        auth()->logout();

        return redirect("/")->with("Success", "User logged out");
    }
}
