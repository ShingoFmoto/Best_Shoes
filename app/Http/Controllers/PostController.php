<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\shoes;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create($shoes_id)
    {
      $user = Auth::user();
      $shoes = Shoes::find($shoes_id);
      return view('posts.create', compact('shoes', 'user'));
    }

    public function post(Request $request)
    {
      $validate_rule = [
          'title' => 'required|max:50',
          'body' => 'required|max:2000'
      ];

      $this->validate($request, $validate_rule);
      $params = $request->all();
      Post::create($params);
      return redirect()->route('shoes', ['id' => $request->shoes_id]);
    }

    public function show($post_id)
    {
      $user = Auth::user();
      $post = Post::find($post_id);
      $comments = $post->commentList()->with('user')->paginate(5);
      return view('posts.show', compact('post', 'user', 'comments'));
    }

    public function edit($post_id)
    {
      $post = Post::find($post_id);
      return view('posts.post_edit', compact('post'));
    }

    public function update($post_id, Request $request)
    {
      $params = $request->validate([
          'title' => 'required|max:50',
          'body' => 'required|max:2000',
        ]);

      $post = Post::findOrFail($post_id);
      $post->fill($params)->save();

      return redirect()->route('posts_show', ['post' => $post]);
    }

    public function destroy($post_id, Request $request)
    {
      $post = Post::findOrFail($post_id);

      \DB::transaction(function () use ($post) {
        $post->commentList()->delete();
        $post->delete();
      });

      return redirect()->route('shoes', ['id' => $request->shoes_id]);
    }
}
