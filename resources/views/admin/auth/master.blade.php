@php
  $admin= LaravelLocalization::getCurrentLocale() =='ar' ? 'admin-assets-rtl' : 'admin-assets';
@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title> {{ __('keywords.dashboard') }} - @yield('web-log')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset($admin)}}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset($admin)}}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset($admin)}}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset($admin)}}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{asset($admin)}}/css/app-dark.css" id="darkTheme" disabled>
  </head>
  <body class="light @if(LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        @yield('form');
      </div>
    </div>
    <script src="{{asset('admin-assets')}}/js/jquery.min.js"></script>
    <script src="{{asset('admin-assets')}}/js/popper.min.js"></script>
    <script src="{{asset('admin-assets')}}/js/moment.min.js"></script>
    <script src="{{asset('admin-assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('admin-assets')}}/js/simplebar.min.js"></script>
    <script src='{{asset('admin-assets')}}/js/daterangepicker.js'></script>
    <script src='{{asset('admin-assets')}}/js/jquery.stickOnScroll.js'></script>
    <script src="{{asset('admin-assets')}}/js/tinycolor-min.js"></script>
    <script src="{{asset('admin-assets')}}/js/config.js"></script>
    <script src="{{asset('admin-assets')}}/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('{{asset('admin-assets')}}/js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>