<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ $title }}</title>
  <meta name="description" content="">
  <link rel="canonical" href="{{ url()->current() }}" />

  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('template/admin/bootstrap/css/bootstrap.min.css') }}" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="{{ asset('template/admin/css/style.css') }}" rel="stylesheet">


</head>

<body class="d-flex flex-column h-100">

  <!--header-->
  @yield('header')
  <!--/header-->

  <!--main-->
  @yield('content')
  <!--/main-->

  <!--footer-->
  @yield('footer')
  <!--/footer-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="{{ asset('template/admin/bootstrap/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('template/admin/js/custom.js') }}"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5f9d8c594b.js"></script>
  <!-- body code -->
</body>

</html>