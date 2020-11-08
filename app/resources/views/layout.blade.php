<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>so-trello</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
        @yield('styles')
        @if(app('env') == 'production')
            <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet">
        @else
            <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        @endif
    </head>
    <body>
        <header>
            <nav class="navbar">
            <a class="navbar-brand" href="/">ToDo App</a>

            </nav>
        </header>
        <div id= "wrapper" class="pt-4">
        <main>
            @yield('content')
        </main>
        </div>
        <footer>
        <div class="container">
            <p class="text-muted">so-trello</p>
        </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
        @yield('scripts')
    </body>

</html>