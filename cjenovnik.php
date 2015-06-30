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
                    <h1><?php echo $lang['page']['onama']['cijenovnik']['title']; ?></h1>

                    <nav class="bread-crumbs">
                        <a href="/"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['onama']['title'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['onama']['cijenovnik']['title'] ?></a>
                    </nav>
                </div>
            </section>
            <!--/ page title -->

            <main class="page-content">
                <div class="grid-row">
                    <a name="section4"></a>
                    <div class="grid-col grid-col-12">
                        <section class="detailed-services wpb_content_element">
                            <p><?php echo $lang['page']['onama']['cijenovnik']['subcontent'] ?></p> 
                            <br>
                            <dl>
                                <dt class="opened"><i class="fa fa-check"></i><?php echo $lang['page']['onama']['cijenovnik']['dijagnostika']['title']; ?></dt>
                                <dd style="display: none;">
                                    <div class="row">
                                        <div class="col cjenovnik">
                                            <li></li>
                                            <li><span><?php echo $lang['cijenovnik']['radiogram']['cijena'] ;?></span><strong><?php echo $lang['cijenovnik']['radiogram']['title']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['ortopantomogram']['cijena']; ?></span><strong><?php echo $lang['cijenovnik']['ortopantomogram']['title']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['opsti-pregled']['cijena']; ?></span><strong><?php echo $lang['cijenovnik']['opsti-pregled']['title']; ?></strong></li>
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
                                            <li><span><?php echo $lang['cijenovnik']['mlijecni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['mlijecni']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['stalni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['stalni']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['gangrenozni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['gangrenozni']; ?></strong></li>
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
                                            <li><span><?php echo $lang['cijenovnik']['evetricfrontalni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['evetricfrontalni']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['premolari']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['premolari']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['molari']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['molari']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['evetricfrontalni2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['evetricfrontalni2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['premolari2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['premolari2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['molari2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['molari2']; ?></strong></li>
                                            
                                            <li><span><?php echo $lang['cijenovnik']['tropovrsinski']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['tropovrsinski']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['tropovrpremolari']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['tropovrpremolari']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['tropovrpmolari']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['tropovrpmolari']; ?></strong></li>
                                            
                                            <li><span><?php echo $lang['cijenovnik']['amalgam']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['amalgam']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['amalgam2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['amalgam2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['amalgamremove']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['amalgamremove']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['kompozitremove']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['kompozitremove']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['jonomerispun']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['jonomerispun']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['jonomerpodl']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['jonomerpodl']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['zoom']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['zoom']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['dash']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['dash']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['press']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['press']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['airjet']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['airjet']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['poliranje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['poliranje']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['avitalno']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['avitalno']; ?></strong></li>                                        
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
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['inline']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['inline']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['press']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['press']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['cirkonijum']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['cirkonijum']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['reparatura4']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura4']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['uklanjanje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['uklanjanje']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['cementiranje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['cementiranje']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['pressinlej']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['pressinlej']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['privremena']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['privremena']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['privremena2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['privremena2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['privremena3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['privremena3']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['livena']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['livena']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['livena2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['livena2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['nadogradnja']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['nadogradnja']; ?></strong></li>
                                            
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['konfekcijskikocic']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['konfekcijskikocic']; ?></strong></li>
                                            
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['nadogradnja2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['nadogradnja2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['nadogradnja3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['nadogradnja3']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['skeletirana']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['skeletirana']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['atecmen']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['atecmen']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['akrilatna']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['akrilatna']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['akrilatna2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['akrilatna2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['akrilatna3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['akrilatna3']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['reparatura']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['reparatura2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['reparatura3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['reparatura3']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['podlaganje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['podlaganje']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['podlaganje2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['podlaganje2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['periodontalni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['periodontalni']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Zubna']['athezivni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Zubna']['athezivni']; ?></strong></li>
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
                                            <li><span><?php echo $lang['cijenovnik']['Implantologija']['dentalni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['dentalni']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Implantologija']['abatment']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['abatment']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Implantologija']['metalkeramicka']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['metalkeramicka']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Implantologija']['mdiimplantati']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['mdiimplantati']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Implantologija']['augmentacija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['augmentacija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Implantologija']['podizanje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Implantologija']['podizanje']; ?></strong></li>
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
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['lokalna']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['lokalna']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['lokalna2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['lokalna2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['infiltraciona']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['infiltraciona']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['infiltraciona2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['infiltraciona2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['ekstrakcija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['ekstrakcija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['rutinska']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rutinska']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['komplikovana']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['komplikovana']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['hirurska']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['hirurska']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['hirurska2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['hirurska2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['rutinska2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rutinska2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['zaostalikoren-komplikovan']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['zaostalikoren-komplikovan']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['hirurska3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['hirurska3']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['ekstrakcija2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['ekstrakcija2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['hirurimpaktiranog']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['hirurimpaktiranog']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['terapija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['terapija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['rutinsko']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rutinsko']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['usivanje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['usivanje']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['apikotomija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['apikotomija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['cistektomija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['cistektomija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['gingivektomija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['gingivektomija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['cirkumcizija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['cirkumcizija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['incizija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['incizija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['frenulektomija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['frenulektomija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['rezanj']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['rezanj']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['nivelacija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['nivelacija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Oralna']['primarno']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Oralna']['primarno']; ?></strong></li>
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
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['fiksni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['fiksni']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['fiksni2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['fiksni2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['fiksni3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['fiksni3']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['zamjena']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['zamjena']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['zamjena2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['zamjena2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['zamjena3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['zamjena3']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['mobilni']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['mobilni']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['mobilni2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['mobilni2']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['readaptacija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['readaptacija']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['retenciona']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['retenciona']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['selektivno']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['selektivno']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['izrada']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['izrada']; ?></strong></li>
                                            <li><span><?php echo $lang['cijenovnik']['Ortodoncija']['bruksosplint']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Ortodoncija']['bruksosplint']; ?></strong></li>
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
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['rutinska']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['rutinska']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['rutinska2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['rutinska2']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['rutinska3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['rutinska3']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['komplikovana']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['komplikovana']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['komplikovana2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['komplikovana2']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['komplikovana3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['komplikovana3']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['ekstirpacija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['ekstirpacija']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['ekstirpacija2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['ekstirpacija2']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['biolosko']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['biolosko']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['biolosko']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['biolosko']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['bilosko']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['bilosko']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['definitivno']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['definitivno']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['definitivno2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['definitivno2']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['definitivno3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['definitivno3']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['direktno']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['direktno']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['indirektno']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['indirektno']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['revizija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['revizija']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['revizija2']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['revizija2']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['revizija3']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['revizija3']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Endodoncija']['aplikacija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Endodoncija']['aplikacija']; ?></strong></li>
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
                                                <li><span><?php echo $lang['cijenovnik']['Parodontologija']['obrada']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Parodontologija']['obrada']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Parodontologija']['uklanjanje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Parodontologija']['uklanjanje']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Parodontologija']['smanjenje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Parodontologija']['smanjenje']; ?></strong></li>
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
                                                <li><span><?php echo $lang['cijenovnik']['Pedodoncija']['zalijevanje']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Pedodoncija']['zalijevanje']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Pedodoncija']['lokalna']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Pedodoncija']['lokalna']; ?></strong></li>
                                                <li><span><?php echo $lang['cijenovnik']['Pedodoncija']['aplikacija']['cijena']; ?></span><strong><?php echo $lang['page']['onama']['cijenovnik']['Pedodoncija']['aplikacija']; ?></strong></li>
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