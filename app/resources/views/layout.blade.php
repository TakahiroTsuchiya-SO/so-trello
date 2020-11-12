<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>so-trello</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js"></script>
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
        @yield('scripts')
    </body>

</html>