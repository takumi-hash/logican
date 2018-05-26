@extends('layouts.common')

@section('title', 'プロフィール設定 | LogiCan')
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
    <h2 class="text-center wf-mplus1p mb-4 gradient-border">プロフィール設定</h2>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="form-group text-center">
                <img class="w-25 mx-auto d-block rounded-circle my-3" src="/image/user_icon.jpg" alt="user picture">
                <button type="button" class="btn btn-outline-secondary btn-sm">画像変更</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">ユーザー名</label>
                    <input type="username" class="form-control" id="username" aria-describedby="userHrlp" placeholder="Enter User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Emailアドレス</label>
                    <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">現在のパスワード</label>
                    <input type="password" class="form-control" id="currentPassword" placeholder="Current Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">新しいパスワード</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">新しいパスワード（再度入力）</label>
                    <input type="password" class="form-control" id="newPasswordCionfirm" placeholder="New Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block w-50 mx-auto">更新</button>
            </form>
        </div>
    </div>
</div>
@endsection


@include('layouts.footer')
