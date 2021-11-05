<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\like_dislike_list;

use Carbon\Carbon;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function ViewPost(){
        $posts = post::orderByRaw('created_at DESC')->get(); // geting the post table using post model
        $like_dislike_list = like_dislike_list::get();
        return view('home',['posts'=>$posts , 'like_dislike_list'=>$like_dislike_list]);  //redirect to home with the $post oject
    }

    public function DoPost(Request $req){
        $posts = new post;    //creating an object of post model
        $posts->email = session('user')->email;  //the user email of the current user will be saveed as post objects "email" atribute
        $posts->name = session('user')->first_name." ".session('user')->last_name;
        $posts->number_of_like = 0;
        $posts->number_of_dislike = 0;  //number of like and dislike is initialised as 0 
        $posts->content = $req->content;  // requested text from home is saved as content
        $posts->save();
        return redirect('viewposts');  //redirect to home with the $post oject
    }


    public function like(){ 
        $req = $_POST['post_id'];
        $user = like_dislike_list::where('post_id','=',$req)  
        ->where('email','=', session('user')->email)
        ->first();//calls the first element from like_dislike_list table where the post_id of the table matches the id of the post that has been liked and also matches the email from the table and the current user email.

        if(isset($user)){  //check if there are any eliment found or not

            if($user->liked == 1 && $user->disliked == 0){  //if a user previously liked the post and again hit the like button.
                $post = post::where('id','=', $req)->decrement('number_of_like');

                $like_list = like_dislike_list::where('post_id','=',$req->post_id)->decrement('liked');
                $post2 = post::where('id','=', $req)->first();
                echo $post2->number_of_like;
                // return redirect('viewposts');
            }
            elseif ($user->liked == 0 && $user->disliked == 1) {  //if a user previously disliked the post but again hit the like button.
                $post = post::where('id','=', $req)->increment('number_of_like');
                $post = post::where('id','=', $req)->decrement('number_of_dislike');

                $like_list = like_dislike_list::where('post_id','=',$req)->increment('liked');
                $like_list = like_dislike_list::where('post_id','=',$req)->decrement('disliked');
                $post2 = post::where('id','=', $req)->first();
                echo $post2->number_of_like;
                // return redirect('viewposts');  //redirect to home with the $post oject
            }
            else{  //if a user previously disliked the post and then hit that button and again hit the like button.
                $post = post::where('id','=', $req)->increment('number_of_like');
                // $post->number_of_dislike = $post->number_of_dislike - 1;
                // $post->update();

                $like_list = like_dislike_list::where('post_id','=',$req)->increment('liked');
                $post2 = post::where('id','=', $req)->first();
                echo $post2->number_of_like;
                // return redirect('viewposts');  //redirect to home with the $post oject
            }
        }
        else{
            $post = post::where('id', $req)->first();
            $post->number_of_like ++;
            $post->update();

            $like_list = new like_dislike_list;
            $like_list->post_id = $req;
            $like_list->email = session('user')->email;
            $like_list->liked = 1;
            $like_list->disliked = 0;
            $like_list->save();
            $post2 = post::where('id','=', $req)->first();
            echo $post2->number_of_like;
            // return redirect('viewposts');  //redirect to home with the $post oject
        }
        
    }

    
    public function dislike(Request $req){
        
        $user = like_dislike_list::where('post_id','=',$req->post_id)
        ->where('email','=', session('user')->email)
        ->first();
        if (isset($user)) {

            if($user->disliked == 1 && $user->liked == 0){
                $post = post::where('id','=', $req->post_id)->decrement('number_of_dislike');

                $dislike_list = like_dislike_list::where('post_id','=',$req->post_id)->decrement('disliked');
                
                return redirect('viewposts');
            }
            elseif ($user->disliked == 0 && $user->liked == 1) {
                $post = post::where('id','=', $req->post_id)->increment('number_of_dislike');
                $post = post::where('id','=', $req->post_id)->decrement('number_of_like');

                $dislike_list = like_dislike_list::where('post_id','=',$req->post_id)->decrement('liked');
                $dislike_list = like_dislike_list::where('post_id','=',$req->post_id)->increment('disliked');
                return redirect('viewposts');  //redirect to home with the $post oject
            }
            else{
                $post = post::where('id','=', $req->post_id)->increment('number_of_dislike');
                // $post->number_of_dislike = $post->number_of_dislike - 1;
                // $post->update();

                $dislike_list = like_dislike_list::where('post_id','=',$req->post_id)->increment('disliked');
                return redirect('viewposts');  //redirect to home with the $post oject
                
            }
        }
        
        else{
            $post = post::where('id', $req->post_id)->first();
            $post->number_of_dislike ++;
            $post->update();

            $dislike_list = new like_dislike_list;
            $dislike_list->post_id = $req->post_id;
            $dislike_list->email = session('user')->email;
            $dislike_list->liked = 0;
            $dislike_list->disliked = 1;
            $dislike_list->save();
            return redirect('viewposts');  //redirect to home with the $post oject
            
        }
    }
}
