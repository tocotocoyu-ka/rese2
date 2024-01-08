@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__card">
        <div class="thanks__content-message">
            <p>会員登録ありがとうございます</p>
        </div>
        <div class="thanks__content-button">
            <button class="login__button" type="submit">ログインする</button>
        </div>
    </div>
</div>
@endsection