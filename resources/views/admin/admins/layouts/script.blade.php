    <!-- Core JS -->
    <!-- build:js admin/vendor/js/core.js -->
    <script src="{{ asset('admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('admin/vendor/js/menu.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/loder/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/loder/vendorscripts.bundle.js') }}"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/toastr/toastr.js') }}"></script>
    @yield('vendor-js')
    <!-- Main JS -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <!-- Page JS -->
    @yield('page-js')
