<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Grill Multi purpose HTML5 Web Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
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
<div id="wrapper">
    <?php require_once('header.php'); ?>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-logo">
                        <h3>Get<span class="color"> in Touch</span></h3>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p> </p>

                    <!-- Form itself -->
                    <form name="sentMessage" id="contactForm"  novalidate>
                        <div class="input-field">
                            <input type="text" name="name" class="form-control"
                                   id="name" required
                                   data-validation-required-message="Please enter your name" />
                            <label for="name" class="">   Name </label>
                            <p class="help-block"></p>

                        </div>
                        <div class="input-field">
                            <input type="email" class="form-control" id="email" required
                                   data-validation-required-message="Please enter your email" />
                            <label for="name" class="">   Email </label>
                        </div>

                        <div class="input-field">
				 <textarea rows="10" cols="100" required class="form-control materialize-textarea"
                           idation-required-message="Please enter your message" minlength="5"
                           data-validation-minlength-message="Min 5 characters"
                           maxlength="999" style="resize:none"></textarea>
                            <label for="name" class="">   Message </label>
                        </div>
                        <div id="success"> </div> <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
                    </form>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1383.4167075643322!2d19.661675170085086!3d46.094297841322565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474366d1b03dbbc9%3A0x4cb117142339b78e!2sVisoka+tehni%C4%8Dka+%C5%A1kola+strukovnih+studija!5e0!3m2!1sen!2srs!4v1542020891846" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
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

<script src="contact/jqBootstrapValidation.js"></script>
<script src="contact/contact_me.js"></script>
</body>
</html>