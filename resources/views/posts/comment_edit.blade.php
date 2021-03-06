@extends('layouts.app')

@section('title', 'コメントの編集')

@section('content')
{{ Breadcrumbs::render('comments_edit', $comment) }}
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                コメントの編集
            </h1>

            <form method="POST" action="{{ route('comments_update', ['id' => $comment->id]) }}">
                @csrf
                @method('PUT')

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="body">
                            コメント文
                        </label>

                        <textarea
                            id="body"
                            name="body"
                            class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('body') ?: $comment->body }}</textarea>
                        @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('posts_show', ['id' => $comment->post->id]) }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            更新する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
