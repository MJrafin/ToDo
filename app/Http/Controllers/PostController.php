<?php

namespace App\Http\Controllers;

use App\Models\post;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function ViewPost(){
        $posts = post::orderByRaw('created_at DESC')->get(); // geting the post table using post model
               
        return view('home',['posts'=>$posts]);  //redirect to home with the $post oject
    }
}
