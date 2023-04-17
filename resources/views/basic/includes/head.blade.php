@php use App\Helpers\Global_Used\Global_Used as MyGlobal; @endphp
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    {{-- New --}}
    {{-- Meta --}}

    <meta name="description"
        content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    {{-- End Meta --}}
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('dashboard/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('dashboard/assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('dashboard/assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('dashboard/assets/css/oneui.min.css') }}">
    <!-- End Fonts and OneUI framework -->

    {{-- Custom Style --}}
    <link rel="stylesheet" id="css-main" href="{{ asset('dashboard/assets/css/custom.css') }}">
    {{-- End Custom Style --}}
    {{-- Bootstrap and Jquery --}}

    {{-- End Bootstrap and Jquery --}}


    {{-- End New --}}

</head>

<body>

    {{-- Select This Or This --}}
    {{-- <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-boxed"> --}}

    {{-- <div id="page-container" class="page-header-dark main-content-boxed side-trans-enabled"> --}}

    {{-- Login and Signup Routes --}}
    <?php
    $routesPlaceOne = ['dashboard.auth.login','dashboard.auth.signup'];
    $textPlaceOne = "<div id='page-container'>";
    echo  (new MyGlobal())->put_code_html($routesPlaceOne,$textPlaceOne);
    ?>
