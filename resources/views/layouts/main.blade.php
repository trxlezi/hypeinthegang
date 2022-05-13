<!DOCTYPE html>
<html lang = "pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE-edge">
    <meta name = "viewport" content = "width-device-width, initial-scale-1.0">

    <!-- Bootstrap CSS -->
    <link rel = "stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel = "stylesheet" href="/css/style.css">
    
    <!-- Google Fonts / Mudar aqui quando mudar a fonte do site -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">

    <title>DS e TI</title>

  </head>
  <body>

    <nav>
      <div class = "container nav_container">
        <a href = "main.blade.php">ETEC</a>
          <ul class = "nav_menu">
            <li><a href = "/">                 Home    </a></li>
            <li><a href = "/paginas/curso">    Curso   </a></li>
            <li><a href = "/paginas/ementa">   Ementa  </a></li>
            <li><a href = "/paginas/galeria">  Galeria </a></li>
          </ul>
      </div> 
    </nav>

    @yield('container')

    <!-- Bootstrap Bundle with Popper -->
    <script src = "{{ asset('/js/popper.min.js') }}"></script>
    <script src = "{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src = "{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
   
   
  </body>
</html>