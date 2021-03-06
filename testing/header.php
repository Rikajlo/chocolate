<header>
    <div id="warnbanner">
        <div id="warnbanner-content">
            This website is a school project.
        </div>
    </div>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php if (isset($index))
                    echo '<a class="navbar-brand" href="index.php"><img src="img/smolllogo/logowhite.png" alt="Belgian Chocolate"></a>';
                else
                    echo '<a class="navbar-brand" href="index.php"><img src="img/smolllogo/logowhite.png" height="50" alt="Belgian Chocolate"></a>';
                ?>

            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a class="waves-effect waves-dark" href="index.php">Home</a></li>
                    <!--<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="about.php">Company</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Our Team</a></li>
                            <li><a class="waves-effect waves-dark" href="#">News</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Investors</a></li>
                        </ul>
                    </li>-->
                    <li><a class="waves-effect waves-dark" href="why.php">Reasons Why</a></li>
                    <li><a class="waves-effect waves-dark" href="portfolio.php">Gallery</a></li>
                    <li><a class="waves-effect waves-dark" href="pricing.php">Pricing</a></li>
                    <li><a class="waves-effect waves-dark" href="contact.php">Contact</a></li>
                    <li><a class="waves-effect waves-dark" href="https://www.instagram.com/bethechocolateforme/">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
