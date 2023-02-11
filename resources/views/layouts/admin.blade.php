<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet"
            type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

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

             <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/css/material-dashboard.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
             <link href="{{ asset('frontend/css/css.css') }}" rel="stylesheet">
             <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
             <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">



</head>
 <body>
            <div class="container-fluid">
            <div class="row">
               @include('layouts.inc.fontendbar')
                <div class="col-3"> @include('layouts.inc.sidebar')</div>
                <div class="col-9">
                <div class="content">
                              @yield('content')
                        </div>
                </div>
                @include('layouts.inc.footer')
              </div>
            </div>

              <div class="wrapper">

                  <div class="main-panel">



                  </div>
              </div>

<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Required datatable js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>


      <script>
    // <script type="text/javascript" src="assets/libs/DataTables/js/datatables.min.js"></script>
    // <script type="text/javascript" src="assets/libs/DataTables/js/jquery.dataTables.min.js"></script>
    // <script type="text/javascript" src="assets/libs/DataTables/js/dataTables.bootstrap5.min.js"></script>
    // <script type="text/javascript" src="assets/libs/DataTables/js/dataTables.buttons.min.js"></script>
    // <script type="text/javascript" src="assets/libs/DataTables/js/buttons.bootstrap5.min.js"></script>
    // <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    // <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    // <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    // <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    // <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    // <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

      </script>
     <!-- Scripts -->
     {{-- <script src="{{ asset('frontend/bon/js/buttons.colVis.min.js') }}"></script>
     <script src="{{ asset('frontend/bon/js/jquery-3.5.1.js') }}"></script>
     <script src="{{ asset('frontend/bon/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/buttons.html5.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/buttons.print.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/dataTables.buttons.min.js') }}"></script>
      <script src="{{ asset('frontend/bon/js/script.slider.js') }}"></script> --}}
     {{-- <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
     <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('frontend/js/perfect-scrollbar.min.js') }}"></script>
     <script src="{{ asset('frontend/js/smooth-scrollbar.min.js') }}"></script>
     <script src="{{ asset('frontend/js/chartjs.min.js') }}"></script>
     <script src="{{ asset('frontend/js/js.js') }}"></script>
     <script src="{{ asset('frontend/js/dataTables.bootstrap5.min.js') }}"></script>
     <script src="{{ asset('frontend/js/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('frontend/js/jquery.js') }}"></script>
     <script src="{{ asset('frontend/js/database.js') }}"></script> --}}
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if(session('status'))
        <script>
           swal("{{ session('status') }}");
          </script>
         @endif
       @yield('scripts')
</body>
</html>
