<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dit="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Best Shoes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
    @stack('css')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="{{ route('top') }}">Best Shoes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/maker-list">メーカー一覧 <span class="sr-only">(current)</span></a>
                        </li>
                      @guest
                        <li class="nav-item active">
                            <a class="nav-link" href="/register">新規登録 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/login">ログイン <span class="sr-only">(current)</span></a>
                        </li>
                      @endguest
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    </ul>
                    @if ($errors->has('keyword'))
                        <span class="text-danger">{{ $errors->first('keyword') }}</span>
                    @endif
                    <form class="form-inline mt-2 mt-md-0" method="get" action="{{ route('search_index') }}">
                      @csrf
                        <input class="form-control mr-sm-2" type="text" placeholder="シューズ名を入力"
                               aria-label="Search" name="keyword" value="{{ old('keyword') }}">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
                    </form>
                </div>
            </nav>
        </header>
        <main role="main">
            @yield('content')
        </main>
        <footer>
          <div class="footer-text">
            ©2019 best shoes
          </div>
        </footer>
    </div>
</body>
</html>
