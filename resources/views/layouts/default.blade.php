<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <title>Maze Generator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Maze Generator">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('includes.style')
</head>

<body>
    <div id="right-panel" class="right-panel">
        <div class="content">
            @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>

    @include('includes.script')

    <footer>
        <strong>Developed by <a href="https://github.com/cahyaap/" target="_blank">Cahya Aji Permana</a></strong>
    </footer>
</body>
</html>
