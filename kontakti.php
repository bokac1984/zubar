<?php
include_once("lang/lang.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $lang['page']['kontakt']['title'] . ' - ' . $lang['site']['title']; ?></title>

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

            <!-- quick order -->
            <?php include("includes/quick-order.php"); ?>
            <!--/ quick order -->

            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1:<?php echo $lang['page']['kontakt']['title']; ?></h1>

                        <nav class="bread-crumbs">
                            <a href="index.php"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                            <a href="#"><?php echo $lang['page']['kontakt']['title']; ?></a>
                        </nav>
                </div>
            </section>
            <!--/ page title -->

            <!-- page content -->
            <main class="page-content">
                <div class="grid-row">
                    <!-- map -->
                    <div class="grid-col grid-col-9">
                        <section class="map">
                            <div class="widget-title"><?php echo $lang['page']['kontakt']['widget']['mapa']; ?></div>
                            <div id="map" class="google-map"></div>
                        </section>
                        <!--/ map -->
                    </div>
                    <div class="grid-col grid-col-3">						
                        <!-- contacts -->
                        <section class="widget widget-contacts">
                            <div class="widget-title"><?php echo $lang['page']['kontakt']['widget']['title']; ?></div>
                            <dl>
                                <dt class="opened">Info</dt>
                                <dd>
                                    <ul>
                                        <li><?php echo $lang['page']['kontakt']['naziv']; ?></li>
                                        <li><i class="fa fa-map-marker"></i><?php echo $lang['page']['kontakt']['adresa']; ?></li>
                                    </ul>
                                </dd>

                            </dl>
                            <dl>
                                <dt class="opened"><?php echo $lang['page']['kontakt']['telefoni']['title'] ?></dt>
                                <dd>
                                    <ul>
                                        <li><i class="fa fa-phone"></i><?php echo $lang['page']['kontakt']['telefoni1'] ?></li>
                                        <li><i class="fa fa-phone"></i><?php echo $lang['page']['kontakt']['telefoni2']; ?></li>
                                    </ul>
                                </dd>

                            </dl>
                        </section>
                        <!--/ contacts -->
                        <!--/ follow -->
                    </div>
                </div>

                <div class="grid-row">
                    <div class="grid-col grid-col-9">
                        <!-- feedback -->
                        <article class="feedback">
                            <div class="widget-title">Naruči se odmah preko našeg online obrasca</div>										
                            <p>Rezervišite svoj termin za besplatni pregled i konsultacije ili profesionalno čišćenje i poliranje zuba preko našeg obrazca za rezervacije. Naše osoblje će vas kontaktirati u roku od 24 sata putem telefona i ponuditi vam termin koji vam najviše odgovara.</p>

                            <form action="php/contact-send.php" id="contactform">
                                <fieldset>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label>Your name:</label>
                                            <input type="text" name="name">
                                        </div>
                                        <div class="input">
                                            <label>Your email:</label>
                                            <input type="text" name="email">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label>Category:</label>
                                            <input type="text" name="category">
                                        </div>
                                        <div class="input">
                                            <label>Subject:</label>
                                            <input type="text" name="subject">
                                        </div>
                                    </div>
                                    <label>Message:</label>
                                    <textarea rows="6" name="message"></textarea>
                                    <div class="clearfix captcha">
                                        <div class="captcha-wrapper">
                                            <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

                                            <input class="verify" type="text" id="verify" name="verify" />
                                        </div>
                                        <button type="submit" class="button" value="Submit">Submit</button>

                                    </div>
                                </fieldset>
                            </form>							
                        </article>
                        <!--/ feedback -->
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