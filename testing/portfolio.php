<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gallery - Belgian Chocolate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    include('googleanalitich.php');
    ?>
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" />

    <!-- Vendor Styles -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Block Styles -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/gallery-1.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
    <?php require_once('header.php'); ?>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Portfolio</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="about-logo">
                        <h3>Our <span class="color">Gallery</span></h3>
                    <p>
                        Check out the awesome photos that include chocolate, belgium, and other related topics! We are also looking forward to seeing your choco photos,
                        tag us in your Instagram post with #beisthechocolateforme.
                    </p>

                    <p>
                        The selected photo will also get a mention on our Instagram profile:
                        <a href="http://instagram.com/bethechocolateforme">instagram.com/bethechocolateforme</a>
                    </p></div>
                </div>
            </div>

        </div>
    </section>
    <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
        <div class="container">

            <div class="editContent">
                <ul class="filter">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a class="waves-effect waves-dark" href="#" data-filter=".chocolate">Chocolate</a></li>
                    <li><a class="waves-effect waves-dark" href="#" data-filter=".coffee">Coffee</a></li>
                    <li><a class="waves-effect waves-dark" href="#" data-filter=".belgium">Belgium</a></li>
                    <li><a class="waves-effect waves-dark" href="#" data-filter=".fruity">Fruity</a></li>
                    <li><a class="waves-effect waves-dark" href="#" data-filter=".photography">Photography</a></li>
                </ul>
            </div>
            <!-- /.gallery-filter -->

            <div class="row">
                <div id="isotope-gallery-container">
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper chocolate fruity">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/1.jpg" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/1.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Raspberry Dark Chocolate</h5>
                                </div>
                                <div class="editContent">
                                    <p>This flavour is a fan favourite combination.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper chocolate fruity">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/2.jpg" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/2.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Nutty and Fruity</h5>
                                </div>
                                <div class="editContent">
                                    <p>All kinds of chocolate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper belgium photography">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/3.jpg" class="img-responsive" alt="3rd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/3.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Belgium</h5>
                                </div>
                                <div class="editContent">
                                    <p>The home of Belgian chocolate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper  chocolate coffee">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/4.jpg" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/4.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Chocolate in and out a cup</h5>
                                </div>
                                <div class="editContent">
                                    <p>Great no matter if it's liquid or solid.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper belgium photography">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/5.jpg" class="img-responsive" alt="5th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/5.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Belgian Cafe</h5>
                                </div>
                                <div class="editContent">
                                    <p>Atmosphere from a Belgian cafe serving chocolate along coffee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper chocolate coffee">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/6.jpg" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/6.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>With nature and coffee</h5>
                                </div>
                                <div class="editContent">
                                    <p>Chocolate is a dream.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper chocolate photography">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/7.jpg" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/7.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Pralines</h5>
                                </div>
                                <div class="editContent">
                                    <p>Select your favourite from the bunch!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper chocolate">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/8.jpg" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/8.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>

                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Chocolate with nuts</h5>
                                </div>
                                <div class="editContent">
                                    <p>Perfect crunch for the holidays season!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row -->
            <!-- /.container -->
        </div>
    </section>
    <!--// End Gallery 1-2 -->
</div>
<?php require_once('footer.php'); ?>
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