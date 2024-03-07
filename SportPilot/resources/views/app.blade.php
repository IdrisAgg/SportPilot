<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

    <script src="/jquery.min.js"></script>
    <script src="/popper.min.js"></script>
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</head>
<body>
@include('layout.navbar')
<main class="">@yield('content')</main>
@include('layout.footer')

