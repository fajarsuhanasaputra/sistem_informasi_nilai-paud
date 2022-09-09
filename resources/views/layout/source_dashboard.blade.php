<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/paud/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/paud/logo.png') }}">
    <title>
        PAUD Teratai
    </title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('templates/dashboard/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('templates/dashboard/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="{{ asset('templates/dashboard/assets/css/material-dashboard.css?v=3.0.4') }}"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body class="g-sidenav-show bg-gray-100">
    @yield('content')

    <script src="{{ asset('templates/dashboard/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('templates/dashboard/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/dashboard/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('templates/dashboard/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js') }}"></script>
    <script src="{{ asset('templates/dashboard/assets/js/material-dashboard.min.js?v=3.0.4') }}"></script>
</body>

</html>