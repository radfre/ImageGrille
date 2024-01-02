<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>2d elevation rendering<</title>
    <meta
        content="Image Grille is a professional graphic design and art reproduction studio, offering a wide range of services from creating digital illustrations to fine art reproductions."
        name="description">
    <meta
        content="Image Grille, Elgin, illustrations, rendering, west chicago, chicago, graphic design, art reproduction, digital illustrations, fine art reproductions, architecture, artchitecture "
        name="keywords">

    <!-- Favicons -->
    <link href="assets/img/IG-Logo.jpg" rel="icon">
    <link href="assets/img/IG-Logo.jpg" rel="apple-touch-icon">
    <link href="assets/img/IG-Logo.jpg" rel="shortcut icon" type="imag/x-icon"/>
    <link href="assets/img/IG-Logo.jpg" rel="icon" type="imag/x-icon"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,800;0,900;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Raleway:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Reveal - v2.0.0
    * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">Office@imagegrille.com</a>
            <i class="fa fa-phone"></i> +1 847 214 8283
        </div>
        <div class="social-links float-right">

            <a href="https://www.facebook.com/ron.schatz.73/" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/ron-schatz-asai-30350219/" class="linkedin"><i
                    class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section><!-- End Top Bar-->

<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="index.html" class="scrollto">Image<span>Grille</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#topbar"><img src="assets/img/logo.png" alt=""></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-has-children"><a href="index.html">Home</a>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#about">About Us</a></li>
                        <li><a href="index.html#services">Services</a></li>
                        <li><a href="index.html#clients">Clients</a></li>
                        <li><a href="index.html#portfolio">Portfolio</a></li>
                        <li><a href="index.html#team">Team</a></li>
                        <li class="menu-has-children"><a>Further Works</a>
                            <ul>
                                <li><a href="index.html#CGW">CGW Award Winning Drafts</a></li>
                                <li><a href="index.html#CGW">Selected work from CGW</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="asai.html">Awarded Illustration</a></li>
                <li><a href="CGW.html">CGW</a></li>
                <li><a href="index.html#contact">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- End Header -->

<section id="intro">
    <div class="intro-content">
        <h2>2d elevation rendering</span></h2>

        <div>
            <a href="https://asai.org/award-winner-gallery" class="btn-get-started scrollto" target="_blank">ASAI</a>
            <a href="#mosiac" class="btn-projects scrollto">Illustrations</a>
        </div>
    </div>


</section><!-- End Intro Section -->


<main id="main">
    <!-- =========#mosaic gallery========= -->

    <section id="mosaic">
        <div class="image-gallery">
            <?php
            $directory = 'assets/img/2dArt/';
            $images = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

            if (count($images) > 0) {

                $i = 0;
                $num_per_column = 3;
                foreach ($images as $image) {

                    echo "\n";
                    if (($i % $num_per_column) == 0) {
                        if($i != 0){
                            echo "\t";
                            echo '</div>'; // Close the column div after every $num_per_column images or at the end
                        }
                        echo "\n";
                        echo '<div class="column">';
                    }

                    echo '<div class="image-item">';
                    echo '<a href="' . $image . '" class="venobox" data-gall="portfolioGallery">';
                    echo '<img src="' . $image . '" alt="' . basename($image) . '">';
                    echo '</a>';
                    echo '</div>';

                    if (($i % $num_per_column) == 0) {


                    }

                    $i++;
                }
                echo '</div>'; // Close the column div after every $num_per_column images or at the end

            } else {
                echo '<p>No images found in the gallery.</p>';
            }

            ?>
        </div>
    </section>
    <!-- end mosaic gallery -->
</main>

</div><!--/.sidebar-offcanvas-->
</div><!--/row-->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright Image<strong>Grille</strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/superfish/superfish.min.js"></script>
<script src="assets/vendor/hoverIntent/hoverIntent.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>