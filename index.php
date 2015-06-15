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
                                <a href="index.php"><img src="img/cyan/logo.png" alt="Kecman"></a>
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
                        <img src="img/pages/naslovna.jpg" alt="" class="ls-bg">


                    </div>
                    <div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">				
                        <img src="pic/medical-slide-2.jpg" alt="" class="ls-bg">


                    </div>
                    <div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
                        <img src="pic/medical-slide-3.jpg" alt="" class="ls-bg">


                    </div>
                </section>
            </div>
            <!--/ slider -->

            <!-- page content -->
            <main class="page-content">				

                <div class="grid-row">
                    <!-- services -->
                    <section class="services">
                        <ul>
                            <li>
                                <a class="pic"><i class="fa fa-money"></i></a>
                                <h2><a href="#"><?php echo $lang['home']['rate']['title']; ?></a></h2>
                                <p><?php echo $lang['home']['rate']['content']; ?></p>
                                <a href="rate" class="more fa fa-long-arrow-right"></a>
                            </li>
                            <li>
                                <a class="pic"><i class="fa fa-user-md"></i></a>
                                <div class="text">
                                    <h2><a href="#"><?php echo $lang['home']['inernacionala']['title']; ?></a></h2>
                                    <p><?php echo $lang['home']['inernacionala']['content']; ?></p>
                                    <a href="internacionalni-pacijenti" class="more fa fa-long-arrow-right"></a>
                                </div>
                            </li>							
                        </ul>
                    </section>
                    <!--/ services -->	
                </div>

                <div class="grid-row">
                    <div class="grid-col grid-col-4">
                        <!-- departments -->
                        <section class="widget widget-departments">
                            <div class="widget-title">Departments</div>
                            <dl>
                                <dt><i class="fa fa-medkit"></i>Primary Health Care</dt>
                                <dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-user-md"></i>Gynaecological Clinic</dt>
                                <dd>Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-stethoscope"></i>Diagnosis With Precise</dt>
                                <dd>Nam elementum elit eget  tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-heart"></i>Cardiac Clinic</dt>
                                <dd>Nulla nec rutrum tortor, in fermentum nisl.accumsan pulvinar scelerisque tincidunt, adipiscing eget risus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-scissors"></i>General Surgery</dt>
                                <dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt class="opened"><i class="fa fa-wheelchair"></i>Rehabilitation Studio</dt>
                                <dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                            </dl>
                        </section>
                        <!--/ departments -->
                    </div>

                    <div class="grid-col grid-col-4">
                        <!-- sevices -->
                        <section class="widget widget-sevices">
                            <div class="widget-title">Naše usluge</div>
                            <ul>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Estetska Stomatologija</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Oralna Hirurgija</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Implantologija</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Laboratorija</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Ostale Usluge</a></li>
                            </ul>
                        </section>
                        <!--/ sevices -->
                    </div>

                    <div class="grid-col grid-col-4">
                        <!-- appointment -->
                        <?php include("includes/widget-ask-us.php"); ?>
                        <!--/ appointment -->	
                    </div>
                </div>
            </main>
            <!--/ page content -->

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