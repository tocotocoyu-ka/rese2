@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<script src="https://kit.fontawesome.com/446d4c80c9.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="reserve__detail-content">
    <div class="reserve__detail-ttl">
        <h2>予約状況</h2>
    </div>
    <div class="reserve__detail-list">
        <div class="reserve__detail-list-ttl">
            <div class="list-icon">
                <i class="fa-regular fa-clock"></i>
            </div>
            <div class="list-ttl">
                <p>予約1</p>
            </div>
            <div class="list-button">
                <button class="reserve-delete__button" type="submit">
                <i class="fa-regular fa-circle-xmark fa-lg" style="color: #fff;"></i>
                </button>
            </div>
        </div>
        <div class="list-table">
            <table class="reserve__detail">
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
    </div>
</div>

<div class="username">
    <h2>サンプル名さん</h2>
</div>

<div class="favorite-shop">
    <div class="favorite-shop__ttl">
        <h2>お気に入り店舗</h2>
    </div>
    <table class="favorite-shop__list">
        <tr>
            <td>
                <div class="shop__card">
                    <div class="card__img">
                        サンプルイメージ
                    </div>
                    <div class="card__content">
                        <h2 class="card__ttl">サンプル店名</h2>
                        <div class="tag">
                            <p class="card__tag">♯サンプルタグ</p>
                            <p class="card__tag">♯サンプルタグ</p>
                        </div>
                        <div class="detail__button">
                            <button class="detail__button-submit" type="submit">詳しくみる</button>
                        </div>
                        <div class="favorite__button">
                            <button class="favorite__button-submit" type="submit">
                                <i class="fa-solid fa-heart fa-3x heart" style="color: #DDDDDD;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </td>
            <td>
               <div class="shop__card">
                    <div class="card__img">
                        サンプルイメージ
                    </div>
                    <div class="card__content">
                        <h2 class="card__ttl">サンプル店名</h2>
                        <div class="tag">
                            <p class="card__tag">♯サンプルタグ</p>
                            <p class="card__tag">♯サンプルタグ</p>
                        </div>
                        <div class="detail__button">
                            <button class="detail__button-submit" type="submit">詳しくみる</button>
                        </div>
                        <div class="favorite__button">
                            <button class="favorite__button-submit" type="submit">
                                <i class="fa-solid fa-heart fa-3x heart" style="color: #DDDDDD;"></i>
                            </button>
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
    </table>
</div>
@endsection