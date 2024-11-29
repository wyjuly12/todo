<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>
<body>
    
<header class="header">
    <header class="header__inner">
        <a class="header__logo" href="/" >Todo</a>
    </header>
    
</header>

<main>
@yield('content')
</main>

</body>
</html>