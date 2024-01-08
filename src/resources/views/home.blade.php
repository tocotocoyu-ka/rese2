@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="https://kit.fontawesome.com/446d4c80c9.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="flex__item">
    @foreach ($shops as $shop)
    <div class="shop__card">
        <div class="card__img">
            <img src="{{ asset($shop->image) }}" width="220px" height="100px">
        </div>
        <div class="card__content">
            <h2 class="card__ttl">{{ $shop->shop_name }}</h2>
            <div class="tag">
                <p class="card__tag">#{{ $shop->region }}</p>
                <p class="card__tag">#{{ $shop->genre }}</p>
            </div>
            <div class="detail__button">
                <a href="{{ route('detail', ['id'=>$shop->shop_id]) }}" class="detail__button-submit">詳しくみる</a>
            </div>
            <div class="favorite__button">
                <button class="favorite__button-submit" type="submit">
                    <i class="fa-solid fa-heart fa-3x heart" style="color: #DDDDDD;"></i>
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection