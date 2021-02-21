<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @if(isset($id))
        <title>{{$id}}</title>
    @else
        <title>Trang chủ</title>
    @endif

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('third_party_stylesheets')
    @stack('page_css')
</head>
<body>
<header>
    <x-frontend-header></x-frontend-header>
</header>
<div class="wrapper">
    <div>
        <section>
            @yield('content')
        </section>
    </div>
    <!-- Main Footer -->
{{--    <footer class="main-footer">--}}

{{--    </footer>--}}
</div>

<script src="{{ asset('js/app.js') }}" defer></script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>

<style>
    body {
        min-height: 100%;
        overflow-x: initial!important;
    }
</style>
