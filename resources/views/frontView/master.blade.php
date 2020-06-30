<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ninestars Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

    @include('frontview.css')
</head>

<body>

    @include('frontview.header')
    

    @yield('frontview.home')

    @yield('frontview.about')

    @yield('frontview.service')

    @yield('frontview.portfolio')

    

    @yield('frontview.team')


    @yield('frontview.contact')

    @include('frontview.footer')
  
</body>

</html>