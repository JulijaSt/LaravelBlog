<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function index(){
        return view('blog-admin', ['posts' => \App\Models\Blogpost::all()->sortByDesc('id')]);
    }

    public function show($id){
        return view('blogpost', ['post' => \App\Models\Blogpost::find($id)]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogposts,title|max:255',
            'text' => 'required',
        ]);

        $bp = new \App\Models\Blogpost();
        $bp->title = $request['title'];
        $bp->text = $request['text'];

        return ($bp->save() !== 1) ?
            redirect('blog-admin')->with('status_success', 'Post created!') :
            redirect('blog-admin')->with('status_error', 'Post was not created!');
    }

}
