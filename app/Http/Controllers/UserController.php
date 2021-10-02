<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
    public function login(Request $req)
    {
        $userpassword = DB::table('users')->where('email',$req->email)->get();  //gets the user password form the database where the email matches
        if(!$userpassword->isEmpty()){
            if (Hash::check($req->password, $userpassword[0]->password)) {  //checks the request->password matches with the user password from database
                $req->session()->put('email', $req->email);    //starts a session against the user email after successful login 
                return redirect('/');
            }
            else{
                return redirect('Login_form')->with('PasswordMissmatch','password does not match'); //throw error if the password does not matches
            }
        }
        else{
            return redirect('Login_form')->with('NoUser','no user found');  //throw error if the email does not matches with any user
        }
    }
}
