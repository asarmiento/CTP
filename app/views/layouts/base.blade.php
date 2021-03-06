<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('jquery-ui/jquery-ui.css') }}
        {{ HTML::style('css/styles.css') }}
        {{ HTML::style('css/normalize.css') }}
        {{ HTML::script('js/jquery-2.1.1.min.js') }}
        {{ HTML::script('jquery-ui/jquery-ui.js') }}
        {{ HTML::script('js/bootstrap.js') }}
        @yield('head')
        @yield('styles')
    </head>
    <body> 
        @yield('content')


        @yield('scripts')
    </body>
</html>