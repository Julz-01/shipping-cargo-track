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
   <title>Macro Ocean | Administrator</title>

   @include('admin.stylesheets')
 </head>

 <body>

  @yield('content')

   @include('admin.scripts')
 </body>

 </html>
