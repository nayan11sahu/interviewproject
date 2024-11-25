<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce App</title>
    <link href="https://cdn.jsdelivr.net/npm/materialize-css@1.0.0/dist/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">E-Shop</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('cart.index') }}">Cart</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/materialize-css@1.0.0/dist/js/materialize.min.js"></script>
</body>
</html>
