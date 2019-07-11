@extends('layouts.app')

@section('title', $shoes->name)

@section('content')
{{ Breadcrumbs::render('shoes', $shoes) }}
<div class="container mt-4">
  <div class="alert alert-secondary mb-4">
    <h3><a href="/maker/{{ $shoes->maker->id }}">{{ $shoes->maker->alphabet_name }}</a></h3>
    <h1 class="h1 alert-heading mb-3">{{ $shoes->name }}</h1>
  </div>
    @shoesdetailbox([
      'name' => $shoes->name,
      'price' => $shoes->price,
      'description' => $shoes->description,
      'thumbnail' => $shoes->getOneOfThumbnails(),
      'maker_id' => $shoes->maker_id
      ])
    @endshoesdetailbox
    @if (Auth::check())
    <div class="mb-4 text-right">
      <a href="/post/create/{{ $shoes->id }}" class="btn btn-primary">レビューを投稿する</a>
    </div>
    @endif
    @foreach($posts as $post)
    <div class="card mb-4">
      <div class="card-header">
        {{ $post->title }}
        <div class="user-name text-right">{{ $post->user->name }}さん</div>
      </div>
      <div class="card-body">
        <p class="card-text">{!! nl2br(e(str_limit($post->body, 200))) !!}</p>
        <a class="card-link" href="/post/{{ $post->id }}">続きを読む</a>
      </div>
      <div class="card-footer">
        <span class="mr-2">
          {{ $post->created_at->format('Y.m.d H:i') }}
        </span>
        @if ($post->commentList->count())
            <span class="badge badge-primary">
              コメント {{ $post->commentList->count() }}件
            </span>
        @endif
      </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center mb-5">
      {{ $posts->links() }}
    </div>
@endsection
