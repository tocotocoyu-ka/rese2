@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<script src="https://kit.fontawesome.com/446d4c80c9.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="login-form__content">
    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__heading">
        <p>Login</p>
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
                    @error('email')
                    {{ $message }}
                    @enderror
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
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection