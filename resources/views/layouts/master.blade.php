<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Shop: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Online Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

               @include('snippets.insertions.header.sub-menu')

                <?= view('snippets.insertions.header.locales') ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a>
                        </li>
                        <li>
                            <a href="http://internet-shop.tmweb.ru/currency/USD">$</a>
                        </li>
                        <li>
                            <a href="http://internet-shop.tmweb.ru/currency/EUR">€</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @yield('content')
    </div>
</div>
</body>
</html>
