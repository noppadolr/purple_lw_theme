<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>
        @if (View::hasSection('title'))
            @yield('title')
        @elseif (isset($title))
            {{ $title }}
        @else
            Page Title
        @endif
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('sweetalert2/sweetalert2.min.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Menu ========== -->
        @include('layouts.admin.body.sidebar')

        <!-- ========== Left menu End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            @include('layouts.admin.body.header')

            <!-- ========== Topbar End ========== -->

            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content') @if( isset($slot) ) {{ $slot }} @endif

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('layouts.admin.body.footer')

            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <!-- Vendor js -->
    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('admin/assets/js/pages/dashboard-1.init.js') }}"></script>

    <script src="{{asset('sweetalert2/sweetalert2.all.min.js')}}"></script>

</body>

</html>
