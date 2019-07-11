@extends('layouts.app')

@section('title', '検索結果一覧')

@section('content')
<div class="container">
  <div class="row">
  <p class="mt-4">{{ $keyword }}の検索結果一覧</p>
  @if(count($shoes)>0)
    @foreach($shoes as $shoe)
      @shoesbox ( ['id' => $shoe->id,
        'name' => $shoe->name,
        'price' => $shoe->price,
        'description' => $shoe->description,
        'thumbnail' => $shoe->getOneOfThumbnails(),
        'maker_id' => $shoe->maker_id
        ])
      @endshoesbox
    @endforeach
  @else
  </div>
  <div class="alert alert-secondary mb-4">
    <p class="mb-2 mt-2">"{{ $keyword }}"に一致するシューズはありませんでした。</p>
  </div>
  <div class="col text-center">
    <a class="btn btn-primary btn-lg" href="{{url()->previous()}}">戻る</a>
  </div>
  @endif
</div>
<div class="d-flex justify-content-center mb-5">
  {{ $shoes->appends(request()->input())->links() }}
</div>
@endsection
