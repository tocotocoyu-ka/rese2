@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
<script src="https://kit.fontawesome.com/446d4c80c9.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="shop-detail__content">
    <div class="content__button">
        <button class="return__button" type="button" onClick="history.back()">
            <i class="fa-solid fa-chevron-left fa-lg"></i>
        </button>
    </div>
    <div class="shop__ttl">
        <h2>{{ $shop->shop_name }}</h2>
    </div>
    <div class="shop__image">
        <img src="{{ $shop->image }}">
    </div>
    <div class="shop__tag">
        <p>♯{{ $shop->region }}</p>
        <p>♯{{ $shop->genre }}</p>
    </div>
    <div class="shop__explanation">
        <p>{{ $shop->explanation }}</p>
    </div>
</div>

<div class="reserve__form">
    <form class="form">
        <div class="form__ttl">
            <h2>予約</h2>
        </div>
        <input type="date">
        <select name="time">
            <option value="time">17:00</option>
            <option value="time">18:00</option>
            <option value="time">19:00</option>
            <option value="time">20:00</option>
            <option value="time">21:00</option>
            <option value="time">22:00</option>
        </select>
        <select name="number">
            <option value="number">1人</option>
            <option value="number">2人</option>
            <option value="number">3人</option>
            <option value="number">4人</option>
            <option value="number">5人</option>
            <option value="number">6人</option>
        </select>
        <div class="select">
            <table class="select-table">
                <tr>
                    <td>Shop</td>
                    <td>サンプル店名</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>サンプル日付</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>サンプル時間</td>
                </tr>
                <tr> 
                    <td>Number</td>
                    <td>サンプル人数</td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="reserve__button" type="submit">予約する</button>
        <div>
    </form>
</div>
@endsection