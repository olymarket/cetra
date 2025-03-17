<!DOCTYPE html>
<html lang="en">

<head>
    @include('Components.Public.Navigations.Head')
    @include('Components.Admin.Script.Css')
    <style>
        .text-color-error {
            font-size: 16px;
            font-weight: 500;
            color: red;
        }

        .text-color-success {
            font-size: 16px;
            font-weight: 500;
            color: green;
        }
    </style>
</head>

<body>
    @include('Components.Admin.Navigations.Menu')
    @yield('content')
</body>
    @include('Components.Admin.Script.Js')
</html>
