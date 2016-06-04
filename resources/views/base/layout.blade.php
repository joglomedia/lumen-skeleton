<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>{{ $title or 'Home' }} | {{ $org or 'Nick Palomino' }}</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Loading Bootstrap -->
    <link href="{{ $app or '' }}/packages/flat-ui/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{ $app or '' }}/packages/flat-ui/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ $app }}/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @include("base.nav")
    <div class="container">
        @yield("content")
    </div>
    <!-- /.container -->
    <!-- Load JS here for greater good =============================-->
    <script src="{{ $app or '' }}/packages/flat-ui/dist/js/vendor/jquery.min.js"></script>
    <script src="{{ $app or '' }}/packages/flat-ui/dist/js/vendor/video.js"></script>
    <script src="{{ $app or '' }}/packages/flat-ui/dist/js/flat-ui.min.js"></script>
    <script src="{{ $app or '' }}/packages/vue/dist/vue.min.js"></script>

    @yield("scripts")
  </body>
</html>