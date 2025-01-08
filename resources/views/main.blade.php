<!DOCTYPE html>
<html lang="en">
<!-- Head -->
@include('partials.head')
<body>
<!-- Mobil Menuu -->
{{--@include('partials.mobile')--}}
<!-- Navbar -->
{{--@include('partials.navbar')--}}
<!-- Header -->
@include('partials.header')
<!-- Loader -->
<!-- body -->
@yield('content')<!-- Footer -->

@include('partials.footer')
<!-- Js -->
@include('partials.js')
</body>

</html>
