<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @include('user-panel.common.style')

</head>
<body>

@include('user-panel.common.nav')

<main>
    @yield('body')
</main>
@include('user-panel.common.footer')
@include('user-panel.common.script')

</body>
</html>