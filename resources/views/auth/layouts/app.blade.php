<!DOCTYPE html>
<html class="loading dark-layout" lang="fa"  data-assets-path="{{ asset('admin/').'/' }}" data-textdirection="rtl" dir="rtl">
<!-- BEGIN: Head-->

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>@yield('title')</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/img/favicon/favicon.png') }}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/flag-icons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/core.css') }}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/rtl.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/typeahead-js/typeahead.css') }}">
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/bs-stepper/bs-stepper.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">

    <!-- Page CSS -->

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/css/pages/page-auth.css') }}">
    <!-- Helpers -->
    <script src="{{ asset('admin/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('admin/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->
  @yield('content')

    <script>
        // Check selected custom option
        window.Helpers.initCustomOptionCheck();
    </script>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('admin/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ asset('admin/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('admin/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/select2/i18n/fa.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin/js/pages-auth-multisteps.js') }}"></script>
</body>

</html>
