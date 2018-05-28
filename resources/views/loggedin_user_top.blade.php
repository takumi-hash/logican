@extends('layouts.common')

@section('title', 'Lesson 1-1. MECEを知る | LogiCan')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link href="/css/style.css" rel="stylesheet">
@endsection

@include('layouts.head')

@section('maintitle','LogiCan')

@include('layouts.userheader')

@section('content')
<div class="container my-5">
    <h2 class="text-center wf-mplus1p mb-4 gradient-border">おかえりなさい</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner my-5">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/image/card1_wide.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/image/card2_wide.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/image/card3_wide.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card my-3">
                <img class="card-img-top" src="/image/card1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">1-1. MECEを知る</h5>
                    <p class="card-text">MECEとは“Mutually Exclusive, Collectively Exhaustive”を略したもので、『モレなくダブりなく』を意味します。</p>
                    <a href="#" class="btn btn-dark text-light">完了</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card my-3">
                <img class="card-img-top" src="/image/card2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">1-2. ロジックツリーの基本</h5>
                    <p class="card-text">ロジックツリーはレッスン1-1で学んだMECEを活用し、問題の原因や解決策の深掘りに利用できます。</p>
                    <a href="#" class="btn btn-primary">受講する</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card my-3">
                <img class="card-img-top" src="/image/card3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">1-3. 現状の特性をデータから把握する</h5>
                    <p class="card-text">ケース問題において、与えられた情報から現状を素早く把握する力が不可欠です。一見雑多に見えるデータをうまく可視化するテクニックを見ていきましょう。</p>
                    <a href="#" class="btn btn-primary">受講する</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card my-3">
                <img class="card-img-top" src="/image/card1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">1-4. テスト</h5>
                    <p class="card-text">MECEとは“Mutually Exclusive, Collectively Exhaustive”を略したもので、『モレなくダブりなく』を意味します。</p>
                    <a href="#" class="btn btn-success text-light">テストを受ける</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card position-fixed">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
</div>

@endsection


@include('layouts.footer')
