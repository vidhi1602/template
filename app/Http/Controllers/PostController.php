<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function data(Request $req)
    {
        //return $req->input();
        $user = new Post;
        $user->title=$req->title;
        $user->body=$req->body;
        $user->save();
        return "inserted";
    }  
        public function list($id){
            $post = Post::findOrFail($id)->all();
            
         $comments=$post->comments()->get();
            foreach($comments as $comment){
                echo $comment->message.'<br>';

            }
        }

    
}
