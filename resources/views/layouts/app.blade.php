<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layouts.inc.head')
</head>
<body class="hold-transition login-page" style="background-color:#73A8AE";>
@section('loginContent')
    @show

@include('layouts.inc.script')
</body>
</html>
