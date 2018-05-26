@section('header')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">@yield('maintitle')</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          利用可能なコース
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ロジカルシンキングの基本</a>
          <a class="dropdown-item" href="#">ロジカルシンキングの応用</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">すべてのコース</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about/">LogiCanとは<span class="sr-only">(current)</span></a>
      </li>
    </ul>
      <a href="/login/" class="btn btn-outline-light my-2 my-sm-0 mr-4">ログイン</a>
      <a href="/register/" class="btn btn-success my-2 my-sm-0 mr-4">無料登録</a>
  </div>
</nav>
@endsection
