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
            "posts.id", "posts.description", "posts.slug", "users.id as user_id", "users.name as user_name", "posts.created_at"
        )->leftJoin("users", "users.id", "=", "posts.created_by")->first();
        if($post){
            // get first layer comments
            $first_layers = Comment::select(
                "comments.id", "comments.description", "comments.post_id", "comments.parent_id", "comments.commentable_id", "users.id as user_id", "users.name as user_name", "comments.created_at"
            )->leftJoin("users", "users.id", "=", "comments.created_by")->where([
                "post_id" => $post->id,
                "parent_id" => null,
                "commentable_id" => 1,
            ])->orderBy("comments.created_at", "desc")->get();

            foreach ($first_layers as $fc) {
                 // get second layer comments
                $second_layers = Comment::select(
                    "comments.id", "comments.description", "comments.post_id", "comments.parent_id", "comments.commentable_id", "users.id as user_id", "users.name as user_name", "comments.created_at"
                )->leftJoin("users", "users.id", "=", "comments.created_by")->where([
                    "post_id" => $post->id,
                    "parent_id" => $fc->id,
                    "commentable_id" => 2,
                ])->orderBy("comments.created_at", "desc")->get();
                foreach ($second_layers as $sc) {
                    // get second layer comments
                   $third_layers = Comment::select(
                        "comments.id", "comments.description", "comments.post_id", "comments.parent_id", "comments.commentable_id", "users.id as user_id", "users.name as user_name", "comments.created_at"
                    )->leftJoin("users", "users.id", "=", "comments.created_by")->where([
                       "post_id" => $post->id,
                       "parent_id" => $sc->id,
                       "commentable_id" => 3,
                   ])->orderBy("comments.created_at", "desc")->get();

                   $sc->comments = $third_layers;
               }

               $fc->comments = $second_layers;

            }

            $post->comments = $first_layers;
        }

        return response()->json(["data" => $post]);
    }
}
