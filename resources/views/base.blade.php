<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amazing</title>
    <link rel="stylesheet" href="../../css/app.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    @guest
        <div class="d-flex p-3" style="background-color: rgb(130, 149, 252)">
            <div class="w-25 d-flex justify-content-center align-items-center"></div>
            <ul class="navbar-nav pl-4 mt-lg-0">
                <li class="nav-item" style="display:none">
                    <a>

                    </a>
                </li>
            </ul>
            <div class="mx-auto order-0 w-50 text-center">
                <h1><strong>{{ __('Amazing E-Book') }}</strong></h1>
            </div>
            <div class="w-25 d-flex justify-content-center align-items-center">

                <a class="nav-link btn font-weight-bold" href="/register">
                    <button class="btn btn-warning btn-block font-weight-bold text-white">{{ __('Sign Up') }}</button>
                </a>

                <a class="nav-link btn font-weight-bold" href="/login">
                    <button class="btn btn-warning btn-block font-weight-bold text-white">{{ __('Log In') }}</button>
                </a>
            </div>
        </div>
        <div style="padding-bottom: 5%">
    @endguest
    @if (Auth::check())
            <div class="d-flex p-3" style="background-color: rgb(130, 149, 252)">
                <div class="w-25 d-flex justify-content-center align-items-center">
                </div>
                <ul class="navbar-nav pl-4 mt-lg-0">
                    <li class="nav-item" style="display:none">
                        <a>
                        </a>
                    </li>
                </ul>
                <div class="mx-auto order-0 w-50 text-center">
                    <h1><strong>Amazing E-Book</strong></h1>
                </div>

                <div class="w-25 d-flex justify-content-center align-items-center">
                    <a class="nav-link btn font-weight-bold">
                        <form action="/logout" method="get" method="post">
                            @csrf
                            <button type="submit" class="btn btn-warning font-weight-bold">{{ __('Logout') }}</button>
                        </form>
                    </a>
                </div>
        </div>
        <div class="d-flex justify-content-around p-4" style="background-color: yellow">
            <a href="/home" class="text-dark"><strong>{{ __('Home') }}</strong></a>
            <a href="/cart" class="text-dark"><strong>{{ __('Cart') }}</strong></a>
            <a href="/profile" class="text-dark"><strong>{{ __('Profile') }}</strong></a>
            @if (Auth::User()->roleID == 2)
                <a href="/accountMaintenance" class="text-dark"><Strong>{{ __('Account Maintenance') }}</Strong></a>
            @endif
        </div>
    @endif
            <div class="mt-5">
                <a href="">
                </a>
        </div>

        @yield('content')

    <footer class="footer fixed-bottom p-3 text-center mt-5" style="background-color: rgb(130, 149, 252)">
        <span><strong>&copy; {{ __('Amazing E-Book 2022') }}</strong></span>
    </footer>
</body>
</html>
