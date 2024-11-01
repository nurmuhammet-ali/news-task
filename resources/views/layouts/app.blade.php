<!DOCTYPE html>
<html data-theme="emerald" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="application-name" content="{{ config('app.name') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hot News</title>

  <title>{{ config('app.name') }}</title>

  @vite(['resources/css/app.css'])
</head>

<body>
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')
</body>
</html>
