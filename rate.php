<?php
include_once("lang/lang.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $lang['page']['rate']['title'] . ' - ' . $lang['site']['title']; ?></title>

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
                        $typeActive = -1;
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
                        <img src="img/pages/rate.jpg" alt="" class="ls-bg">
                    </div>
                </section>
            </div>
            <!--/ slider -->
            
            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1><?php echo $lang['page']['rate']['title'] ?></h1>					
                    <nav class="bread-crumbs">
                        <a href="/"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['rate']['title'] ?></a>
                    </nav>
                </div>
            </section>
            <!--/ page title -->

            <main class="page-content">
                <div class="grid-row">
                    <div class="grid-col grid-col-12">
                        <!-- list -->
                        <div><a class="widget-title" name="section1"><?php echo $lang['page']['rate']['title']; ?></a></div>
                        <br><p><?php echo $lang['page']['rate']['content']; ?></p><br>	
                    </div>
                </div>
                <div class="grid-row">
                    <div class="grid-col grid-col-12">
                        <!-- list -->
                        <div><a class="widget-title" name="section1"><?php echo $lang['page']['rate']['title']; ?></a></div>
                        <br>
                        <style type="text/css">
                        .tg  {border-collapse:collapse;border-spacing:0;}
                        .tg td{border-color: rgb(226, 226, 226);color: #7c7c7c;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                        .tg th{
                            font-family:Arial, sans-serif;
                            font-size:14px;
                            color: #7c7c7c;
                              font-weight:normal;
                              padding:10px 5px;
                              border-style:solid;
                              border-width:1px;
                              overflow:hidden;
                              word-break:normal;
                              border-color: rgb(226, 226, 226);
                        }
                        .tg .tg-s6z2, .tg .tg-031e{text-align:center}
                        </style>
                        <table class="tg">
                          <tr>
                            <th class="tg-s6z2"><?php echo $lang['page']['rate']['tabela']['header']['nacinaplacanja']; ?></th>
                            <th class="tg-031e"><?php echo $lang['page']['rate']['tabela']['header']['minukupni']; ?></th>
                            <th class="tg-031e"><?php echo $lang['page']['rate']['tabela']['header']['branuiteta']; ?></th>
                            <th class="tg-031e"><?php echo $lang['page']['rate']['tabela']['header']['kamata']; ?></th>
                          </tr>
                          <tr>
                            <td class="tg-s6z2"><?php echo $lang['page']['rate']['tabela']['columns']['ugovor']; ?></td>
                            <td class="tg-031e">100 KM (50 KM)</td>
                            <td class="tg-031e">2 – 12</td>
                            <td class="tg-031e">0.00%</td>
                          </tr>
                          <tr>
                            <td class="tg-s6z2"><?php echo $lang['page']['rate']['tabela']['columns']['fondpio']; ?></td>
                            <td class="tg-031e">100 KM (50 KM)</td>
                            <td class="tg-031e">2 – 6</td>
                            <td class="tg-031e">0.00%</td>
                          </tr>
                          <tr>
                            <td class="tg-031e"><?php echo $lang['page']['rate']['tabela']['columns']['visaclassic']; ?></td>
                            <td class="tg-031e">50 KM (8.33 KM)</td>
                            <td class="tg-031e">2 – 24</td>
                            <td class="tg-031e">0.00%</td>
                          </tr>
                          <tr>
                            <td class="tg-031e"><?php echo $lang['page']['rate']['tabela']['columns']['visaunicredit']; ?></td>
                            <td class="tg-031e">100 KM (8.33 KM)</td>
                            <td class="tg-031e">2 – 12</td>
                            <td class="tg-031e">0.00%</td>
                          </tr>
                          <tr>
                            <td class="tg-031e"><?php echo $lang['page']['rate']['tabela']['columns']['diners']; ?></td>
                            <td class="tg-031e">35 KM (2.91 KM)</td>
                            <td class="tg-031e">12</td>
                            <td class="tg-031e">1.09%</td>
                          </tr>
                          <tr>
                            <td class="tg-031e"><?php echo $lang['page']['rate']['tabela']['columns']['visaelec']; ?></td>
                            <td class="tg-031e">50 KM (4.16 KM)</td>
                            <td class="tg-031e">2 – 12</td>
                            <td class="tg-031e">0.00%</td>
                          </tr>                         
                           <tr>
                            <td class="tg-031e"><?php echo $lang['page']['rate']['tabela']['columns']['amex']; ?></td>
                            <td class="tg-031e">10 KM (0.83 KM)</td>
                            <td class="tg-031e">2 – 12</td>
                            <td class="tg-031e">0.00%</td>
                          </tr>
                        </table>                                                       
                    </div>
                </div>
                <div class="grid-row">
                    <div class="grid-col grid-col-12">
                        <!-- list -->
                        <div><a class="widget-title" name="section1"><?php echo $lang['page']['rate']['napomenta']['title']; ?></a></div>
                        <br><p><?php echo $lang['page']['rate']['napomenta']['content']; ?></p><br>
                        <p><?php echo $lang['page']['rate']['napomenta']['content2']; ?></p>
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