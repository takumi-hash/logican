@extends('layouts.common')

@section('title', 'ダッシュボード | LogiCan')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link href="/css/style.css" rel="stylesheet">
@endsection

@include('layouts.head')

@section('maintitle','LogiCan')

@include('layouts.userheader')

@section('content')
<div class="container mx-auto my-5">
    <h2 class="text-center wf-mplus1p mb-4 gradient-border font-weight-light">ダッシュボード</h2>
    <div class="row my-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card my-3">
                        <div class="card-header">
                        Lesson 1 テストスコア
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-3">
                        <div class="card-header">
                        Lesson 2 テストスコア
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-3">
                        <div class="card-header">
                        Lesson 3 テストスコア
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-3">
                        <div class="card-header">
                        Lesson 4 テストスコア
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-3">
                        <div class="card-header">
                        Lesson 5 テストスコア
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-3">
                        <div class="card-header">
                        Lesson 6 テストスコア
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card my-3">
                <div class="card-header">
                    ステータス
                </div>
                <div class="card-body">
                    <img class="w-50 rounded-circle d-block mx-auto mb-3" src="/image/user_icon.jpg" alt="Your profile photo">
                    <p class="text-center">
                        <span class="badge badge-pill badge-primary">ロジックマスター</span>
                        <span class="badge badge-pill badge-success">Lv. 336</span>
                    </p>
                    <p class="display-4 wf-mplus1p text-weight-light text-center">Steve Jobs</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card my-3">
                <div class="card-header">
                    Steve Jobsさんの学習進度
                </div>
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-pills justify-content-center mt-5">
        <li class="nav-item">
            <a class="nav-link active" href="#">すべての教材</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">進行中</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">完了済</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">未完了</a>
        </li>
    </ul>
    <div class="row my-3">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header" id="lesson1">
                    Lesson 1: ロジカルシンキングの基礎
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
            </div>
            <div class="card my-3">
                <div class="card-header" id="lesson2">
                    Lesson 2: ロジカルシンキングの基礎
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card my-3">
                            <img class="card-img-top" src="/image/card1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">2-1. MECEを知る</h5>
                                <p class="card-text">MECEとは“Mutually Exclusive, Collectively Exhaustive”を略したもので、『モレなくダブりなく』を意味します。</p>
                                <a href="#" class="btn btn-dark text-light">完了</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card my-3">
                            <img class="card-img-top" src="/image/card2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">2-2. ロジックツリーの基本</h5>
                                <p class="card-text">ロジックツリーはレッスン1-1で学んだMECEを活用し、問題の原因や解決策の深掘りに利用できます。</p>
                                <a href="#" class="btn btn-primary">受講する</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card my-3">
                            <img class="card-img-top" src="/image/card3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">2-3. 現状の特性をデータから把握する</h5>
                                <p class="card-text">ケース問題において、与えられた情報から現状を素早く把握する力が不可欠です。一見雑多に見えるデータをうまく可視化するテクニックを見ていきましょう。</p>
                                <a href="#" class="btn btn-primary">受講する</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card my-3">
                            <img class="card-img-top" src="/image/card1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">2-4. テスト</h5>
                                <p class="card-text">MECEとは“Mutually Exclusive, Collectively Exhaustive”を略したもので、『モレなくダブりなく』を意味します。</p>
                                <a href="#" class="btn btn-success text-light">テストを受ける</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card position-fixed">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#lesson1">Lesson 1</a></li>
                    <li class="list-group-item"><a href="#lesson2">Lesson 2</a></li>
                    <li class="list-group-item"><a href="#lesson3">Lesson 3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@include('layouts.footer')
