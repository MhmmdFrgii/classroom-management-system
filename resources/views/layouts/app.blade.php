<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ADMIN - XII RPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- plugin css -->
    <link href="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.navbar')

        @include('layouts.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                @yield('content')

            </div> <!-- content -->

            @include('layouts.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- Third Party js-->
    <script src="{{ asset('assets/libs/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    {{-- toast --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/jquery-toast/jquery.toast.min.js"></script>

    <script>
        @if (session('success'))
            $.toast({
                heading: 'Sukses!',
                text: "{{ session('success') }}",
                showHideTransition: 'fade',
                position: 'top-right',
                icon: 'success',
            });
        @endif

        @if (session('danger'))
            $.toast({
                heading: 'Error!',
                text: "{{ session('danger') }}",
                showHideTransition: 'fade',
                position: 'top-right',
                icon: 'error',
                loaderBg: '#FF0000',
                bgColor: '#dc3545'
            });
        @endif

        @if (session('info'))
            $.toast({
                heading: 'Info!',
                text: "{{ session('info') }}",
                showHideTransition: 'fade',
                position: 'top-right',
                icon: 'info',
                loaderBg: '#5bc0de',
                bgColor: '#17a2b8'
            });
        @endif

        @if ($errors->any())
            $.toast({
                heading: 'Error!',
                text: "{{ $errors->first() }}",
                showHideTransition: 'fade',
                position: 'top-right',
                icon: 'error',
                loaderBg: '#FF0000',
                bgColor: '#dc3545'
            });
        @endif
    </script>


</body>

</html>
