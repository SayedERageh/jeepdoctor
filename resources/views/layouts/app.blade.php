<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>

    @include('includes.spinner')

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    @include('includes.scripts')

</body>
</html>