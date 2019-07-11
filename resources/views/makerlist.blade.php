@extends('layouts.app')

@section('title', 'メーカー一覧')

@section('content')
<div class="main maker-list">
  <div class="text-center">
    {{ Breadcrumbs::render('maker-list') }}
    <h2>メーカー一覧</h2>
  </div>
  <div class="container">
    <div class="contents card-deck mb-3 text-center">
      @foreach ($maker_list as $maker)
          {{ $maker->name }}
          @makerbox( ['name' => $maker->japanese_name,
                      'id' => $maker->id,
                      'description' => $maker->description,
                      'logo' => $maker->logo_path,
                      ])
          @endmakerbox
      @endforeach
    </div>
  </div>
</div>
@endsection
