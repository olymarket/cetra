<!DOCTYPE html>
<html lang="en">

<head>
    @include('Components.Public.Navigations.Head')
    @include('Components.Public.Script.Style')
</head>

<body class="boxed_wrapper">
    @include('Components.Public.Navigations.Menu-2')
    @yield('content')
    @include('Components.Public.Navigations.Footer')
    @include('Components.Public.Script.Js')
</body>
</html>
