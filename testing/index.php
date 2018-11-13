<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Belgian Chocolate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css -->
    <?php
    include('googleanalitich.php');
    ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<div id="wrapper" class="home-page">
    <?php $index=1;
    require_once('header.php'); ?>
    <section id="banner">

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="img/slides/1.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Best Belgian chocolate!</h3>
                        <p>Get the best Belgian chocolate</p>

                    </div>
                </li>
                <li>
                    <img src="img/slides/2.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Chocolate varieties</h3>
                        <p>Get all types of Belgian chocolate</p>

                    </div>
                </li>
            </ul>
        </div>
        <!-- end slider -->
    </section>
    <section class="dishes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">Signature Chocolate</h2>Belgian chocolate is chocolate produced in Belgium, and today it forms an important part of the nation's economy and culture.</div>
                    <br/>
                </div>
            </div>

            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="img/service1.jpg" alt="pralines">
                            <span class="card-title">Pralines</span>
                        </div>
                        <div class="card-content des">
                            <p>
                                Pralines made in Belgium are usually soft-centred confections with a chocolate casing.
                            </p>
                            <p>
                                There have always been many forms and shapes: nearly always containing a chocolate shell with a softer filling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="img/service2.jpg" alt="truffles">
                            <span class="card-title">Truffles</span>
                        </div>
                        <div class="card-content des">
                            <p>
                                Most commonly in the form of a flaky or smooth chocolate ball or traditionally a truffle-shaped lump.
                            </p>
                            <p>
                                Belgian chocolate truffles are sometimes in encrusted form containing wafers or coated in a high-quality cocoa powder.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="img/service3.jpg" alt="figurines">
                            <span class="card-title">Eggs, animals and figurines</span>
                        </div>
                        <div class="card-content des">
                            <p>
                                Hand-finished and luxury examples of eggs, animals, figurines and Valentine's Day hearts are made by many smaller Belgian chocolatiers,
                                as elsewhere, accounting for a relatively small market share however in peak demand at Valentine's Day, Easter, Sinterklaas and Christmas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Our Stores</h2>
                        <p>An always pleasant and warm atmosphere filled with irresistible chocolate smells will always welcome you in the stores.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <p>Apart from a wide choice of chocolate dragees, different kinds of pralines and a vast range of chocolate bars,
                            you can also find unique and playful chocolate figures, gift packages and other interesting chocolate products in our stores.</p>

                        <ul class="withArrow">
                            <li><span class="fa fa-angle-right"></span> We handmake our products!</li>
                            <li><span class="fa fa-angle-right"></span> We use real ingredients!</li>
                            <li><span class="fa fa-angle-right"></span> We label our products so you know if they are Vegan!</li>
                            <li><span class="fa fa-angle-right"></span> We don't test our chocolate on animals! </li>
                        </ul>
                        <a href="portfolio.php" class="btn btn-primary waves-effect waves-dark">Gallery</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-image">
                        <img src="img/offer.jpg" alt="Offer Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('footer1.php'); ?>
    <?php require_once('ads.php'); ?>
    <?php require_once('footer2.php'); ?>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>