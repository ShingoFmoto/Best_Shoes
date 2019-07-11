<div class="contents-item card mb-4 shadow-sm">
  <a href="/maker/{{ $id }}">
    <img src="{{ asset('/images/logo/')}}/{{ $logo }}" alt="メーカーアイコン">
  </a>
  <a href="/maker/{{ $id }}"><p>{{ $name }}</p></a><br>
  <p>{!! nl2br(e($description)) !!}</p>
</div>
