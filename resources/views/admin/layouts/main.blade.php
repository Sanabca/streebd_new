@include('admin.layouts.header')
@stack('css')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               @include('admin.layouts.navbar')

              @yield('content')

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           @include('admin.layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form class="dropdown-item" method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button class="border border-0 bg-none">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   @include('admin.layouts.footer_script')
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
   <script>
    var APP_URL="{{url('/')}}";
    </script>
    <script src="{{ url('admin-assets/custom-js/common.js') }}"></script>

    @stack('js')
   
</body>

</html>