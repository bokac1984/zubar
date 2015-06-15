<?php
include_once("lang/lang.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $lang['page']['opstastomatologija']['title'] . ' - ' . $lang['site']['title']; ?></title>

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
                                <a href="index.php"><img src="img/cyan/logo.png" alt="Kecman" width="190" height="50"></a>
                            </div>
                        </section>
                        <!--/ logo -->

                        <!-- main nav -->
                        <?php
                        $typeActive = 6;
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

            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1><?php echo $lang['page']['opstastomatologija']['title'] ?></h1>					
                    <nav class="bread-crumbs">
                        <a href="index.php"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['opstastomatologija']['title'] ?></a>
                    </nav>
                </div>
            </section>
            <!--/ page title -->

            <main class="page-content">
                <div class="grid-row">
                    <div class="grid-col grid-col-9">
                        <!-- list -->
                        <div><a class="widget-title" name="section1"><?php echo $lang['page']['opstastomatologija']['Endodoncija']['title']; ?></a></div>
                        <b><?php echo $lang['page']['opstastomatologija']['Endodoncija']['terapija']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Endodoncija']['terapija']['content'] ?></p>
                        <b><?php echo $lang['page']['opstastomatologija']['Endodoncija']['kandidati']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Endodoncija']['kandidati']['content']; ?></p><br>	

                        <!-- list -->
                        <div><a class="widget-title" name="section2"><?php echo $lang['page']['opstastomatologija']['Parodontologija']['title']; ?></a></div>
                        <b><?php echo $lang['page']['opstastomatologija']['Parodontologija']['terapija']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Parodontologija']['terapija']['content'] ?></p>
                        <b><?php echo $lang['page']['opstastomatologija']['Parodontologija']['gingivitis']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Parodontologija']['gingivitis']['content']; ?></p>
                        <b><?php echo $lang['page']['opstastomatologija']['Parodontologija']['naslage']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Parodontologija']['naslage']['content'] ?></p>
                        <b><?php echo $lang['page']['opstastomatologija']['Parodontologija']['parodontitis']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Parodontologija']['parodontitis']['content'] ?></p>
                        <b><?php $lang['page']['opstastomatologija']['Parodontologija']['rezanj']['subtitle']; ?></b>
                        <p><?php $lang['page']['opstastomatologija']['Parodontologija']['rezanj']['content'] ?></p><br>
                        <!--/ list -->	


                        <!-- list -->
                        <div><a class="widget-title" name="section3"><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['title']; ?></a></div>
                        <b><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['prvaposeta']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['prvaposeta']['content'] ?></p>
                        <b><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['decijikarijes']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['decijikarijes']['content']; ?></p>
                        <b><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['Fluorizacija']['subtitle']; ?></b>
                        <p><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['Fluorizacija']['content']; ?></p><br>
                        <!--/ list -->
                    </div>
                    <div class="grid-col grid-col-3">

                        <!-- categories -->
                        <section class="widget widget-sevices">
                            <div class="widget-title"><?php echo $lang['page']['opstastomatologija']['usluge']; ?></div>
                            <ul>
                                <li><i class="fa fa-bookmark"></i><a href="#section1"><?php echo $lang['page']['opstastomatologija']['Endodoncija']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#section2"><?php echo $lang['page']['opstastomatologija']['Parodontologija']['title']; ?></a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#section3"><?php echo $lang['page']['opstastomatologija']['Pedodoncija']['title']; ?></a></li>
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