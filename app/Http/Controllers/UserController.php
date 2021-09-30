<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registration(Request $req)
    {
        $req->validate([
            'first_name' => 'required | alpha',  //The field under validation must be entirely alphabetic characters.
            'last_name' => 'required | alpha', //The field under validation must be entirely alphabetic characters.
            'email' => 'required | email | unique:users',  // the field should be an email an should not match to existing email
            'password' => 'required',
            'phone' => 'required | alpha_num'  //The field under validation must be entirely alpha-numeric characters.
        ]);

        $user = new User; //user object declared

        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->email= $req->email;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password); // the value from the request is saved to the user object
        $user->save(); //user is saved to database
        $req->session()->put('email', $req->email);
        return redirect('/');
    }
}
