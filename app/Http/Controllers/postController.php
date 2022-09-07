<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $post = post::all();
        return view('post.index',compact(['post']));

    }
    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        // dd($request->except('_token', 'submit'));
        post::create($request->except('_token', 'submit'));
        return redirect('/post');
    }

    public function edit($id){
        $post = post::find($id);
        return view('post.edit',compact(['post']));
    }

    public function update($id, Request $request){

        $post = post::find($id);
        $post -> update($request->except('_token', 'submit'));
        return redirect('/post');
    }
    public function delete($id){

        $post = post::find($id);
        $post -> delete();
        return redirect('/post');
    }
}
