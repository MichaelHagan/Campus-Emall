<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 3.1
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">

    <title>ToBI online | @yield('title')</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png') }}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ asset('admin/images/favicon/mstile-144x144.png') }}">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}


    <!-- CORE CSS-->
   @include('admin.partials.styles.mainstyles')

</head>

<body>
    <!-- Start Page Loading -->
    {{-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> --}}
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    @include('admin.partials.nav._header')
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            @include('admin.partials.nav._sideBarLeft')

            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            @include('admin.partials.notifications._errors')
            @include('admin.partials.notifications._success')
            <!-- START CONTENT -->
            <section id="content">
                @yield('content')
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            {{--@include('admin.partials.nav._sidebarRight')--}}
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    {{--@include('admin.partials.nav._footer')--}}
    <!-- END FOOTER -->




<!-- ================================================
Scripts
================================================ -->
@include('admin.partials.scripts.mainscripts')
@yield('scripts')
    <script type="text/javascript">
        function logoutDialog() {
            swal({    title: "Logout",
                    text: "Are you sure you want to logout?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Logout",
                    closeOnConfirm: false },
                function(){
                    document.getElementById('logout-form').submit();
                });

        }
    </script>
</body>

</html>
