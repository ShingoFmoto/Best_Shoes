@extends('layouts.app')

@section('title', $post->shoes->name. 'のレビュー')

@section('content')
{{ Breadcrumbs::render('posts_show', $post) }}
<div class="container mt-4">
  <div class="alert alert-secondary mb-4">
    <h2><a href="/shoes/{{ $post->shoes->id }}">{{ $post->shoes->name }}</a></h2>
    <h2 class="h2 alert-heading mb-3">{{ $post->user->name }}さんのレビュー</h2>
  </div>
  <div class="card mb-4">
    <div class="card-header">
      {{ $post->title }}
    </div>
    <div class="card-body">
      <p class="card-text">{!! nl2br(e($post->body)) !!}</p>
      @if (isset($user) && $user->id == $post->user->id)
        <div class="text-right">
          <a class="btn btn-success" href="{{ route('posts_edit', ['id' => $post->id]) }}">編集する</a>
            <form style="display: inline-block;" method="POST" action="{{ route('posts_destroy', ['id' => $post->id]) }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="shoes_id" value="{{ $post->shoes->id }}">
              <button class="btn btn-danger">削除する</button>
            </form>
          </div>
      @endif
    </div>
    <div class="card-footer">
      <span class="mr-2">
        {{ $post->created_at->format('Y.m.d H:i') }}
      </span>
    </div>
  </div>
  @if (Auth::check())
  <form class="mb-4" method="POST" action="{{ route('comments_store', ['id' => $post->id]) }}">
      @csrf
      <input type="hidden" name="post_id"  value="{{ $post->id }}">
      <input type="hidden" name="user_id" value="{{ $user->id }}">

      <div class="form-group">
          <textarea
              id="body"
              name="body"
              class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
              rows="4"
              placeholder="このレビューにコメントを書く"
          >{{ old('body') }}</textarea>
          @if ($errors->has('body'))
              <div class="invalid-feedback">
                  {{ $errors->first('body') }}
              </div>
          @endif
      </div>

      <div class="text-right">
          <button type="submit" class="btn btn-primary">
              コメントする
          </button>
      </div>
  </form>
  @endif
        <div class="border p-4 mb-4">
            <section>
                <h2 class="h5 mb-4">
                    コメント一覧
                </h2>

                @forelse($comments as $comment)
                    <div class="border-top p-4">
                      <div class="user-name">{{ $comment->user->name }}さん</div>
                      <div class="time text-right">
                        <time class="text-secondary">
                            {{ $comment->created_at->format('Y.m.d H:i') }}
                        </time>
                      </div>
                        <p class="mt-2">
                            {!! nl2br(e($comment->body)) !!}
                        </p>
                    </div>
                    @if (isset($user) && $user->id == $comment->user->id)
                    <div class="mb-4 text-right">
                      <form style="display: inline-block;" action="{{ route('comments_edit', ['id' => $comment->id]) }}" method="post">
                        <a class="btn btn-success" href="{{ route('comments_edit', ['id' => $comment->id]) }}">編集する</a>
                      </form>
                      <form  style="display: inline-block;" method="POST" action="{{ route('comments_destroy', ['id' => $comment->id]) }}">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">削除する</button>
                      </form>
                    </div>
                    @endif
                @empty
                    <p>コメントはまだありません。</p>
                @endforelse
            </section>
          </div>
          <div class="d-flex justify-content-center mb-5">
            {{ $comments->links() }}
          </div>
@endsection
