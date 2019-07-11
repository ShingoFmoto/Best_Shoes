@extends('layouts.app')

@section('title', 'レビュー新規作成')

@section('content')
{{ Breadcrumbs::render('posts_create', $shoes) }}
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                レビューの新規作成
            </h1>

            <form method="POST" action="{{ route('posts_post', ['id' => $shoes->id]) }}">
                @csrf
                <input type="hidden" name="shoes_id" value="{{ $shoes->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value="{{ old('title') }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>

                        <textarea
                            id="body"
                            name="body"
                            class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('shoes', ['id' => $shoes->id]) }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
