<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.min.js')}}"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="/">ABCHotel - Reservation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Reservation</a>
                </li>

            </ul>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>

    </body>
</html>