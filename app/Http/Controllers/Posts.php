<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view('posts.index', compact('data'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        Post::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->radio === 'active' ? true : false

        ]);
        return redirect()->route('posts.index');
    }
    public function show($id)
    {
        $data = Post::where('id',$id)->first();
        return view('posts.show',compact('data'));
    }
    public function edit($id)
    {
        $data = Post::where('id', $id)->first();
        return view('posts.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Post::where('id', $id)->first();
        $data->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect()->route('posts.index');
    }
    public function destroy($id){
        $data = Post::where('id',$id)->first();
        $data->delete();
        return redirect()->route('posts.index');
        }
}
