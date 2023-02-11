<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>
          <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Fonts -->
     <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

            <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
            <link href="{{ asset('frontend/css/material-dashboard.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/frontend/css/style.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/frontend/css/owl.theme.default.min.css') }}" rel="stylesheet"> -->
            <link href="{{ asset('frontend/bon/css/responsive.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/bon/css/owl.carousel.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/bon/css/font-awesome.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/bon/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/bon/style.css') }}" rel="stylesheet">
            <style>
                a{
                    /* text-decoration:none ! important; */
                }
                body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('/w3images/parallax1.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
            </style>

</head>
 <body>
           <div class="container-fluid">
                @include('layouts.inc.fontendbar')
                  <div class="container-fluid">
                  <div class="content">
                                      @yield('content')
                                </div>
                  </div>

                  @include('layouts.inc.footer')
           </div>

            </div>

     <!-- Scripts -->

     {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}

     {{-- <script src="{{ asset('frontend/frontend/js/jquery-3.6.0.min.js') }}"></script>
     <script src="{{ asset('frontend/frontend/jquery/bootstrap.min.js') }}"></script> --}}

     <script src="{{ asset('frontend/frontend/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('frontend/frontend/js/custom.js') }}"></script>

      <script src="{{ asset('frontend/bon/js/bxslider.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/jquery.easing.1.3.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/jquery.sticky.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/main.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/buttons.colVis.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/buttons.html5.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/buttons.print.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/dataTables.buttons.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/script.slider.js') }}"></script>






     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if(session('status'))
        <script>
             swal("{{ session('status') }}");
          </script>
         @endif
       @yield('scripts')
</body>
</html>
