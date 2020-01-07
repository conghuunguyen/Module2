<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')
<body>

    @include('partials.header')

    <div class="container">
        @yield('content')
    </div>
    @include('partials.js')

</body>

</html>