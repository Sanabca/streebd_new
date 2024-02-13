<!DOCTYPE html>
@include('website.layouts.header')

@stack('css')
<body>
    <!-- Layout wrapper -->
    <div>
        @yield('content')
    </div>
    <!-- / Layout wrapper -->

    @include('website.layouts.footer')

</body>

</html>
