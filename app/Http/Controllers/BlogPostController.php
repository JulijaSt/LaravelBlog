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

    public function publicIndex(){
        return view('welcome', ['posts' => \App\Models\Blogpost::all()->sortByDesc('id')]);
    }

    public function edit($id){
        return view('edit-post', ['post' => \App\Models\Blogpost::find($id)]);
    }

    public function destroy($id){
        \App\Models\Blogpost::destroy($id);
        return redirect('/blog-admin')->with('status_success', 'Post deleted!');
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

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogposts,title,'.$id.',id|max:255',
            'text' => 'required',
        ]);
        $bp = \App\Models\Blogpost::find($id);
        $bp->title = $request['title'];
        $bp->text = $request['text'];
        return ($bp->save() !== 1) ?
            redirect('blog-admin/' . $id)->with('status_success', 'Post updated!') :
            redirect('blog-admin/' . $id)->with('status_error', 'Post was not updated!');
    }

}
