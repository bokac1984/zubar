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
                        <a href="index.php"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
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
                            <div class="widget-title"><?php echo $lang['page']['onama']['title'] ?></div>

                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper">			
                                    <img src="pic/our-logo.png" width="260" height="260" alt="" class="alignleft">
                                    <?php echo $lang['page']['onama']['content']; ?>
                                </div>
                            </div>
                        </section>
                        <!--/ philosophy -->
                    </div>
                    <hr>
                </div>
                <div class="grid-row">
                    <a name="section2"></a>
                    <div class="grid-col grid-col-12">
                        <!-- philosophy -->
                        <section class="widget">	
                            <div class="widget-title"><?php echo $lang['page']['onama']['opsteinfo']['title'] ?></div>
                            <p><?php echo $lang['page']['onama']['opsteinfo']['info']; ?> </p>
                            <p><?php echo $lang['page']['onama']['opsteinfo']['regsud']; ?></p>
                            <p><?php echo $lang['page']['onama']['opsteinfo']['ziroracun']; ?></p>
                            <p><?php echo $lang['page']['onama']['opsteinfo']['radnovrijeme']; ?></p>
                        </section>
                        <!--/ philosophy -->
                    </div>
                </div>
                <div class="grid-row">
                    <a name="section3"></a>
                    <div class="grid-col grid-col-12">
                        <!-- philosophy -->
                        <section class="widget">	
                            <div class="widget-title"><?php echo $lang['page']['onama']['kanali']['title'] ?></div>
                            <p><?php echo $lang['page']['onama']['kanali']['content']; ?> </p>
                            <div class="location"><?php include('includes/social.php'); ?></div>
                        </section>
                        <!--/ philosophy -->
                    </div>
                </div>
                <div class="grid-row">
                    <a name="section4"></a>
                    <div class="grid-col grid-col-12">
                        <section class="detailed-services wpb_content_element">
                            <div class="widget-title"><?php echo $lang['page']['onama']['cijenovnik']['title']; ?></div>
                            <p><?php echo $lang['page']['onama']['cijenovnik']['subcontent'] ?></p> 
                            <br>
                            <dl>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['dijagnostika']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span>8 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['radiogram']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['ortopantomogram']; ?></strong></li>
                                            <li><span>besplatno</span><strong><?php echo $lang['page']['onama']['cijenovnik']['opsti-pregled']; ?></strong></li>
                                            <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['prva-pomoc']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['mlijecni']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['stalni']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['gangrenozni']; ?></strong></li>
                                            <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['estetska']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span>35 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['evetricfrontalni']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['premolari']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['molari']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['evetricfrontalni2']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['premolari2']; ?></strong></li>
                                            <li><span>55 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['molari2']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['amalgam']; ?></strong></li>
                                            <li><span>45 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['amalgam2']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['amalgamremove']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['kompozitremove']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['jonomerispun']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['jonomerpodl']; ?></strong></li>
                                            <li><span>400 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['zoom']; ?></strong></li>
                                            <li><span>150 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['dash']; ?></strong></li>
                                            <li><span>300 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['press']; ?></strong></li>
                                            <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['airjet']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['poliranje']; ?></strong></li>
                                            <li><span>100 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['avitalno']; ?></strong></li>                                        
                                            <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span>140 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['inline']; ?></strong></li>
                                            <li><span>300 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['press']; ?></strong></li>
                                            <li><span>320 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['cirkonijum']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura4']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['uklanjanje']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['cementiranje']; ?></strong></li>
                                            <li><span>300 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['press']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['privremena']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['privremena2']; ?></strong></li>
                                            <li><span>60 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['privremena3']; ?></strong></li>
                                            <li><span>60 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['livena']; ?></strong></li>
                                            <li><span>70 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['livena2']; ?></strong></li>
                                            <li><span>80 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['nadogradnja']; ?></strong></li>
                                            <li><span>65 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['nadogradnja2']; ?></strong></li>
                                            <li><span>60 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['nadogradnja3']; ?></strong></li>
                                            <li><span>480 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['skeletirana']; ?></strong></li>
                                            <li><span>55 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['atecmen']; ?></strong></li>
                                            <li><span>280 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['akrilatna']; ?></strong></li>
                                            <li><span>310 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['akrilatna2']; ?></strong></li>
                                            <li><span>330 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['akrilatna3']; ?></strong></li>
                                            <li><span>25 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura']; ?></strong></li>
                                            <li><span>35 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura2']; ?></strong></li>
                                            <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura3']; ?></strong></li>
                                            <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['podlaganje']; ?></strong></li>
                                            <li><span>60 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['podlaganje2']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['periodontalni']; ?></strong></li>
                                            <li><span>150 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['athezivni']; ?></strong></li>
                                            <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd> 
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span>1200 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['dentalni']; ?></strong></li>
                                            <li><span>200 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['abatment']; ?></strong></li>
                                            <li><span>150 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['metalkeramicka']; ?></strong></li>
                                            <li><span>800 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['augmentacija']; ?></strong></li>
                                            <li><span>1200 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['podizanje']; ?></strong></li>
                                            <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span>5 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['lokalna']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['lokalna2']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['infiltraciona']; ?></strong></li>
                                            <li><span>15 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['infiltraciona2']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['ekstrakcija']; ?></strong></li>
                                            <li><span>25 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rutinska']; ?></strong></li>
                                            <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['komplikovana']; ?></strong></li>
                                            <li><span>100 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['hirurska']; ?></strong></li>
                                            <li><span>180 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['hirurska']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['terapija']; ?></strong></li>
                                            <li><span>25 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rutinska2']; ?></strong></li>
                                            <li><span>100 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['hirurska']; ?></strong></li>
                                            <li><span>180 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['ekstrakcija']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rutinsko']; ?></strong></li>
                                            <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['usivanje']; ?></strong></li>
                                            <li><span>180 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['apikotomija']; ?></strong></li>
                                            <li><span>180 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['cistektomija']; ?></strong></li>
                                            <li><span>100 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['gingivektomija']; ?></strong></li>
                                            <li><span>100 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['cirkumcizija']; ?></strong></li>
                                            <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['incizija']; ?></strong></li>
                                            <li><span>100 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['frenulektomija']; ?></strong></li>
                                            <li><span>150 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rezanj']; ?></strong></li>
                                            <li><span>150 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['nivelacija']; ?></strong></li>
                                            <li><span>150 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['primarno']; ?></strong></li>
                                            <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span>1200 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['fiksni']; ?></strong></li>
                                            <li><span>1500 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['fiksni2']; ?></strong></li>
                                            <li><span>1800 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['fiksni3']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['zamjena']; ?></strong></li>
                                            <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['zamjena2']; ?></strong></li>
                                            <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['zamjena3']; ?></strong></li>
                                            <li><span>300 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['mobilni']; ?></strong></li>
                                            <li><span>400 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['mobilni2']; ?></strong></li>
                                            <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['readaptacija']; ?></strong></li>
                                            <li><span>60 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['retenciona']; ?></strong></li>
                                            <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['selektivno']; ?></strong></li>
                                            <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['izrada']; ?></strong></li>
                                            <li><span>120 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['bruksosplint']; ?></strong></li>
                                            <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd> 
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <ul>
                                                <li></li>
                                                <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['rutinska']; ?></strong></li>
                                                <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['rutinska2']; ?></strong></li>
                                                <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['rutinska3']; ?></strong></li>
                                                <li><span>25 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['komplikovana']; ?></strong></li>
                                                <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['komplikovana2']; ?></strong></li>
                                                <li><span>60 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['komplikovana3']; ?></strong></li>
                                                <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['ekstirpacija']; ?></strong></li>
                                                <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['ekstirpacija2']; ?></strong></li>
                                                <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['biolosko']; ?></strong></li>
                                                <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['biolosko']; ?></strong></li>
                                                <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['bilosko']; ?></strong></li>
                                                <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['definitivno']; ?></strong></li>
                                                <li><span>40 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['definitivno2']; ?></strong></li>
                                                <li><span>60 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['definitivno3']; ?></strong></li>
                                                <li><span>30 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['direktno']; ?></strong></li>
                                                <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['indirektno']; ?></strong></li>
                                                <li><span>25 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['revizija']; ?></strong></li>
                                                <li><span>45 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['revizija2']; ?></strong></li>
                                                <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['revizija3']; ?></strong></li>
                                                <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['aplikacija']; ?></strong></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['Parodontologija']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <ul>
                                                <li></li>
                                                <li><span>25 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Parodontologija']['obrada']; ?></strong></li>
                                                <li><span>25 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Parodontologija']['uklanjanje']; ?></strong></li>
                                                <li><span>10 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Parodontologija']['smanjenje']; ?></strong></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['Pedodoncija']['zalijevanje']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <ul>
                                                <li></li>
                                                <li><span>20 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Pedodoncija']['zalijevanje']; ?></strong></li>
                                                <li><span>15 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Pedodoncija']['lokalna']; ?></strong></li>
                                                <li><span>50 KM</span><strong><?php echo $lang['page']['onama']['cijenovnik']['Pedodoncija']['aplikacija']; ?></strong></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                        </section>
                    </div>
                    <!--/ doctors carousel -->
                </div>
                <div class="grid-row">
                    <a name="section5"></a>
                    <div class="grid-col grid-col-9">
                        <!-- feedback -->
                        <article class="feedback">
                            <div class="widget-title"><?php echo $lang['page']['onama']['partneri']['title']; ?></div>										
                            <p><?php echo $lang['page']['onama']['partneri']['content']; ?></p>
                            <form action="php/partner-send.php" id="contactform">
                                <fieldset>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['partneri']['form']['imeprezime']; ?></label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['partneri']['form']['kotakttel']; ?></label>
                                            <input type="text" name="telefon">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label>Email:</label>
                                            <input type="text" name="email">
                                        </div>
                                    </div>
                                    <div class="clearfix captcha">
                                        <div class="captcha-wrapper">
                                            <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

                                            <input class="verify" type="text" id="verify3" name="verify" />
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <button type="submit" class="button" value="Submit" style="float: left;"><?php echo $lang['page']['onama']['partneri']['form']['submit']; ?></button>
                                    </div>
                                </fieldset>
                            </form>							
                        </article>
                        <!--/ feedback -->
                    </div>
                </div>
                <div class="grid-row">
                    <a name="section6"></a>
                    <div class="grid-col grid-col-12">
                        <!-- feedback -->
                        <article class="feedback">
                            <div class="widget-title"><?php echo $lang['page']['onama']['karijera']['title']; ?></div>										
                            <p><?php echo $lang['page']['onama']['karijera']['content']; ?></p>

                            <form action="php/career_send.php" id="careerform">
                                <fieldset>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['ime']; ?>:</label>
                                            <input type="text" name="ime">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['imerod']; ?>:</label>
                                            <input type="text" name="imerod">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['prezime']; ?>:</label>
                                            <input type="text" name="prezime">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['datumrodj']; ?>:</label>
                                            <input type="text" name="datumrodj">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['mjestorodj']; ?>:</label>
                                            <input type="text" name="mjestorodj">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['adresa']; ?>:</label>
                                            <input type="text" name="adresa">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['opstina']; ?>:</label>
                                            <input type="text" name="opstina">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['telefon']; ?>:</label>
                                            <input type="text" name="tel">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['email']; ?></label>
                                            <input type="text" name="emailadr">
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label>
                                                <?php echo $lang['page']['onama']['karijera']['form']['apliciram']; ?>
                                            </label>
                                            
                                            <ul class="lista-poslova">
                                                <li style="list-style:none;display: inline;">
                                                    <label>
                                                        <input type="radio" name="tip_posla" value="stomatolog" class="required" checked="checked">
                                                        <?php echo $lang['page']['onama']['karijera']['form']['stomatolog']; ?>
                                                    </label>
                                                    <label><input type="radio" name="tip_posla" value="tehnicar"><?php echo $lang['page']['onama']['karijera']['form']['tehnicar']; ?></label>                                         
                                                    <label><input type="radio" name="tip_posla" value="asistent"><?php echo $lang['page']['onama']['karijera']['form']['asistent']; ?></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['srednja']; ?></label>
                                            <textarea rows="6" name="srednja"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['faks']; ?></label>
                                            <textarea rows="6" name="faks"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['spec']; ?></label>
                                            <textarea rows="6" name="spec"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['engnivo']; ?></label>
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="engnivo" value="1" checked="checked">
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="engnivo" value="2">
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="engnivo" value="3">
                                                        3
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="engnivo" value="4">
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="engnivo" value="5">
                                                        5
                                                    </label>                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['njemnivo']; ?></label>
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="njemnivo" value="1" checked="checked">
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="njemnivo" value="2">
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="njemnivo" value="3">
                                                        3
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="njemnivo" value="4">
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="njemnivo" value="5">
                                                        5
                                                    </label>                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['italnivo']; ?></label>
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="italnivo" value="1" checked="checked">
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="italnivo" value="2">
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="italnivo" value="3">
                                                        3
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="italnivo" value="4">
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="italnivo" value="5">
                                                        5
                                                    </label>                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['slovnivo']; ?></label>
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="slovnivo" value="1" checked="checked">
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="slovnivo" value="2">
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="slovnivo" value="3">
                                                        3
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="slovnivo" value="4">
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="slovnivo" value="5">
                                                        5
                                                    </label>                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['svednivo']; ?></label>
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="svednivo" value="1" checked="checked">
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="svednivo" value="2">
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="svednivo" value="3">
                                                        3
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="svednivo" value="4">
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="svednivo" value="5">
                                                        5
                                                    </label>                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['radnaracunaru']; ?></label>
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radnaracunaru" value="1" checked="checked">
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radnaracunaru" value="2">
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radnaracunaru" value="3">
                                                        3
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="radnaracunaru" value="4">
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radnaracunaru" value="5">
                                                        5
                                                    </label>                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['zadnjeradno']; ?>:</label>
                                            <textarea rows="6" name="zadnjeradno"></textarea>
                                        </div>
                                    </div>

                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="vozacka">
                                                        <?php echo $lang['page']['onama']['karijera']['form']['vozacka']; ?>
                                                    </label>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="prekovremeno">
                                                        <?php echo $lang['page']['onama']['karijera']['form']['prekovremeno']; ?>
                                                    </label>                                                   
                                                </li>
                                            </ul>        
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input lista-poslova">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="vikednom">
                                                        <?php echo $lang['page']['onama']['karijera']['form']['vikednom']; ?>
                                                    </label>
                                                </li>
                                            </ul>  
                                        </div>
                                    </div>
                                    <div class="clearfix captcha">
                                        <div class="captcha-wrapper">
                                            <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

                                            <input class="verify" type="text" id="verify-career" name="verify-career" />
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <button type="submit" class="button" value="Submit" style="float: left;"><?php echo $lang['page']['onama']['partneri']['form']['submit']; ?></button>
                                    </div>
                                </fieldset>
                            </form>							
                        </article>
                        <!--/ feedback -->
                    </div>
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