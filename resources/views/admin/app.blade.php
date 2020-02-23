<!DOCTYPE html>
<html lang="en" class="no-ie">
<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <link rel="icon" href="{{ asset('img/logo.png') }}">
   <title>Macro Ocean | Login</title>

   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.css') }}">
  <!--Bootstrap date picker-->
   <link rel="stylesheet" href="{{ asset('css/admin/datepicker.css') }}">
   <link rel="stylesheet" href="vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/animo/animate%2banimo.css') }}">
   <!-- App CSS-->
   <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">
   <link rel="stylesheet" href="{{ asset('css/admin/common.css') }}">
   <!-- Modernizr JS Script-->
   <script src="{{ asset('vendor/modernizr/modernizr.js') }}" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="{{ asset('vendor/fastclick/fastclick.js') }}" type="application/javascript"></script>
</head>

<body>

  @yield('content')

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>


<!-- Animo-->
<script src="{{ asset('vendor/animo/animo.min.js') }}"></script>
<!-- Custom script for pages-->
<script src="{{ asset('js/admin/pages.js') }}"></script>
<!-- END Scripts-->
</body>


</html>
