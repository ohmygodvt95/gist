<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
              name='viewport'/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', config('app.name', 'Laravel'))</title>
        <!-- Styles -->
        @mix('css/app.css')
        <link rel="stylesheet" href="http://esironal.github.io/cmtouch/lib/codemirror.css">
        <link rel="stylesheet" href="http://esironal.github.io/cmtouch/addon/hint/show-hint.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/theme/monokai.min.css">
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/default.min.css">
        @yield('styles')
    </head>
    <body>
        @include('layout.header')
        <div class="container-fluid">
            @yield('body')
        </div>
        <script src="http://esironal.github.io/cmtouch/lib/codemirror.js"></script>
        <script src="http://esironal.github.io/cmtouch/addon/hint/show-hint.js"></script>
        <script src="http://esironal.github.io/cmtouch/addon/hint/xml-hint.js"></script>
        <script src="http://esironal.github.io/cmtouch/addon/hint/html-hint.js"></script>
        <script src="http://esironal.github.io/cmtouch/mode/xml/xml.js"></script>
        <script src="http://esironal.github.io/cmtouch/mode/javascript/javascript.js"></script>
        <script src="http://esironal.github.io/cmtouch/mode/css/css.js"></script>
        <script src="http://esironal.github.io/cmtouch/mode/htmlmixed/htmlmixed.js"></script>
        <script src="http://esironal.github.io/cmtouch/addon/selection/active-line.js"></script>
        <script src="http://esironal.github.io/cmtouch/addon/edit/matchbrackets.js"></script>
        <script src="https://codemirror.net/mode/ruby/ruby.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
        @mix('js/app.js')
        @yield('scripts')
    </body>
</html>
