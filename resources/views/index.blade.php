<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="MGE Telecom empresa de distribuiçao de internet">
    <meta name="author" content="Vieira Gabriel">
    <meta name="keywords" content="MGE TELECOM"/>

    <link rel="alternate" href="" hreflang="pt-br" />
    <meta name="robots" content="index, follow">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:url" content="URL" />
    <meta property="og:title" content="MGE Telecom" />
    <meta property="og:image" content="img/logo-mge.png" />
    <meta property="og:description" content="MGE Telecom empresa de distribuiçao de internet" />
    <meta name="theme-color" content="#fe2813">

    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta name="format-detection" content="telephone=no">
    <!-- SEO -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>MGE Telecom</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

        <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    @include('partials.header')

    @yield('content')
    @include('partials.footer')
