<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function show(Request $request)
    {
        $posts = Post::find($request->id);
        return view('posts.show', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create', ['posts' => new Post()]);
    }

    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());
        return redirect(route('posts.index'))->with('status', 'Post Creado Correctamente!');
    }

    public function update(SavePostRequest $request)
    {
        Post::find($request->id)->update($request->Validated());
        return to_route('posts.index')->with('status', 'Post Editado Correctamente!');
    }

    public function edit(Request $request)
    {
        $posts = Post::find($request->id);
        return view('posts.edit', ['posts' => $posts]);
    }

    public function destroy(Request $request)
    {
        Post::find($request->id)->delete();
        return to_route('posts.index')->with('status', 'Post Eliminado Correctamente!');
        /* return redirect(route('posts.index'))->with('status', 'Post Eliminado Correctamente!'); */
    }

    public function index()
    {
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }
}
