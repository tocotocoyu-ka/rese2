<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
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
            <div class="header-right">
                <nav>
                    <ul class="header-nav">
                        <form action="{{ route('home') }}" method="GET">
                            <li class="header-nav__item">
                                <select name="area">
                                    <option value="allarea">All area</option>
                                    <option value="東京都">東京都</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="福岡県">福岡県</option>
                                </select>
                            </li>
                            <li class="header-nav__item">
                                <select name="genre">
                                    <option value="allgenre">All genre</option>
                                    <option value="寿司">寿司</option>
                                    <option value="焼肉">焼肉</option>
                                    <option value="居酒屋">居酒屋</option>
                                    <option value="イタリアン">イタリアン</option>
                                    <option value="ラーメン">ラーメン</option>
                                </select>
                            </li>
                            <li class="header-nav__item">
                                <div class="search-box">
                                    <form action="{{ route('home') }}" method="get">
                                        <button type="submit" aria-label="検索"></button>
                                        <input type="text" name="keyword" value="{{ $keyword }}" placeholder="Search…" class="search-input">
                                    </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>