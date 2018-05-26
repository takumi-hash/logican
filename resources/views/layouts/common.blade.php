<!DOCTYPE HTML>
<html lang="ja">
<meta charset="UTF-8">
<head>
@yield('head')
</head>
<body>
@yield('header')
<main class="">

        @yield('content')
    <div class="sub">
        @yield('sub')
        @yield('pageSub')
    </div>
</main>
@yield('footer')
</body>
</html>
