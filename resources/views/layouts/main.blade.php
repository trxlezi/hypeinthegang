<!DOCTYPE html>
<html lang = "pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE-edge">
    <meta name = "viewport" content = "width-device-width, initial-scale-1.0">

    <!-- Bootstrap, CSS e Icons -->
    <link rel = "stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel = "stylesheet" href="/css/style.css">
    <link rel = "stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    
    <!-- Google Fonts / Mudar aqui quando mudar a fonte do site -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- SWIPER JS --}}
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <title>DS e TI</title>

  </head>

  <body>
    <nav>
      <div class = "container nav_container">
        <a href = "/"><h4>ETEC</h4></a>
          <ul class = "nav_menu">
            <li><a href = "/">                 Home    </a></li>
            <li><a href = "/paginas/curso">    Curso   </a></li>
            <li><a href = "/paginas/ementa">   Ementa  </a></li>
            <li><a href = "/paginas/galeria">  Galeria </a></li>
            <li><a href =  "#">          Contato </a></li>
          </ul>
      </div> 
    </nav>

    @yield('container')
                                         
                              {{-- Footer --}}

<footer class="rodape">
  <div class="container rodape_container">
      <div class="rodape_1">
      <a href="/" class="rodape_logo"><h4>Icone</h4></a>
      <p>
        Não sei se vai ser sobre o site da escola isso aqui mas deixa assim
      </p>
  </div>

  <div class="rodape_2">
    <h4>Links das páginas</h4>
      <ul class="permalinks">
          <li><a href="/"> Home</a></li>
          <li><a href="/paginas/curso">Curso</a></li>
          <li><a href="/paginas/ementa">Ementa</a></li>
          <li><a href="/paginas/galeria">Galeria</a></li>
      </ul>
  </div>

  <div class="rodape_3">
                  <h4>Primacy</h4>
      <ul class="privacy">
          <li><a href="#">Políticas de Privacidade</a></li>
          <li><a href="#">Termos e Condições de Uso</a></li>
      </ul>
  </div>
  
  <div class="rodape_4">
              <h4>Contate-nos</h4>
    <div>
              <p>+Número da ETEC</p>
              <p>emailetec@gmai.com.br</p>
              <p>Redes Sociais</p>
    </div>

      <ul class="rodape_socials">
          <li>
              <a href="#"><i class="uil uil-instagram-alt"></i></a>
          </li>
          <li>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
          </li>
          <li>
              <a href="#"><i class="uil uil-twitter-alt"></i></a>
          </li>
    </div>

  </div>
  <div class="rodape_copyright">
    <small>Copyright &copy; João Belarmino ETEC </small>
</div>

</footer>

 {{-- Fim do Footer --}}

    <!-- Bootstrap Bundle with Popper -->
    <script src = "{{ asset('/js/popper.min.js') }}"></script>
    <script src = "{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src = "{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

    {{-- SWIPER JS --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        // quando a width da janela for >= 600px
        breakpoints: {
          600: {
            slidesPerView: 2
          }
        }
      });
    </script>
    
    {{-- JavaScript Geral --}}
    <script src = "/js/main.js"></script>
   
   
  </body>
</html>