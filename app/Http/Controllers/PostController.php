<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


use DB;



class PostController extends Controller
{
    public function insertform(){
        return view('admin.post.insert');
    }

    public function insert(Request $request){
        $title = $request->input('title');
        $sub_title = $request->input('sub-title');
        $description = $request->input('description');



        DB::table('posts')->insert(
            ['title' => $title , 'sub_title' => $sub_title, 'description' => $description, 'created_at' => date("Y-m-d h-s")]
        );

        return redirect('/insert')->with('message', 'Success!');
    }

    public function featch_all_post(Request $request){
        $post = DB::table('posts')->get();
        return view('index', compact('post',$post));
    }

    public function view_post($id, Request $request){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('post', ['post' => $post]);
    }

}
