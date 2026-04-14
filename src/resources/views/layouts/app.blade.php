<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todoリスト</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/" class="header__logo">Todo</a>
            </div>
            <nav>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <a href="/categories" class="header-nav__link">カテゴリ一覧</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
</body>
</html>