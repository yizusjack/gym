<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$title ?? 'Gymicetics'}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
  

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->

    

    <!-- Page Heading -->

        <header id="header" class="header fixed-top align-items-center bg-white shadow">
          <div class="d-flex">
            <div class="d-flex align-items-center justify-content-between">
              <a href="{{route('gimnasta.index')}}" class="logo d-flex align-items-center">
                <img src="{{asset('assets/img/logo.jpg')}}" alt="Gymicetics logo">
                <span class="d-none d-lg-block">Gymicetics</span>
              </a>
              <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->
         </div>

              <nav class="ms-auto fixed-top d-table">
                @livewire('navigation-menu')
              </nav><!-- End Icons Navigation -->
              <!--</header>--><!-- End Header -->
        </header>


  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('news.index')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Noticias</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Gimnastas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            @foreach ($gimn as $gim)
               <li>
                   <a href="{{route('gimnasta.show', $gim->id)}}">
                       <i class="bi bi-circle"></i><span>{{$gim->nombre_g}} {{$gim->apellido_g}}</span>
                   </a>
               </li>
               @endforeach
           </ul>
      </li><!-- End Components Nav -->

      @if (Auth::user()->is_admin==true)  {{--Solo los admins tienen acceso--}}
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('gimnasta.create')}}">
            <i class="bi bi-person-plus-fill"></i>
            <span>Agregar gimnasta</span>
          </a>
        </li>
      @endif
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('competencia.index')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Competencias</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('equipo.index')}}">
          <i class="ri-team-fill"></i>
          <span>Equipos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('score.index')}}">
          <i class="bx bx-list-check"></i>
          <span>Puntuaciones</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('forum.index')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Foros</span>
        </a>
      </li>

      @if (Auth::user()->is_admin==true)  {{--Solo los admins tienen acceso--}}
        <li class="nav-item"> 
          <a class="nav-link collapsed" href="{{route('picture.index')}}">
            <i class="ri-image-edit-fill"></i>
            <span>Gestionar imágenes</span>
          </a>
        </li>
      @endif


      <li class="nav-heading">Redes</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="https://instagram.com/gymicetics?igshid=YmMyMTA2M2Y=" target="_blank">
          <i class="bi bi-instagram"></i>
          <span>Instagram</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="https://www.youtube.com/@gymicetics8841" target="_blank">
          <i class="bi bi-youtube"></i>
          <span>Youtube</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="https://open.spotify.com/show/4hNl3wukCJzbzT3y2I6rPm" target="_blank">
          <i class="bi bi-spotify"></i>
          <span>Spotify</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="mailto: gymicetics@gmail.com">
          <i class="ri ri-mail-line"></i>
          <span>Correo</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="https://twitter.com/home?lang=es" target="_blank">
          <i class="bi bi-twitter"></i>
          <span>Twitter</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
  

  <main id="main" class="main">
    <!--<div class="bg-white shadow fixed-top header-nav">
      livewire
    </div>-->
    {{$slot}}

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  @yield('js')

  @stack('modals')

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
  @livewireScripts

</body>

</html>