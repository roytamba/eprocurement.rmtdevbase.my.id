<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | RMTDEVBASE - eProcurement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

    <!-- Daterangepicker css -->
    <link href="{{ asset('admin/vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css">

    <!-- Vector Map css -->
    <link href="{{ asset('admin/vendor/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/js/hyper-config.js') }}"></script>

    <!-- Vendor css -->
    <link href="{{ asset('admin/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('admin/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.2.0/css/line.min.css" rel="stylesheet">

    {{-- Custom --}}
    @yield('custom-styles')

</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        @include('dashboard.components.topbar.topbar')
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('dashboard.components.leftSidebar')
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content Here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    {{-- Breadcrumb --}}
                    @include('dashboard.components.breadcrumb')

                    @yield('content')

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('dashboard.components.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    @include('dashboard.components.themeSettings')

    <!-- Vendor js -->
    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('admin/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Apex Charts js -->
    <script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector Map Js -->
    <script src="{{ asset('admin/vendor/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('admin/vendor/jsvectormap/maps/world.js') }}"></script>

    <!-- Dashboard App js -->
    <script src="{{ asset('admin/js/pages/demo.dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/js/app.min.js') }}"></script>
    @yield('custom-scripts')

</body>

</html>
