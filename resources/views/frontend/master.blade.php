<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.includes.meta')
  <title>@yield('title')</title>
  @include('frontend.includes.style')
</head>

<body>
  @include('frontend.includes.header')
  @yield('content')
  <main></main>
  <footer></footer>
  @include('frontend.includes.script')
</body>
</html>
