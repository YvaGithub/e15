<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Alumni Circle')</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='/css/alumni.css' type='text/css' rel='stylesheet'>

    @yield('head')
</head>
<body>

    <header>
        <a href='/'><img src='/images/alumni-logo@2x.png' id='logo' alt='Alumni Logo'></a>
           <h1>HYDE PARK UNIVERSITY</h>
              <h2>The Alumni Circle</h2>
        <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/members'>Members</a></li>
                <li><a href='/about'>About Us</a></li>
                <li><a href='/contact'>Contact</a></li>
                <li><a href='/create'>Register</a></li>
            </ul>
        </nav>
    </header>

    <section id='main'>
        @yield('content')
    </section>

    <footer>
        &copy; Alumni Circle, Inc.
        {{config('mail.contact_email')}}
    </footer>

</body>
</html>

