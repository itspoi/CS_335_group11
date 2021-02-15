<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Superstore Delivery') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    {{-- the links for the css files --}}
    {{-- these are the links for other styles --}}
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <!--hover.css-->
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}" />

    <!--datepicker.css-->
    <link rel="stylesheet"  href="{{ asset('css/datepicker.css') }}" />

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('css/owl.theme.default.min.css') }} "/>

    <!-- range css-->
    <link rel="stylesheet" href="{{ asset ('css/jquery-ui.min.css') }}" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset ('css/bootsnav.css') }}" />

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}" />

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}" />

</head>
<body>
    @include('include.navbar')

    @yield('content')


    {{-- the scripts --}}

    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script  src="{{ asset ('js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset ('js/bootsnav.js') }}"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="{{ asset ('js/jquery.filterizr.min.js') }}"></script>

    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="{{ asset ('js/jquery-ui.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset ('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset ('js/waypoints.min.js') }}"></script>

    <!--owl.carousel.js-->
    <script  src="{{ asset ('js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset ('js/jquery.sticky.js') }}"></script>

    <!--datepicker.js-->
    <script  src="{{ asset ('js/datepicker.js') }}"></script>

    <!--Custom JS-->
    <script src="{{asset ('js/custom.js') }}"></script>

    <script type="text/javascript">
        $(function (){
            $("#date").datepicker({
                format: "yyyy-mm-dd",
                autoclose: true,
                todayHighlight: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                autoclose: true,
                changeMonth: true,
                changeYear: true,
                startDate: new Date(),
            });
        });
    </script>

    @yield('js')
</body>
</html>
