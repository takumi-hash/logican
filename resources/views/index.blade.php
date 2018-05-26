@extends('layouts.common')

@section('title', '論理的思考を鍛えるLogiCan')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" type="text/css" href="/css/style.css">
@endsection

@include('layouts.head')

@section('maintitle', 'LogiCan')

@include('layouts.header')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-extend mx-auto">
  <h1 class="display-2 text-light">LogiCan</h1>
  <p class="lead text-white wf-mplus1p font-weight-light text-center">論理的思考力を鍛える</p>
  <hr class="my-4">
  <p class="text-white text-center">フレームワークの習得を通じて<strong>誰でも論理的思考力を鍛えられるオンライン独習教材</strong>です。</p>
  <p class="lead mt-5 text-center">
    <a class="btn btn-primary btn-lg btn-gradient" href="/register" role="button">無料で試す &raquo;</a>
  </p>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center wf-mplus1p font-weight-light mb-4 gradient-border">ロジカルシンキングは難しい？！</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
              dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-sm">
            <h2 class="text-center wf-mplus1p font-weight-light mb-4 gradient-border">こんな方にオススメ</h2>
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-center display-3"><i class="fas fa-glasses"></i></p>
                    <h3 class="text-center mb-3">就活生</h3>
                    <p class="text-justify">コンサル業界で頻出のフェルミ推定やケース問題では解答に至るまでの過程が重要視されると言われています。すなわち論理的思考ができるかが問われているのです。
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-center display-3"><i class="fas fa-briefcase"></i></p>
                    <h3 class="text-center mb-3">新社会人の方</h3>
                    <p class="text-justify">入社後の研修でロジカルシンキングのためのフレームワークを学んだものの、「具体的にどのような場面で実践したらいいのかわからない...」ということはありませんか？</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center wf-mplus1p font-weight-light mb-4 gradient-border">無料でご利用いただけます。</h2>
            <p class="text-justify">ロジカルシンキングは就活や会社で求められる一方で、そのインプットと実践の機会はそう多くありません。私たちも学生の頃に同じ悩みを抱えていました。「そんな悩みを抱える人を助けたい。」という気持ちから作られたLogiCanは無料でご利用いただけます。</p>
        </div>
    </div>
</div>

@endsection
@include('layouts.footer')
