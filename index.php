<?php
include_once("lang/lang.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $lang['site']['title']; ?></title>

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
                                <a href="/"><img src="img/cyan/logo.png" alt="Kecman"></a>
                            </div>
                        </section>
                        <!--/ logo -->

                        <!-- main nav -->                        
                        <?php
                        $typeActive = 1;
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
                        <img src="img/pages/homepage.jpg" alt="" class="ls-bg">
                    </div>
                </section>
            </div>
            <!--/ slider -->

            <!-- page content -->
            <main class="page-content">	
                <?php $langg = get_lang_id(); 
                    if ($langg != 'en') {
                ?>
                <div class="grid-row">
                    <!-- services -->
                    <section class="services">
                        <ul>
                            <li>
                                <a class="pic" href="rate"><i class="fa fa-money"></i></a>
                                <h2><a href="rate"><?php echo $lang['home']['rate']['title']; ?></a></h2>
                                <p><?php echo $lang['home']['rate']['content']; ?></p>
                                <a href="rate" class="more fa fa-long-arrow-right"></a>
                            </li>
                            <li>
                                <a class="pic" href="internacionalni-pacijenti"><i class="fa fa-user-md"></i></a>
                                <div class="text">
                                    <h2><a href="internacionalni-pacijenti"><?php echo $lang['home']['inernacionala']['title']; ?></a></h2>
                                    <p><?php echo $lang['home']['inernacionala']['content']; ?></p>
                                    <a href="internacionalni-pacijenti" class="more fa fa-long-arrow-right"></a>
                                </div>
                            </li>							
                        </ul>
                    </section>
                    <!--/ services -->	
                </div>
                    <?php } ?>
<!--                <div class="grid-row">
                    <section class="savremena-tehnologija">
                        <p>Savremena tehnologija i materijali visokog kvaliteta</p>
                        <ul>
                            <li><img src="img/homepage/chirana.png" width="250" height="82"/></li>
                            <li><img src="img/homepage/straumann.png" width="250" height="60"/></li>
                            <li><img src="img/homepage/gci.png"  width="250" height="60"/></li>
                            <li><img src="img/homepage/ivoclar.png" /></li>
                        </ul>
                    </section>
                </div>-->
            </main>
            <!--/ page content -->

            <!-- page footer -->
            <?php include("includes/footer.php"); ?>
            <!--/ page footer -->

            <!-- copyrights -->
            <?php include("includes/copyrights.php"); ?>
            <!--/ copyrights -->

        </div>
        <!-- copyrights -->
        <?php include("includes/javascripts.php"); ?>
        <!--/ copyrights -->
    </body>
</html>