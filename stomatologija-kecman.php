<?php
include_once("lang/lang.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $lang['page']['onama']['title'] . ' - ' . $lang['site']['title']; ?></title>

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
        <link rel="stylesheet" type="text/css" href="css/onama.css">
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
                        $typeActive = 7;
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
                        <img src="img/pages/onama.jpg" alt="" class="ls-bg">
                    </div>
                </section>
            </div>
            <!--/ slider -->
            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1><?php echo $lang['page']['onama']['title'] ?></h1>

                    <nav class="bread-crumbs">
                        <a href="/"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['onama']['title'] ?></a>
                    </nav>
                </div>
            </section>
            <!--/ page title -->

            <main class="page-content">
                <div class="grid-row">
                    <a name="section1"></a>
                    <div class="grid-col grid-col-12">
                        <!-- philosophy -->
                        <section class="widget">	
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper">			
                                    <img src="pic/our-logo.png" width="260" height="93" alt="" class="alignleft">
                                    <?php echo $lang['page']['onama']['content']; ?>
                                </div>
                            </div>
                        </section>
                        <!--/ philosophy -->
                    </div>
                    <hr>
                </div>
                <div class="grid-row">
                    <section id="photo-tour" class="widget photo-tour photo-tour-4">						
                        <div class="grid isotope" style="position: relative; overflow: hidden; height: 1016px;">
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/1.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/1.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/2.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/2.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/3.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/3.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/4.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/4.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/5.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/5.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/6.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/6.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/7.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/7.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/8.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/8.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/9.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/9.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/10.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/10.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/11.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/11.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/12.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/13.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/13.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/13.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/14.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/14.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/15.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/15.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/16.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/16.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                            <div class="item item1 isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 254px, 0px);">
                                <div class="pic">
                                    <img src="img/galerija/17.jpg" width="270" height="142">
                                    <div class="links">
                                        <ul>
                                            <li><a href="img/galerija/17.jpg" rel="group1" class="fa fa-eye fancybox"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </section>
                </div>
            </main>



            <!-- FOOTERS -->
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