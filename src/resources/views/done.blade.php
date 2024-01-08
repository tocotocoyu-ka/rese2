@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done__content">
    <div class="done__card">
        <div class="done__content-message">
            <p>ご予約ありがとうございます</p>
        </div>
        <div class="done__content-button">
            <button class="exit__button" type="submit">戻る</button>
        </div>
    </div>
</div>
@endsection