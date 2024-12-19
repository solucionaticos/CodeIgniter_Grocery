<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dostart - Startup Landing Page">

    <!-- ========== Page Title ========== -->
    <title>{head_title}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{path_template_front}assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{path_template_front}assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{path_template_front}assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{path_template_front}assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="{path_template_front}assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="{path_template_front}assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{path_template_front}assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{path_template_front}assets/css/animate.css" rel="stylesheet" />
    <link href="{path_template_front}assets/css/bootsnav.css" rel="stylesheet" />
    <link href="{path_template_front}style.css" rel="stylesheet">
    <link href="{path_template_front}assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{path_template_front}assets/js/html5/html5shiv.min.js"></script>
      <script src="{path_template_front}assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav button theme">
                    <ul>
                        <li>
                            <a href="#">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{path_template_front}assets/img/logo.png" class="logo logo-display" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown dropdown-right">
                            <a href="#home" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                                <li><a href="index-3.html">Home Version Three</a></li>
                                <li><a href="index-4.html">Home Version Four</a></li>
                                <li><a href="index-5.html">Home Version Five</a></li>
                                <li><a href="index-6.html">Home Version Six</a></li>
                                <li><a href="index-7.html">Home Version Seven <span class="badge">New</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#about">About</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#overview">Overview</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#pricing">Pricing</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#team">Team</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#contact">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-small content-double shadow dark text-light bg-fixed" style="background-image: url({path_template_front}assets/img/2440x1578.png);">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="double-items">
                            <!-- Banner Left Content -->
                            <div class="info col-md-6">
                                <div class="content">
                                    <h1>It's time to create your own business scheme</h1>
                                    <p>
                                        Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable.
                                    </p>
                                    <a href="#" class="btn circle btn-light effect btn-md">Get Started</a>
                                </div>
                            </div>
                            <!-- End Banner Left Content -->

                            <!-- Start Banner Form -->
                            <div class="form col-md-5 shadow-light col-md-offset-1">
                                <div class="form-info">
                                    <h2>Sign up today and receive <span>30 days</span> FREE trial.</h2>
                                    <form action="#">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Name*" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Email*" type="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Password*" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <button type="submit">
                                                    Register for free
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Banner Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <div id="about" class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="{path_template_front}assets/img/700x800.png" alt="Thumb">
                </div>
                <div class="col-md-7 default info">
                    <h4>Why Chose Us</h4>
                    <h2>Designed for startups <br>with expert developer</h2>
                    <p>
                        Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. 
                    </p>
                    <ul>
                        <li>
                            <h5>Rocket Fast</h5>
                            <span>Elderly is detract tedious assured private</span>
                        </li>
                        <li>
                            <h5>Custom Framework</h5>
                            <span>Do travelling companions contrasted</span>
                        </li>
                        <li>
                            <h5>Minimal Design</h5>
                            <span>Mistress strongly remember up</span>
                        </li>
                    </ul>
                    <a href="#" class="btn circle btn-theme effect btn-md">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start We Offer 
    ============================================= -->
    <div class="we-offer-area text-center bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>What we <span>Offer</span></h2>
                        <h4>Understanding the easy to use process</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="our-offer-items less-carousel">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-sketch"></i>
                            <h4>Project creation</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-cloud-computing"></i>
                            <h4>Software Development</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-collaboration"></i>
                            <h4>Porject Management</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-speedometer"></i>
                            <h4>Porject Impliment</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-refresh"></i>
                            <h4>Software Update</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-conversation"></i>
                            <h4>24/7 Support</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End We Offer -->

    <!-- Start Features 
    ============================================= -->
    <div id="features" class="features-area cell-items default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Our <span>Features</span></h2>
                        <h4>Checkout our leatest features</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features-items reversed icon-solid less-icon">
                    <div class="col-md-7 info-box">
                        <div class="items-box inc-cell">
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-television"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Monitoring</h4>
                                        <p>
                                            Esteem garden men yet shy course. Consulted up my tolerably
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-customer-service"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Support Chat</h4>
                                        <p>
                                            Affronting everything discretion men now own did. Still round
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-analysis"></i>
                                    </div>
                                    <div class="info">
                                        <h4>System Analysis</h4>
                                        <p>
                                            Delighted prevailed supported remainder perpetual who
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-speedometer"></i>
                                    </div>
                                    <div class="info">
                                        <h4>First Run</h4>
                                        <p>
                                            Delighted prevailed supported remainder perpetual who
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 thumb">
                        <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Success Stories 
    ============================================= -->
    <div class="success-stories-area bg-gray">
        <div class="container-full">
            <div class="row">
                <div class="item-flex">
                    <div class="col-md-6 thumb bg-cover" style="background-image: url({path_template_front}assets/img/1500x700.png);"></div>
                    <div class="col-md-6 info">
                        <div class="heading">
                            <h4>successful stories</h4>
                        </div>
                        <div class="stories-carusel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <h2>Square new horses and put better and Sincerity collected</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam est at dolor ad reprehenderit nam sequi. Mollitia ipsa nostrum laboriosam possimus, aperiam quis rem minus eos, eaque debitis necessitatibus provident!
                                </p>
                                <a href="#" class="btn btn-theme effect btn-sm">Know More</a>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <h2>Front no party young abode state up Saved he do fruit woody</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam est at dolor ad reprehenderit nam sequi. Mollitia ipsa nostrum laboriosam possimus, aperiam quis rem minus eos, eaque debitis necessitatibus provident!
                                </p>
                                <a href="#" class="btn btn-theme effect btn-sm">Know More</a>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <h2>Distrusts procuring be oh frankness existence believing instantly</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam est at dolor ad reprehenderit nam sequi. Mollitia ipsa nostrum laboriosam possimus, aperiam quis rem minus eos, eaque debitis necessitatibus provident!
                                </p>
                                <a href="#" class="btn btn-theme effect btn-sm">Know More</a>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Success Stories -->

    <!-- Start Overview 
    ============================================= -->
    <div id="overview" class="work-list-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>How <span>we work</span></h2>
                        <h4>Checkout Our amazing working Process</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 overview-items solid-items">
                    <!-- Start Tab Content -->
                    <div class="row">

                        <!-- Start Single Item -->
                        <div class="single-item">
                            <div class="col-md-6 thumb">
                                <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-6 info">
                                <h3>Engineered and Optimization by conveying. Him plate you allow built grave.</h3>
                                <p>
                                    Consulted or acuteness dejection an smallness if. Outward general passage another as it. Very his are come man walk one next. partiality
                                </p>
                                <p>
                                    Celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if.
                                </p>
                                <ul>
                                    <li> 
                                        <h4>Amazingly Simple Use</h4> 
                                        Certainty arranging am smallness by conveying
                                    </li>
                                    <li>
                                        <h4>Clear Documentation</h4>
                                        Frankness pronounce daughters remainder extensive
                                    </li>
                                    <li>
                                        <h4>Flexible user interface</h4>
                                        Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Start Single Item -->
                        <div class="single-item reverse">
                            <div class="col-md-6 thumb">
                                <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-6 info">
                                <h3>Engineered and Optimization by conveying. Him plate you allow built grave.</h3>
                                <p>
                                    Consulted or acuteness dejection an smallness if. Outward general passage another as it. Very his are come man walk one next. partiality
                                </p>
                                <p>
                                    Celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if.
                                </p>
                                <ul>
                                    <li> 
                                        <h4>Amazingly Simple Use</h4> 
                                        Certainty arranging am smallness by conveying
                                    </li>
                                    <li>
                                        <h4>Clear Documentation</h4>
                                        Frankness pronounce daughters remainder extensive
                                    </li>
                                    <li>
                                        <h4>Flexible user interface</h4>
                                        Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Start Single Item -->
                        <div class="single-item">
                            <div class="col-md-6 thumb">
                                <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-6 info">
                                <h3>Engineered and Optimization by conveying. Him plate you allow built grave.</h3>
                                <p>
                                    Consulted or acuteness dejection an smallness if. Outward general passage another as it. Very his are come man walk one next. partiality
                                </p>
                                <p>
                                    Celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if.
                                </p>
                                <ul>
                                    <li> 
                                        <h4>Amazingly Simple Use</h4> 
                                        Certainty arranging am smallness by conveying
                                    </li>
                                    <li>
                                        <h4>Clear Documentation</h4>
                                        Frankness pronounce daughters remainder extensive
                                    </li>
                                    <li>
                                        <h4>Flexible user interface</h4>
                                        Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

    <!-- Start Pricing Area
    ============================================= -->
    <div id="pricing" class="pricing-area bg-gray default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Pricing <span>Plan</span></h2>
                        <h4>List of our pricing packages</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pricing pricing-simple text-center">
                    <div class="col-md-4">
                        <div class="pricing-item">
                            <ul>
                                <li class="icon">
                                    <i class="flaticon-start"></i>
                                </li>
                                <li class="pricing-header">
                                    <h4>Trial Version</h4>
                                    <h2>Free</h2>
                                </li>
                                <li>Demo file <span data-toggle="tooltip" data-placement="top" title="Available on pro version"><i class="fas fa-info-circle"></i></span></li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support <span data-toggle="tooltip" data-placement="top" title="Available on pro version"><i class="fas fa-info-circle"></i></span></li>
                                <li>2 database</li>
                                <li>Documetation <span data-toggle="tooltip" data-placement="top" title="Available on pro version"><i class="fas fa-info-circle"></i></span></li>
                                <li class="footer">
                                    <a class="btn btn-dark border btn-sm" href="#">Try for free</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-item active">
                            <ul>
                                <li class="icon">
                                    <i class="flaticon-quality-badge"></i>
                                </li>
                                <li class="pricing-header">
                                    <h4>Regular</h4>
                                    <h2><sup>$</sup>29 <sub>/ Year</sub></h2>
                                </li>
                                <li>Demo file</li>
                                <li>Update <span data-toggle="tooltip" data-placement="top" title="Only for extended licence"><i class="fas fa-info-circle"></i></span></li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support <span data-toggle="tooltip" data-placement="top" title="Only for extended licence"><i class="fas fa-info-circle"></i></span></li>
                                <li>5 database</li>
                                <li>Documetation</li>
                                <li class="footer">
                                    <a class="btn btn-theme effect btn-sm" href="#">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-item">
                            <ul>
                                <li class="icon">
                                    <i class="flaticon-value"></i>
                                </li>
                                <li class="pricing-header">
                                    <h4>Extended</h4>
                                    <h2><sup>$</sup>59 <sub>/ Year</sub></h2>
                                </li>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                                <li>8 database</li>
                                <li>Documetation</li>
                                <li class="footer">
                                    <a class="btn btn-dark border btn-sm" href="#">Get Started</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Team  
    ============================================= -->
    <div id="team" class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Innovative <span>Team</span></h2>
                        <h4>Meet our awesome and expert team members</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items">
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                                <div class="overlay">
                                    <h4>I love my Studio</h4>
                                    <p>
                                        Jointure goodness interest debating did outweigh. Is time from them full my gone in went Of no introduced
                                    </p>
                                    <div class="social">
                                        <ul>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Ahmed Kamal</h4>
                                <span>Chairman of Softing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                                <div class="overlay">
                                    <h4>Connecting People</h4>
                                    <p>
                                        Jointure goodness interest debating did outweigh. Is time from them full my gone in went Of no introduced
                                    </p>
                                    <div class="social">
                                        <ul>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Drunal Park</h4>
                                <span>Manager of Softing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                                <div class="overlay">
                                    <h4>Network Builder</h4>
                                    <p>
                                        Jointure goodness interest debating did outweigh. Is time from them full my gone in went Of no introduced
                                    </p>
                                    <div class="social">
                                        <ul>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Munia Ankor</h4>
                                <span>Founder of Softing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Customer <span>Review</span></h2>
                        <h4>What people say about us</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="testimonial-items owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="testimonial-item">
                                <div class="thumb col-md-4">
                                    <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="info col-md-8">
                                    <div class="content">
                                        <p> 
                                            Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. plate you share. My resolve arrived is we chamber be removal. 
                                        </p>
                                        <h4>Bubhan Kritha</h4>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="testimonial-item">
                                <div class="thumb col-md-4">
                                    <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="info col-md-8">
                                    <div class="content">
                                        <p> 
                                            Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. plate you share. My resolve arrived is we chamber be removal. 
                                        </p>
                                        <h4>Junl Sarukh</h4>
                                        <span>Software Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="testimonial-item">
                                <div class="thumb col-md-4">
                                    <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="info col-md-8">
                                    <div class="content">
                                        <p> 
                                            Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. plate you share. My resolve arrived is we chamber be removal. 
                                        </p>
                                        <h4>Makhon Daino</h4>
                                        <span>Compnay Owner</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Faq  
    ============================================= -->
    <div class="faq-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Qustion and <span>Answer</span></h2>
                        <h4>Most common and important answer</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Star Video Faq -->
                <div class="col-md-6 video-faq">
                    <div class="video">
                        <img src="{path_template_front}assets/img/800x800.png" alt="Thumb">
                        <a class="popup-youtube light video-play-button" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                            <i class="fa fa-play"></i>
                        </a>
                        <h4>Answer with video</h4>
                    </div>
                </div>
                <!-- End Video Faq -->

                <!-- Star Accordion Items -->
                <div class="col-md-6 faq-items">
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            <span>1</span> Do I need a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            <span>2</span> How long should a business plan be? 
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            <span>3</span> What goes into a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                            <span>4</span> Where do I start? 
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            She wholly fat who window extent either formal. Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->

                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq  -->

    <!-- Start Blog  
    ============================================= -->
    <div id="blog" class="blog-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Latest <span>Blog</span></h2>
                        <h4>Have a look to our latest blog</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-items blog-carousel owl-carousel owl-theme">
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html">
                                    <img src="{path_template_front}assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">startup</a>
                                    <a href="#">business</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Become latter but nor abroad wisdom waited</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2019</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain
                                </p>
                                <div class="read-more">
                                    <a href="#" class="more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html">
                                    <img src="{path_template_front}assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">asset</a>
                                    <a href="#">earning</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">attended desirous raptures declared assistance</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2019</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain
                                </p>
                                <div class="read-more">
                                    <a href="#" class="more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html">
                                    <img src="{path_template_front}assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">success</a>
                                    <a href="#">product</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Justice improve age article between projection </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2019</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain
                                </p>
                                <div class="read-more">
                                    <a href="#" class="more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html">
                                    <img src="{path_template_front}assets/img/800x600.png" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">startup</a>
                                    <a href="#">business</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Prosperous continuing entreat unreserved</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2019</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain
                                </p>
                                <div class="read-more">
                                    <a href="#" class="more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Signup 
    ============================================= -->
    <div class="signup-area bg-fixed shadow dark text-light default-padding text-center" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Try Launch Today!</h3>
                    <p>
                        Dried quick round it or order. Add past see west felt did any. plate you share. My resolve arrived is we chamber be removal.
                    </p>
                    <a href="#" class="btn circle btn-light effect btn-md">Signup for free</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Signup -->

    <!-- Start Contact Area  
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Contact <span>Us</span></h2>
                        <h4>Do you Have Any Questions?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 contact-form">
                    <h2>Let's lalk about your idea</h2>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 address">
                    <div class="address-items">
                        <ul class="info">
                            <li>
                                <h4>Office Location</h4>
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <div class="icon"><i class="fas fa-phone"></i></div> 
                                <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                            </li>
                        </ul>
                        <h4>Social Address</h4>
                        <ul class="social">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding-top bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item about">
                            <img src="{path_template_front}assets/img/logo.png" alt="Logo">
                            <p>
                                Celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if. She jointure goodness interest debating did outweigh.
                            </p>
                            <h5>Follow Us</h5>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Company</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Compnay History</a>
                                </li>
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a href="#">Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Resources</h4>
                            <ul>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Strategy</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>
                                 Possible offering at contempt mr distance stronger an. Attachment excellence announcing
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Website:</h5>
                                            <span>www.validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>support@validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>+44-20-7328-4499</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{path_template_front}assets/js/jquery-1.12.4.min.js"></script>
    <script src="{path_template_front}assets/js/bootstrap.min.js"></script>
    <script src="{path_template_front}assets/js/equal-height.min.js"></script>
    <script src="{path_template_front}assets/js/jquery.appear.js"></script>
    <script src="{path_template_front}assets/js/jquery.easing.min.js"></script>
    <script src="{path_template_front}assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{path_template_front}assets/js/modernizr.custom.13711.js"></script>
    <script src="{path_template_front}assets/js/owl.carousel.min.js"></script>
    <script src="{path_template_front}assets/js/wow.min.js"></script>
    <script src="{path_template_front}assets/js/count-to.js"></script>
    <script src="{path_template_front}assets/js/bootsnav.js"></script>
    <script src="{path_template_front}assets/js/main.js"></script>

</body>
</html>