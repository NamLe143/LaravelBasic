<html>
    <head>
        <title> @yield('title')</title>
        <!-- Material Design fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" >
        
        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
        <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">
        
    </head>
    <body>
        @include('shared.navbar')
        @yield('content')

        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

        <script src="/js/ripples.min.js"></script>
        <script src="/js/material.min.js"></script>

        <script>
                $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
                });
        </script>
    </body>
</html>