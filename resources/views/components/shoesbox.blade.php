<div class="col-mb-4 ">
  <div class="card mb-4 shadow-sm">
    <a href="/shoes/{{ $id }}">
      @if($thumbnail && $maker_id == 1)
      <img class="d-block mx-auto" src="{{ asset('/images/shoes_icon/') }}/{{ $thumbnail }}" alt="{{ $name }}" style="width: 260px; height: 195px; display: block; "/>
      @elseif($thumbnail && $maker_id !== 1)
      <img class="d-block mx-auto" src="{{ asset('/images/shoes_icon/') }}/{{ $thumbnail }}" alt="{{ $name }}" style="width: 250px; height: 250px; display: block; "/>
      @endif
    </a>
    <div class="card-body">
      <div class="text-center">
        <a href="/shoes/{{ $id }}">{{ $name }}</a><br>
      </div>
      <div class="card-text">
        <p class="price">販売価格：{{ number_format($price) }}円（税抜）</p>
      </div>
      <div class="card-text">
        <p>{!! nl2br(e($description)) !!}</p>
      </div>
    </div>
  </div>
</div>
