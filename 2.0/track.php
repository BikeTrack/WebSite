<!DOCTYPE html>
<html lang="fr-FR">

<?php
    $init = false;
    if ($init == false)
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    else
        include("lang/en-US.php");//include EN in all other cases of different lang detection
    switch ($lang){

        case "fr":
            // french page
            include("lang/fr-FR.php");//include check session FR
            break;
        case "it":
            // italian page
            include("lang/it-IT.php");
            break;
        case "en":
            // english page
            include("lang/en-US.php");
            break;        
        default:
            // default page ( english )
            include("lang/en-US.php");//include EN in all other cases of different lang detection
            break;
            $init = true;
        }

//          echo $lang;

?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bike Track</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/img/favicon/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <style>

            .owl-dots{
                display: none;
            }
            body.display-n .wrapper {
                display: none;
            }
            
            body.display-n {
                display: block!important;
            }
            
            @-webkit-keyframes preload-show-1 {
                from {
                    -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-show-1 {
                from {
                    -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-hide-1 {
                to {
                    -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-hide-1 {
                to {
                    -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-cycle-1 {
                5% {
                    -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                10%,
                75% {
                    -webkit-transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                80%,
                100% {
                    -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-cycle-1 {
                5% {
                    -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                10%,
                75% {
                    -webkit-transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                80%,
                100% {
                    -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-show-2 {
                from {
                    -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-show-2 {
                from {
                    -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-hide-2 {
                to {
                    -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-hide-2 {
                to {
                    -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-cycle-2 {
                10% {
                    -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                15%,
                70% {
                    -webkit-transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                75%,
                100% {
                    -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-cycle-2 {
                10% {
                    -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                15%,
                70% {
                    -webkit-transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                75%,
                100% {
                    -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-show-3 {
                from {
                    -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-show-3 {
                from {
                    -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-hide-3 {
                to {
                    -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-hide-3 {
                to {
                    -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-cycle-3 {
                15% {
                    -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                20%,
                65% {
                    -webkit-transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                70%,
                100% {
                    -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-cycle-3 {
                15% {
                    -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                20%,
                65% {
                    -webkit-transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                70%,
                100% {
                    -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-show-4 {
                from {
                    -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-show-4 {
                from {
                    -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-hide-4 {
                to {
                    -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-hide-4 {
                to {
                    -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-cycle-4 {
                20% {
                    -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                25%,
                60% {
                    -webkit-transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                65%,
                100% {
                    -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-cycle-4 {
                20% {
                    -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                25%,
                60% {
                    -webkit-transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                65%,
                100% {
                    -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-show-5 {
                from {
                    -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-show-5 {
                from {
                    -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-hide-5 {
                to {
                    -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-hide-5 {
                to {
                    -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-cycle-5 {
                25% {
                    -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                30%,
                55% {
                    -webkit-transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                60%,
                100% {
                    -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-cycle-5 {
                25% {
                    -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                30%,
                55% {
                    -webkit-transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                60%,
                100% {
                    -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-show-6 {
                from {
                    -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-show-6 {
                from {
                    -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-hide-6 {
                to {
                    -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-hide-6 {
                to {
                    -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-cycle-6 {
                30% {
                    -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                35%,
                50% {
                    -webkit-transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                55%,
                100% {
                    -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @keyframes preload-cycle-6 {
                30% {
                    -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
                35%,
                50% {
                    -webkit-transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
                    border-left-color: #222222;
                }
                55%,
                100% {
                    -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
                    border-left-color: #585858;
                }
            }
            
            @-webkit-keyframes preload-flip {
                0% {
                    -webkit-transform: rotateY(0deg) rotateZ(-60deg);
                    transform: rotateY(0deg) rotateZ(-60deg);
                }
                100% {
                    -webkit-transform: rotateY(360deg) rotateZ(-60deg);
                    transform: rotateY(360deg) rotateZ(-60deg);
                }
            }
            
            @keyframes preload-flip {
                0% {
                    -webkit-transform: rotateY(0deg) rotateZ(-60deg);
                    transform: rotateY(0deg) rotateZ(-60deg);
                }
                100% {
                    -webkit-transform: rotateY(360deg) rotateZ(-60deg);
                    transform: rotateY(360deg) rotateZ(-60deg);
                }
            }
            
            body {
                background: #efefef;
            }
            
            .preloader {
                position: absolute;
                top: 50%;
                left: 50%;
                font-size: 20px;
                display: block;
                width: 3.75em;
                height: 4.25em;
                margin-left: -1.875em;
                margin-top: -2.125em;
                -webkit-transform-origin: center center;
                -ms-transform-origin: center center;
                transform-origin: center center;
                -webkit-transform: rotateY(180deg) rotateZ(-60deg);
                transform: rotateY(180deg) rotateZ(-60deg);
            }
            
            .preloader .slice {
                border-top: 1.125em solid transparent;
                border-right: none;
                border-bottom: 1em solid transparent;
                border-left: 1.875em solid #222222;
                position: absolute;
                top: 0px;
                left: 50%;
                -webkit-transform-origin: left bottom;
                -ms-transform-origin: left bottom;
                transform-origin: left bottom;
                border-radius: 3px 3px 0 0;
            }
            
            .preloader.loading {
                -webkit-animation: 2s preload-flip steps(2) infinite both;
                animation: 2s preload-flip steps(2) infinite both;
            }
            
            .preloader.loading .slice:nth-child(1) {
                -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0);
                transform: rotateZ(60deg) rotateY(90deg) rotateX(0);
                -webkit-animation: 2s preload-cycle-1 linear infinite both;
                animation: 2s preload-cycle-1 linear infinite both;
            }
            
            .preloader.loading .slice:nth-child(2) {
                -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0);
                transform: rotateZ(120deg) rotateY(90deg) rotateX(0);
                -webkit-animation: 2s preload-cycle-2 linear infinite both;
                animation: 2s preload-cycle-2 linear infinite both;
            }
            
            .preloader.loading .slice:nth-child(3) {
                -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0);
                transform: rotateZ(180deg) rotateY(90deg) rotateX(0);
                -webkit-animation: 2s preload-cycle-3 linear infinite both;
                animation: 2s preload-cycle-3 linear infinite both;
            }
            
            .preloader.loading .slice:nth-child(4) {
                -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0);
                transform: rotateZ(240deg) rotateY(90deg) rotateX(0);
                -webkit-animation: 2s preload-cycle-4 linear infinite both;
                animation: 2s preload-cycle-4 linear infinite both;
            }
            
            .preloader.loading .slice:nth-child(5) {
                -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0);
                transform: rotateZ(300deg) rotateY(90deg) rotateX(0);
                -webkit-animation: 2s preload-cycle-5 linear infinite both;
                animation: 2s preload-cycle-5 linear infinite both;
            }
            
            .preloader.loading .slice:nth-child(6) {
                -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0);
                transform: rotateZ(360deg) rotateY(90deg) rotateX(0);
                -webkit-animation: 2s preload-cycle-6 linear infinite both;
                animation: 2s preload-cycle-6 linear infinite both;
            }
        </style>
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link href="/css/bootstrap-v3.3.5.css" rel="stylesheet" type="text/css" title="">
        <!-- Bootstrap -->
        <link href="/css/animate-v1.0.0.css" rel="stylesheet" type="text/css" title="">
        <!-- Font Awesome -->
        <link href="/css/font-awesome-v4.4.0.css" rel="stylesheet" type="text/css" title="">
        <!-- Font Et-line -->
        <link href="/css/et-line-v1.0.0.css" rel="stylesheet" type="text/css" title="">
        <!-- Font Simple line -->
        <link href="/css/simple-line-icons-v=1.0.0.css" rel="stylesheet" type="text/css" title="">
        <!-- Font Elegant -->
        <link href="/css/elegant-font-v1.0.0.css" rel="stylesheet" type="text/css" title="">
        <!-- Owl carousel default style -->
        <link href="/css/owl.carousel-v2.0.0.css" rel="stylesheet" type="text/css" title="">
        <!-- Magnific Popup default style -->
        <link href="/css/magnific-popup-v=1.0.0.css" rel="stylesheet" type="text/css" title="">
        <!-- Main css file -->
        <link href="/css/style-v=1.0.0.css" rel="stylesheet" type="text/css" title=""> </head>

    <body class="load display-h">
        <div class="wrapper">
            <div style="display:none;" class="brand-container-top-wrapper">
                <a class="brand-container-top" href="#"> <img class="logo-img" src="/img/content/logo_2-v=1.0.0.png" alt=""> </a>
            </div>
            <div class="navigation default style-2 light navbar-fixed-top hide-on-scroll">
                <nav>
                    <button type="button" class="navbar-toggle collapsed"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="title">Menu</span> </button>
					
					<!-- BOUTONS POUR LE CHANGEMENT DES LANGUES navbar-lang -->

                    <button type="button" class="navbar-lang"> <span class="title">EN</span> </button>

                    <button type="button" class="navbar-lang"> <span class="title">FR</span> </button>

                    <button type="button" class="navbar-lang"> <span class="title">IT</span> </button>

                    <ul class="clearfix">
                    
                        <li class="active"><a href="index.php"> <?php echo TXT_MENU_HOME; ?> </a></li>
                        <li><a href="product.php"> <?php echo TXT_MENU_PROD; ?> </a></li>
                       
                    </ul>

                    <ul class="clearfix">
                    </ul>
                    <div class="brand-container-wrapper">
                        <a class="brand-container" href="index.php"> <img class="logo-img" src="/img/content/logo_2-v=1.0.0.png" alt=""> </a>
                    </div>
                </nav>
            </div>

            <header id="home">
               
             
             
            </header>
      
            
            <article id="map">
                <div class="section-header"  data-overlay-color="#191919" data-overlay-opacity="0.95">
                    <h2 class="text-uppercase"> <?php echo TXT_DEVICE; ?> </h2> </div>
               
                <div class="page-section" data-background-color="#f4f4f4">
                    <div class="container">
                        <div class="row" >
                            <div id="displayMap" style="width: 100%;min-height: 500px;margin: auto;"></div>
                        </div>
                    </div>
                </div>
            </article>

        </div>
        <div class="page-loader">
            <div class="preloader loading"> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> <span class="slice"></span> </div>
        </div>
        <footer class="site-footer display-h pos-relative">
            <div class="text-center">
        <!-- <span class="icon-wrapper fadeInUp wow">
            <a href="#" class="bw-social">
                <i class="fa fa-behance"></i>
            </a>
        </span> --><span class="icon-wrapper fadeInUp wow" data-wow-delay="0.1s">
            <a href="https://www.facebook.com/biketrack/" target="_blank" class="bw-social">
                <i class="fa fa-facebook"></i>
            </a>
        </span><!-- <span class="icon-wrapper fadeInUp wow" data-wow-delay="0.2s">
            <a href="#" class="bw-social">
                <i class="fa fa-pinterest-p"></i>
            </a>
        </span> <span class="icon-wrapper fadeInUp wow" data-wow-delay="0.3s">
            <a href="#" class="bw-social">
                <i class="fa fa-linkedin"></i>
            </a>
        </span>--> <span class="icon-wrapper fadeInUp wow" data-wow-delay="0.4s">
            <a href="https://twitter.com/biketrack_eu" class="bw-social">
                <i class="fa fa-twitter"></i>
            </a>
        </span>
         </div>
            <div class="copyright">
                <div class="company text-center text-uppercase">&copy; Bike Track 2015</div>
                <div class="text-center">Made with love in France</div>
            </div>
            <!-- .copyright -->
        </footer>
        <!-- .site-footer -->
        <!-- jQuery -->
        <script src="/js/jquery.min.js?v=1.11.2"></script>
        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
       
        <!-- Zoom library -->
        <script src="/js/jquery.elevatezoom.js?v=1.0.0"></script>
        <!-- Scroll library -->
        <script src="/js/wow.js?v=1.0.0"></script>
        <script src="/js/jquery.inview.js?v=1.0.0"></script>
        <!-- OWL Carousel library -->
        <script src="/js/owl.carousel.js?v=2.0.0"></script>
        <!-- OWL Carousel library -->
        <script src="/js/jquery.superslides.js?v=1.0.0"></script>
        <!-- Magnific Popup library -->
        <script src="/js/jquery.magnific-popup.js?v=1.0.0"></script>
        <!-- Isotope library -->
        <script src="/js/isotope.js?v=2.2.0"></script>
        <!-- SmoothScroll library -->
        <script src="/js/SmoothScroll.js?v=1.4.0"></script>
        <!-- Text rotator library -->
        <script src="/js/morphext.js?v=2.4.4"></script>
        <!-- Video bg library -->
        <script src="/js/jquery.backgroundvideo.js?v=1.0.0"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/bootstrap.js?v=3.3.5"></script>
        <!-- Main script -->
        <script src="/js/script.js?v=1.0.0"></script>
         <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="/js/ajax.js" type="text/javascript"></script>

        <script type="text/javascript" src="/js/displayDevices.js"></script>
    </body>

</html>
<!-- Localized -->
