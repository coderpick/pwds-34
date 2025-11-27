<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.backend.partials.head')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('layouts.backend.partials.header')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('layouts.backend.partials.sidebar')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->
            @include('layouts.backend.partials.footer')
        </div>
    </div>

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    @include('layouts.backend.partials._script')
</body>

</html>
