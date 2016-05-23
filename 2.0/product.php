<!DOCTYPE html>
<html lang="fr-FR">


<?php
	$init = false;
	if ($init == false)
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($lang){

	    case "fr":
	        // french page
	        include("./lang/fr-FR.php");//include check session FR
	        break;
	    case "it":
	        // italian page
	        include("./lang/it-IT.php");
	        break;
	    case "en":
	        // english page
	        include("./lang/en-US.php");
	        break;        
	    default:
	        // default page ( english )
	        include("./lang/en-US.php");//include EN in all other cases of different lang detection
	        break;
	        $init = true;
	    }

//	        echo $lang;

?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bike Track - Products</title>
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
                        <li><a href="track.php"> TRACKING WEB APP </a></li>
                        <li><a href="#contact"> <?php echo TXT_MENU_CONTACT; ?> </a></li>
                       


 
                    </ul>
                    <div class="brand-container-wrapper">
                        <a class="brand-container" href="#"> <img class="logo-img" src="/img/content/logo_2-v=1.0.0.png" alt=""> </a>
                    </div>
                </nav>
            </div>

            <header id="home">
                <!-- Image BG -->
                <div class="image-bg" data-background="/img/content/homeCouv.jpg" data-overlay-color="#000000" data-overlay-opacity=".8"></div>
                <!-- End Image BG -->
                <div id="slides" class="home-slider image">
                    <div class="slides-container">
                        <div class="slide">
                            <div class="content">
                                <div class="display-tc">
                                    <h1 class="white text-uppercase text-center mb-md20 mb-md40 fadeInUp wow" data-wow-delay=".55s"> <?php echo PROD_PRES; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="slides-navigation"> <a href="#" class="next"><i class="fa fa-angle-right"></i></a> <a href="#" class="prev"><i class="fa fa-angle-left"></i></a> </nav>
                </div>
                <div class="scroll-btn-wrapper">
                    <a href="#about-us" class="scroll-down scrollTo"><img class="scroll-down-img" src="/img/mouse-v=1.0.0.png" alt=""> <?php echo TXT_SCROLL; ?> </a>
                </div>
            </header>
            
            <!-- #about our product -->

            <article id="our-team">

                <div class="section-header" data-background="/img/content/section-background/contact-header.jpg?v=1.0.0" data-overlay-color="#191919" data-overlay-opacity="0.9">
                    <h2 class="text-uppercase"> <?php echo PROD_OBJ; ?> </h2> </div>
                <div class="page-section" data-background-color="#f4f4f4">

                <div class="page-section bg-section" data-background="/img/content/section-background/section-bg-10.jpg?v=1.0.0" data-overlay-color="#ffffff" data-overlay-opacity="0.9">

                    <div class="container">
                        <div class="row">
                        <div style="text-align: center;">
                <p>
                Voici nos deux objets connectés. Le fonctionnement et le but sont exactement les mêmes, tout ce qui change est leur forme.</p>
                <p>Le premier, la potence, à l'apparence est une simple piéce de vélo, mais à son interieur on trouve un gps qui vous permettra de localiser votre velo en cas de vol</p>
                <p>Le deuxiéme, le stick, comporte toujours le gps mais cette fois il pourra s'adapter à votre vehicule ( moto, voiture, vélo... ), en fonction de vos besoins.</p>

                <p>Les deux objets marchent grace à nos applications mobiles disponibles sur les 3 marchés principaux ou grace à notre application web, disponible à partir d'un navigateur internet quelconque.</p>

                <p>Une fois connecté le compte au dispositif à placer sur le vehicule, il suffira de se connecter sur notre site ou sur l'application mobile pour voir la position actuelle du vélo.</p> 
                <br><br>
                </div>

<hr color="black">

                            <!-- Connected Stem -->

                            <div class="col-sm-6">
                                <h4 class="text-uppercase title-2 mb0"> <?php echo PROD_N1; ?> </h4>
                                <h2 class="text-uppercase gray"> <?php echo PROD_SER; ?> </h2> </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="list">
                                            <h6 class="text-uppercase"> <?php echo PROD_CHAR; ?> </h6>
                                            <ul>
                                                <li> <?php echo PROD_CHAR_WEIGHT; ?> </li>
                                                <li> <?php echo PROD_CHAR_LENGHT; ?> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <img class="logo-img" src="/img/content/potence.png" alt=""> 
                        </div>

                        <div class="row">
                            <div class="col-sm-12 pt-sm100 pt-xs50 pb-sm40 pb-xs0"></div>
                            <div class="col-sm-12 text-center">
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow">
                                        <div class="icon-box"> <i class="fa fa-usd"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.1s"> <?php echo PROD_CHAR_PRICE; ?> </div>
                                </div>
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.1s">
                                        <div class="icon-box"> <i class="fa fa-bicycle"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.2s"> <?php echo PROD_CHAR_DES; ?> </div>
                                </div>
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.2s">
                                        <div class="icon-box"> <i class="fa fa-eye"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.3s"> <?php echo PROD_CHAR_DISCR; ?> </div>
                                </div>
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.3s">
                                        <div class="icon-box"> <i class="et-icon-gears"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.4s"> <?php echo PROD_CHAR_EASY; ?> </div>
                                </div>
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.3s">
                                    <div class="icon-box"> <i class="fa fa-life-ring"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.4s"> <?php echo PROD_CHAR_SUPP; ?> </div>
                                </div>

                            </div>
                        </div>
                        <br><br>
                        <hr color="black">
                        <br><br>

            <!-- Stick GPS -->

                            <div class="col-sm-6">
                                <h4 class="text-uppercase title-2 mb0"> <?php echo PROD_N2; ?> </h4>
                                <h2 class="text-uppercase gray"> <?php echo PROD_SER1; ?> </h2> </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="list">
                                            <h6 class="text-uppercase"> <?php echo PROD_CHAR1; ?> </h6>
                                            <ul>
                                                <li> <?php echo PROD_CHAR_WEIGHT1; ?> </li>
                                                <li> <?php echo PROD_CHAR_LENGHT1; ?> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="text-align: center;">
                            <img class="logo-img" src="/img/content/stick_720.png" alt=""> 
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pt-sm100 pt-xs50 pb-sm40 pb-xs0"></div>
                            <div class="col-sm-12 text-center">
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow">
                                        <div class="icon-box"> <i class="fa fa-usd"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.1s"> <?php echo PROD_CHAR_PRICE1; ?> </div>
                                </div>
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.1s">
                                        <div class="icon-box"> <i class="fa fa-bicycle"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.2s"> <?php echo PROD_CHAR_DES1; ?> </div>
                                </div>
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.3s">
                                        <div class="icon-box"> <i class="et-icon-gears"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.4s"> <?php echo PROD_CHAR_EASY1; ?> </div>
                                </div>
                                <div class="service">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.3s">
                                    <div class="icon-box"> <i class="fa fa-life-ring"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.4s"> <?php echo PROD_CHAR_SUPP1; ?> </div>
                                </div>
                            </div>
                        </div>

                        <br><br><br><br>

                    <!-- MOBILE APPS -->

                        <h4 class="text-uppercase" style="text-align: center;"> <?php echo PROD_APP; ?> </h4>
                        <div style="text-align: center;">
                            <img class="logo-img" src="/img/content/storeFinal.png" alt=""> 
                        </div>
                    </div>
                </div>


            </article>

                <!-- .page-section-->
            </div>

            <article id="contact">
                <div class="section-header" data-background="/img/content/section-background/contact-header.jpg?v=1.0.0" data-overlay-color="#191919" data-overlay-opacity="0.9">
                    <h2 class="text-uppercase"> <?php echo TXT_CONTACT; ?> </h2> </div>
                <div class="page-section" data-background-color="#f4f4f4">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="text-center text-uppercase mb83" <?php echo TXT_JOIN; ?> </h2> </div>
                            <div class="col-sm-12 text-center">
                                
                                <!-- .contact-item -->
                                <div class="contact-item">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.2s">
                                        <div class="icon-box"> <i class="fa fa-map-marker"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.3s"> <?php echo TXT_COFFEE; ?> </div>
                                    <div class="desc fadeInUp wow" data-wow-delay="0.4s">5 rue du Palais Rihour, 59800 Lille</div>
                                </div>
                                <!-- .contact-item -->
                                <div class="contact-item">
                                    <div class="icon-wrapper fadeInUp wow" data-wow-delay="0.3s">
                                        <div class="icon-box"> <i class="fa fa-envelope"></i> </div>
                                    </div>
                                    <div class="title fadeInUp wow" data-wow-delay="0.4s"> <?php echo TXT_HELLO; ?> </div>
                                    <div class="desc fadeInUp wow" data-wow-delay="0.5s"><a href="contact@biketrack.eu">contact@biketrack.eu</a></div>
                                </div>
                                <!-- .contact-item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .page-section -->
            </article>
            <!-- #contact -->
            <article>
                <div class="page-section map-section" data-background-color="#ffffff">
                    <div class="map-content"></div>

                    <div class="container">
                        <div class="col-sm-12">
                            <h2 class="text-center text-uppercase mb27 mt-xs60 mt-sm20"> 
                            <?php echo TXT_INFO; ?> <br/>
                             </h2> </div>
                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                            <form id="contact-form" class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input name="name" class="form-control" id="exampleInputEmail1" placeholder="Name *"> </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email *"> </div>
                                    <div class="form-group hidden-xs">
                                        <p class="help-block"> <?php echo TXT_REQUIRED; ?> </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <textarea name="msg" class="form-control" placeholder="<?php echo TXT_MSG; ?>"></textarea>
                                    </div>
                                    <input type="submit" value="<?php echo TXT_SEND; ?>" class="btn btn-primary pull-right"> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .page-section -->
            </article>
            <!-- #form -->
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
        <!-- Map library -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&ver=v=3.exp&signed_in=true"></script>
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
    </body>

</html>
<!-- Localized -->
