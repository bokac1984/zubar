<?php
include_once("lang/lang.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $lang['page']['protetika']['title'] . ' - ' . $lang['site']['title']; ?></title>

        <!-- metas -->
        <meta charset="utf-8">        
        <meta name="author" content="Djordje Hrnjez">
        <meta name="keywords" content="kecman stomatologija">
        <meta name="description" content="Stomatoloska ordinacija Kecman">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <!--/ metas -->

        <!-- links -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--/ links -->

        <!-- styles -->
        <link rel="stylesheet" type="text/css" href="css/layerslider.css">
        <link rel="stylesheet" type="text/css" href="css/fullwidth/skin.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/color-cyan.css">		
        <!--/ styles -->

<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="page">

            <!-- page header -->
            <header class="page-header main-page sticky">
                <div class="sticky-wrapp">
                    <div class="sticky-container">
                        <!-- logo -->
                        <section id="logo" class="logo">
                            <div>
                                <a href="/"><img src="img/cyan/logo.png" alt="Kecman" width="190" height="50"></a>
                            </div>
                        </section>
                        <!--/ logo -->

                        <!-- main nav -->
                        <?php
                        $typeActive = 2;
                        include("includes/main-nav.php");
                        ?>
                        <!--/ main nav -->

                        <!-- mobile nav -->
                        <?php include("includes/mobile-nav.php"); ?>
                        <!--/ mobile nav -->
                    </div>
                </div>
            </header>
            <!--/ page header -->

            <!-- quick search -->
            <?php include("includes/quick-order.php"); ?>
            <!--/ quick search -->
            <!-- slider -->
            <div class="slider-wrapper">
                <section class="slider" id="slider">
                    <div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
                        <img src="img/pages/protetika.jpg" alt="" class="ls-bg">
                    </div>
                </section>
            </div>
            <!--/ slider -->
            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1><?php echo $lang['page']['protetika']['kerveniri']['title']; ?></h1>					
                    <nav class="bread-crumbs">
                        <a href="/"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['protetika']['title'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['protetika']['kerveniri']['title']; ?></a>
                    </nav>
                </div>
            </section>
            <!--/ page title -->

            <main class="page-content">
                <div class="grid-row">
                    <div class="grid-col grid-col-9">
                        <!-- list -->
                        <div><a class="widget-title" name="section4"><?php echo $lang['page']['protetika']['kerveniri']['title']; ?></a></div>
                        <?php echo $lang['page']['protetika']['opis']; ?>
                        <p><?php echo $lang['page']['protetika']['kerveniri']['opis'] ?></p>
                        <?php echo $lang['page']['protetika']['kandidati']; ?>
                        <p><?php echo $lang['page']['protetika']['kerveniri']['kandidati']; ?></p>
                        <?php echo $lang['page']['protetika']['materijali']; ?>
                        <p><?php echo $lang['page']['protetika']['kerveniri']['materijali']; ?></p><br>
                        <!--/ list -->	
                    </div>
                    <div class="grid-col grid-col-3">

                        <!-- categories -->
                        <section class="widget widget-sevices">
                            <div class="widget-title"><?php echo $lang['page']['protetika']['usluge']; ?></div>
                            <ul>
                                <li><i class="fa fa-bookmark"></i><a href="metalkeramicke-krunice"><?php echo $lang['page']['protetika']['inline']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="press-bezmetalne-krunice"><?php echo $lang['page']['protetika']['bezmetalne']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="cirkonijum-dioksid-krunice"><?php echo $lang['page']['protetika']['cirkonujum']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="press-keramicki-veniri"><?php echo $lang['page']['protetika']['kerveniri']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="press-keramicki-inlej"><?php echo $lang['page']['protetika']['inleji']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="skeletirana-proteza"><?php echo $lang['page']['protetika']['proteza']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="akrilatna-proteza"><?php echo $lang['page']['protetika']['akrilatna']['title']; ?></a></li>
                            </ul>
                        </section>
                        <!--/ categories -->

                        <!-- ask us -->
                        <?php include("includes/widget-ask-us.php"); ?>
                        <!--/ ask us -->
                    </div>
                </div>
            </main>

            <!-- page footer -->
            <?php include("includes/footer.php"); ?>
            <!--/ page footer -->

            <!-- copyrights -->
            <?php include("includes/copyrights.php"); ?>
            <!--/ copyrights -->

        </div>

        <!-- scripts -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="js/jquery.flot.js"></script>
        <script type="text/javascript" src="js/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="js/greensock.js"></script>
        <script type="text/javascript" src="js/layerslider.transitions.js"></script>
        <script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>

        <!-- Superscrollorama -->		
        <script type="text/javascript" src="js/jquery.superscrollorama.js"></script>
        <script type="text/javascript" src="js/TweenMax.min.js"></script>
        <script type="text/javascript" src="js/TimelineMax.min.js"></script>
        <!--/ Superscrollorama -->

        <script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
        <script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
        <script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
        <script type="text/javascript" src="js/jquery.ui.accordion.min.js"></script>
        <script type="text/javascript" src="js/jquery.tweet.js"></script>
        <!-- EASYPIECHART -->
        <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
        <!--/ EASYPIECHART -->
        <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <!--/ scripts -->

    </body>
</html>