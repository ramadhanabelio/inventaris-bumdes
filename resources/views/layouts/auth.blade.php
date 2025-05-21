<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUMDes Sumber Rezeki - Desa Bantan Sari</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Lato:300,400,700,900"]
            },
            custom: {
                families: [
                    "Flaticon",
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/atlantis.min.css') }}" />
</head>

<body>
    @yield('content')

    <!-- Core JS Files -->
    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>
    <!-- jQuery Sparkline -->
    <script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Chart Circle -->
    <script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>
    <!-- jQuery Vector Maps -->
    <script src="{{ asset('js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <!-- Atlantis JS -->
    <script src="{{ asset('js/atlantis.min.js') }}"></script>
</body>

</html>
