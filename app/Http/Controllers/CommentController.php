<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
  public function store(Request $request)
  {
      $validate_rule = [
          'post_id' => 'required|exists:posts,id',
          'body' => 'required|max:2000',
      ];
      $this->validate($request, $validate_rule);
      $params = $request->all();
      Comment::create($params);
      return redirect()->route('posts_show', ['id' => $request->post_id]);
  }

  public function edit($comment_id)
  {
    $comment = Comment::find($comment_id);
    return view('posts.comment_edit', compact('comment'));
  }

  public function update($comment_id, Request $request)
  {
    $params = $request->validate([
        'body' => 'required|max:2000',
      ]);

    $comment = Comment::find($comment_id);
    $comment->fill($params)->save();

    return redirect()->route('posts_show', ['post' => $comment->post]);
  }

  public function destroy($comment_id, Request $request)
  {
    $comment = Comment::find($comment_id);
    $comment->delete();

    return redirect()->route('posts_show', ['post' => $comment->post]);
  }
}
