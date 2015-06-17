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