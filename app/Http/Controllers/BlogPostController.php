<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function index(){
        return view('blog-admin', ['posts' => \App\Models\Blogpost::all()]);
    }

    public function show($id){
        return view('blogpost', ['post' => \App\Models\BlogPost::find($id)]);
    }

}
