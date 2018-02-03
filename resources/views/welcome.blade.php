<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <ul class="nav nav-tabs">
                <li><router-link to="/">首页</router-link></li>
                <li><router-link to="/ceshi">测试</router-link></li>
            </ul>
            <router-view></router-view>
        </div>
    </body>
    <script src="/js/app.js"></script>
</html>