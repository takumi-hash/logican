@extends('layouts.common')

@section('title', 'ユーザー登録 | LogiCan')
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
    <h2 class="text-center wf-mplus1p mb-4 gradient-border">ユーザー登録</h2>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Emailアドレス</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">迷惑メールをお送りすることはありません。</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">パスワード</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">プライバシーポリシーに同意する</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block w-50 mx-auto">送信</button>
            </form>
        </div>
    </div>
</div>
@endsection


@include('layouts.footer')
