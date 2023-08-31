<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/ok.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

</head>
<body>

   {{-- @include('layout.header') --}}
   @if(auth()->user()->is_admin == 0)
   @include('layouts.admin-navbar') <!-- Tampilan navbar untuk admin -->
   @yield('content') <!-- Tampilan konten untuk admin -->
   <section id="content">
 @else
   @include('layouts.user-navbar') <!-- Tampilan navbar untuk pengguna -->
   @yield('content') <!-- Tampilan konten untuk pengguna -->
   <section id="content">
 @endif
 
  {{-- @include('layout.header') --}}
  {{-- @include('layouts.navbar')
  @yield('content') --}}
  <section id="content">
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/data_peminjamaap.js') }}"></script> --}}
    <script src="javascript/script.js"></script>
      <!-- ApexCharts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
  
</body>
</html>




