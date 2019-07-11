<div class="col-mb-4 ">
  <div class="card mb-4 shadow-sm">
      @if($thumbnail && $maker_id == 1)
      <img class="card-img-top text-center" src="{{ asset('/images/shoes_icon/') }}/{{ $thumbnail }}" alt="{{ $name }}" style="width: 260px; height: 195px; display: block; "/>
      @elseif($thumbnail && $maker_id !== 1)
      <img class="card-img-top text-center" src="{{ asset('/images/shoes_icon/') }}/{{ $thumbnail }}" alt="{{ $name }}" style="width: 250px; height: 250px; display: block; "/>
      @endif
    <div class="card-body">
      <div class="card-text">
        <p class="price">販売価格：{{ number_format($price) }}円（税抜）</p>
      </div>
      <div class="card-text">
        <p>{!! nl2br(e($description)) !!}</p>
      </div>
    </div>
  </div>
</div>
