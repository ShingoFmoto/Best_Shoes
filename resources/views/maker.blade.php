@extends('layouts.app')

@section('title', $maker->japanese_name)

@section('content')
<div class="main">
  {{ Breadcrumbs::render('maker', $maker) }}
  <div class="text-center">
    <h1>
      <span style="background-color:red;color:white;">
        {{$maker->alphabet_name}}/{{$maker->japanese_name}}</h1>
      </span>
    </h1>
  </div>
  <div class="container col-md-4">
    {!! nl2br(e($maker->description)) !!}
  </div>
  <div class="maker-icon text-center">
    <img src="{{ asset('/images/logo') }}/{{ $maker->logo_path }}" alt="メーカーアイコン" class="logo">
  </div>

  <div class="container">
    <div class="row">
      @foreach ($shoesList as $shoes)
        @shoesbox ( ['id' => $shoes->id,
          'name' => $shoes->name,
          'price' => $shoes->price,
          'description' => $shoes->description,
          'thumbnail' => $shoes->getOneOfThumbnails(),
          'maker_id' => $shoes->maker_id,
          ])
        @endshoesbox
      @endforeach
    </div>
  </div>
  <div class="d-flex justify-content-center mb-5">
    {{ $shoesList->links() }}
  </div>
</div>
@endsection
