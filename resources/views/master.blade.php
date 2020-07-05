<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Shop: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Online Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/all-products">All products</a></li>
                <li>
                    <a href="/categories">Categories</a>
                </li>
                <li>
                    <a href="/basket">Your cart</a>
                </li>
                <li>
                    <a href="/reset">Reset project to default state</a>
                </li>
                <li>
                    <a href="/locale/ru">ru</a>
                </li>

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
    @yield('content')
</div>
</body>
</html>
