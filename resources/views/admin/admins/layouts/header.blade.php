<meta name="description" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="http://archivehis.bums.ac.ir/new/his-main/modules/backend/admin/images/favicon.png">
<!-- Icons -->
<link rel="stylesheet" href="{{ asset('admin/vendor/fonts/boxicons.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/fonts/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/fonts/flag-icons.css') }}">
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/core.css') }}" class="template-customizer-core-css">
<link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css">
<link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/rtl.css') }}">
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/typeahead-js/typeahead.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/toastr/toastr.css') }}">
@yield('vendor-css')
<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('admin/vendor/css/pages/page-icons.css') }}">
@yield('page-css')
<!-- Helpers -->
<script src="{{ asset('admin/vendor/js/helpers.js') }}"></script>
<script src="{{ asset('admin/vendor/js/template-customizer.js') }}"></script>
<script src="{{ asset('admin/js/config.js') }}"></script>
