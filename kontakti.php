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
                                <a href="/"><img src="img/cyan/logo.png" alt="Kecman" width="190" height="50"></a>
                            </div>
                        </section>
                        <!--/ logo -->

                        <!-- main nav -->
                        <?php
                        $typeActive = 8;
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
                            <a href="/"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
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
                            <dl>
                                <dt class="opened"><?php echo $lang['page']['kontakt']['radnovrijeme']['title'] ?></dt>
                                <dd>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i><?php echo $lang['page']['kontakt']['radnovrijeme']['radnidani'] ?></li>
                                        <li><i class="fa fa-clock-o"></i><?php echo $lang['page']['kontakt']['radnovrijeme']['vikend']; ?></li>
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
                            <p><?php echo $lang['page']['kontakt']['narucise']['content']; ?></p>

                            <form action="php/contact-send.php" id="contactform">
                                <fieldset>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['kontakt']['forma']['label']['ime'] ?>:</label>
                                            <input type="text" name="ime">
                                        </div>
                                        <div class="input">
                                            <label><?php echo $lang['page']['kontakt']['forma']['label']['telefon']; ?>:</label>
                                            <input type="text" name="telefon">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['kontakt']['forma']['label']['email'] ?>:</label>
                                            <input type="text" name="email">
                                        </div>
                                    </div>
                                    <label><?php echo $lang['page']['kontakt']['forma']['label']['message'] ?>:</label>
                                    <textarea rows="6" name="poruka"></textarea>
                                    <div class="clearfix captcha">
                                        <div class="captcha-wrapper">
                                            <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

                                            <input class="verify" type="text" id="verify" name="verify" />
                                        </div>
                                        <button type="submit" class="button" value="Submit"><?php echo $lang['page']['kontakt']['forma']['label']['submit']; ?></button>

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
        <!-- copyrights -->
        <?php include("includes/javascripts.php"); ?>
        <!--/ copyrights -->
    </body>
</html>