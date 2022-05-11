<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" >
    
    <title>DS e TI</title>

  </head>
  <body>

    <nav class="navbar navbar-dark bg-primary">
      <div class="collapse navbar-collapse">
        <div class="navbar-nav navbar-dark bg-primary">
          <a class="nav-item nav-link active" href="/">  Home </a>
          <a class="nav-item nav-link" href="/paginas/curso">  Curso</a>
          <a class="nav-item nav-link" href="/paginas/ementa">  Ementa</a>
          <a class="nav-item nav-link disabled" href="/paginas/galeria">  Galeria</a>
        </div> <!-- Navbar-nav -->
      </div> <!-- Collapse -->
    </nav> <!-- Navbar -->

    @yield('container')

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
   
  </body>
</html>