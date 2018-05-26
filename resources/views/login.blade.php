@extends('layouts.common')

@section('title', 'ログイン | LogiCan')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link href="/css/style.css" rel="stylesheet">
@endsection

@include('layouts.head')

@section('maintitle','LogiCan')

@include('layouts.header')

@section('content')
<div class="container mx-auto my-5">
    <h2 class="text-center wf-mplus1p mb-4 gradient-border">ログイン</h2>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Emailアドレス</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">パスワード</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block w-50 mx-auto">送信</button>
            </form>
        </div>
    </div>
</div>
@endsection


@include('layouts.footer')
