<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>mdos4 Interview</title>

    @include('partials.links')
    @yield('links')
  </head>

  <body>

    <div class="container">

      <!-- Navbar-->
      @include('partials.navbar')  
      
      <!-- Field for content-->
      @yield('content')
      
      <!-- Site footer -->
      @include('partials.footer')  

    </div>

    @include('partials.scripts')
    @yield('scripts')
  </body>
</html>