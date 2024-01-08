<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/common2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu-left.css' rel='stylesheet'>
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-left">
                <div class="box">
                    <a class="gg-menu-left" href="/menu2"></a>
                </div>
                <h2 class="header__logo">
                    Rese
                </h2>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>