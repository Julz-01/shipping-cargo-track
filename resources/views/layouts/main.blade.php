<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Macro Ocean Philippines Inc.</title>
  <link rel="icon" href="{{ asset('img/logo.png') }}">

  <meta name="author" content="Nile-Theme">
  <meta name="robots" content="index follow">
  <meta name="googlebot" content="index follow">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, modern, shipment, transport, transportation, truck, trucking">
  <meta name="description" content="Transportation and Logistics Responsive HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">

  @include('layouts.stylesheets')
</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="430361554436202">
</div>
  @yield('content')

  @include ('layouts.scripts')
</body>

</html>
