<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User, Post, Comment
};
use Auth;
use DB;

class PostController extends Controller
{
    function getPost(Request $request){
        $post = Post::select(
            "posts.id", "posts.description", "posts.slug", "users.id as user_id", "users.name as user_name", DB::raw("DATE_FORMAT(posts.created_at, '%M %d, %Y %h:%i %p') as created_at_string")
        )->leftJoin("users", "users.id", "=", "posts.created_by")->first();
        if($post){
            // get first layer comments
            $first_layers = Comment::select(
                "comments.id", "comments.description", "comments.post_id", "comments.parent_id", "comments.commentable_id", "users.id as user_id", "users.name as user_name", DB::raw("DATE_FORMAT(comments.created_at, '%M %d, %Y %h:%i %p') as created_at_string")
            )->leftJoin("users", "users.id", "=", "comments.created_by")->where([
                "post_id" => $post->id,
                "parent_id" => null,
                "commentable_id" => 1,
            ])->orderBy("created_at", "desc");

            foreach ($first_layers as $fc) {
                 // get second layer comments
                $second_layers = Comment::select(
                    "comments.id", "comments.description", "comments.post_id", "comments.parent_id", "comments.commentable_id", "users.id as user_id", "users.name as user_name", DB::raw("DATE_FORMAT(comments.created_at, '%M %d, %Y %h:%i %p') as created_at_string")
                )->leftJoin("users", "users.id", "=", "comments.created_by")->where([
                    "post_id" => $post->id,
                    "parent_id" => $fc->id,
                    "commentable_id" => 2,
                ])->orderBy("created_at", "desc");

                foreach ($second_layers as $sc) {
                    // get second layer comments
                   $third_layers = Comment::select(
                        "comments.id", "comments.description", "comments.post_id", "comments.parent_id", "comments.commentable_id", "users.id as user_id", "users.name as user_name", DB::raw("DATE_FORMAT(comments.created_at, '%M %d, %Y %h:%i %p') as created_at_string")
                    )->leftJoin("users", "users.id", "=", "comments.created_by")->where([
                       "post_id" => $post->id,
                       "parent_id" => $fc->id,
                       "commentable_id" => 3,
                   ])->orderBy("created_at", "desc");

                   $sc->comments = $third_layers;
               }

               $fc->comments = $second_layers;

            }

            $post->comments = $first_layers;
        }

        return response()->json(["data" => $post]);
    }
}
