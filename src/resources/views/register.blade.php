@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<script src="https://kit.fontawesome.com/446d4c80c9.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="register-form__content">
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__heading">
        <p>Registration</p>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" />
                </div>
                <div class="form__error">
                    <!--後にバリデーション機能実装-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                </div>
                <div class="form__error">
                    <!--後にバリデーション実装-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-ttl">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <div class="form__error">
                    <!--後にバリデーション実装-->
                </div>
            </div>
        </div>
        
        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection