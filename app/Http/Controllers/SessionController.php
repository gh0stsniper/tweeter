<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

    public function create()
    {

        return view(
            'session.create'
        );
    }


    public function store(Request $request)

    {
        $creds = request()->validate([
            'name' => 'required',
            'password' => 'required',
        ]);


        if(auth()->attempt($creds)){

            session()->regenerate();

            return redirect("/tweets")->with('success','Welcome back');
        }

        // auth failed

        return back()->withInput()->withErrors(['name'=> 'Incorrect Combination']);

    }
}
