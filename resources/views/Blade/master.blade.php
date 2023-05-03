<!DOCTYPE html>
<html lang="en">

@include('Blade.head')

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="{{  URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
    </div>

    <!--=================================
     preloader -->

@include('Blade.header')

<!--=================================
     Main content -->

    <div class="container-fluid">
        <div class="row">

        @include('Blade.main-sidebar')

        <!--=================================
           wrapper -->

            <div class="content-wrapper">

                @yield('page-header')

                @yield('content')
            <!--=================================
                 wrapper -->

                <!--=================================
                 footer -->

                @include('Blade.footer')
            </div><!-- main content wrapper end-->
        </div>
    </div>
</div>

<!--=================================
 footer -->


<!--=================================
 jquery -->

@include('Blade.script')

</body>
</html>
