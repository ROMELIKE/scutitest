<!DOCTYPE HTML>
<html>
<head>
    @include('user.block.head')
</head>
<body>
@include('user.block.header')

@include('user.block.message')
@yield('content')

@include('user.block.footer')
</body>
</html>