<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Upvex - Responsive Admin Dashboard Template</title>
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

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h5 class="m-0 text-white">Settings</h5>
        </div>
        <div class="slimscroll-menu">
            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-fluid">
                    <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                </div>

                <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                <p class="text-muted mb-0"><small>Product Owner</small></p>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <div class="row">
                <div class="col-6 text-center">
                    <h4 class="mb-1 mt-0">8,504</h4>
                    <p class="m-0">Balance</p>
                </div>
                <div class="col-6 text-center">
                    <h4 class="mb-1 mt-0">8,504</h4>
                    <p class="m-0">Balance</p>
                </div>
            </div>
            <hr class="mb-0" />

            <div class="p-3">
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                    <label class="custom-control-label" for="customSwitch1">Notifications</label>
                </div>
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">API Access</label>
                </div>
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                    <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                </div>
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                    <label class="custom-control-label" for="customSwitch4">Online Status</label>
                </div>
            </div>

            <!-- Timeline -->
            <hr class="mt-0" />
            <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
            <hr class="mb-0" />
            <div class="p-3">
                <div class="inbox-widget">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a>
                        </p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);"
                                class="text-dark">Stillnotdavid</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a>
                        </p>
                        <p class="inbox-item-text">Nice to meet you</p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);"
                                class="text-dark">Adhamdannaway</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end .p-3-->

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

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
