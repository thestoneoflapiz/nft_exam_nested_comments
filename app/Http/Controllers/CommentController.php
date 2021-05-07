<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User, Post, Comment
};
use Auth;

class CommentController extends Controller
{
    function postComment(Request $request){
        
        Comment::insert([
            "post_id" => $request->post_id,
            "commentable_id" => $request->commentable_id,
            "parent_id" => $request->parent_id ?? null,
            "description" => $request->comment,
            "created_by" => Auth::id(),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);

        return response()->json([]);
    }
}
