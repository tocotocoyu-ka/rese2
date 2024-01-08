<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/menu2.css') }}">
    <title>Rese</title>
</head>

<body>
    <div class="box">
        <a class="menu-close" href="/">✕</a>
    </div>
    <div class="content">
        <div class="menu__link">
            <a class="menu__home" href="/">Home</a>
        </div>
        <form class="form" action="/logout" method="post">
            @csrf
            <div class="menu__link">
                <button class="menu__logout">Logout</button>
            </div>
        </form>
        <div class="menu__link">
            <a class="menu__mypage" href="/mypage">Mypage</a>
        </div>
    </div>

</body>

</html>