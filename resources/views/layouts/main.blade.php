<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel + Vue</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<boddy>
    <div id="app">
        <div class="container">
            @yield('content')
        </div>
    </div>
    {{ csrf_field() }}

    {{--<script src="https://unpkg.com/vue"></script>--}}

    {{--<script src="/js/main.js"></script>--}}

    <script src="/js/app.js"></script>
</boddy>
</html>