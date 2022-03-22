<!doctype html>
<html lang='en'>
<head>
    <title>@yield('name', 'SmartBreakfastMenu')</title>
    <meta charset='utf-8'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='/css/smartbreakfastmenu.css' type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>

    <header>
        <a href='/'><img src='/images/smartbreakfastmenu-logo@2x.png' id='logo' alt='SmartBreakfastMenu Logo'></a>
    </header>

    <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/foods'>All Foods</a></li>
                <li><a href='/list'>Your list</a></li>
                <li><a href='/contact'>Contact</a></li>
            </ul>
        </nav>

    <section>
    @yield('content')
    </section>

    <footer>
        &copy; SmartBreakfastMenu, Inc.
    </footer>

</body>
</html>