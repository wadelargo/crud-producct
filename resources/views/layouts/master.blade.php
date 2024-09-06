<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Products Crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">PRODUCTS CRUD </a>
      </div>
    </nav>

    @yield('content')

</body>
</html>
