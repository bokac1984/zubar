<?php
if(!session_id()) {
    session_start();
}
error_reporting(0);
include_once("lang/lang.php");
include 'php/CSFR.Class.php';
$csrf = new CSFR();
//echo "SESSION <pre>";print_r($_SESSION);echo "</pre><br>";
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
$posted = false;
// Generate Random Form Names
$form_names = $csrf->form_names(array('imeprezime', 'email', 'rtg', 'verifikuj'), false);
$required_fields = array(
    $form_names['imeprezime'] => $lang['page']['inernacionala']['imeprezime']['error'],
    $form_names['email'] => $lang['page']['inernacionala']['email']['error'],
    $form_names['rtg'] => $lang['page']['inernacionala']['rtg']['error'],
    $form_names['verifikuj'] => $lang['page']['inernacionala']['captcha']['error']
);
//echo "POST <pre>";print_r($_POST);echo "</pre><br>";
//echo "required_fields <pre>";print_r($required_fields);echo "</pre><br>";
//echo "FILES <pre>";print_r($_FILES);echo "</pre><br>";
if (isset($_POST[$form_names['imeprezime']]
        )
    ) {
    // Check if token id and token value are valid.
    if ($csrf->check_valid('post')) {
        // Get the Form Variables.
        $data[$form_names['imeprezime']] = htmlspecialchars($_POST[$form_names['imeprezime']]);
        $data[$form_names['email']] = htmlspecialchars($_POST[$form_names['email']]);
        $data[$form_names['verifikuj']]= htmlspecialchars($_POST[$form_names['verifikuj']]);
        // pregledaj da li su prisutni svi potrebni podaci
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $name = strtolower(trim($key));
                if (array_key_exists($name, $required_fields)) {
                    //echo $name." Vrijednost <br>";
                    if (empty($value)) {
                        $errors[$name] = $required_fields[$name];
                    }
                }
            }
        }
        // da li je fajl odabran
        $data[$form_names['rtg']] = $_FILES[$form_names['rtg']];
        if ($data[$form_names['rtg']]['size'] == 0) {
            echo 'nema fajla';
           $errors[$form_names['rtg']] = $required_fields[$form_names['rtg']]; 
        } 
    }
    // Regenerate a new random value for the form.
    $form_names = $csrf->form_names(array('imeprezime', 'email', 'rtg', 'verifikuj'), true);
    $posted = true;
}
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
        <link rel="stylesheet" type="text/css" href="css/internacionala.css">
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
                        <img src="img/pages/internacionalnipacijenti.jpg" alt="" class="ls-bg">
                    </div>
                </section>
            </div>
            <!--/ slider -->
            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1><?php echo $lang['page']['inernacionala']['title'] ?></h1>					
                    <nav class="bread-crumbs">
                        <a href="/"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['inernacionala']['title'] ?></a>
                    </nav>
                </div>
            </section>
            <!--/ page title -->

            <main class="page-content">
                <div class="grid-row">
                    <a name="section5"></a>
                    <div class="grid-col grid-col-9">
                        <!-- feedback -->
                        <article class="feedback">
                            <div class="widget-title"><?php echo $lang['page']['inernacionala']['title']; ?></div>										
                            <p><?php echo $lang['page']['inernacionala']['content']; ?></p><br>
                            <p><?php echo $lang['page']['inernacionala']['forma']['informacije']; ?></p>
                            <form action="internacionalni-pacijenti.php" id="internacionala" enctype="multipart/form-data" method="post">
                                <fieldset>
                                    <?php if (!empty($errors)) { ?>
                                    <div id="contact_form_responce" style="display: block;">
                                        <div class="wpb_alert">
                                            <div class="messagebox_text clearfix"><h1></h1>
                                                <p>
                                                    <?php
                                                    foreach($errors as $k => $v){
                                                        echo "$v<br>";
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['inernacionala']['forma']['imeprezime']; ?></label>
                                            <input type="text" name="<?php echo $form_names['imeprezime']; ?>" <?php echo (!empty($errors[$form_names['imeprezime']]) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label>Email:</label>
                                            <input type="text" name="<?php echo $form_names['email']; ?>" <?php echo !empty($errors[$form_names['email']]) || !$posted ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['inernacionala']['forma']['rtg']; ?></label>
                                            <input type="file" name="<?php echo $form_names['rtg']; ?>" <?php echo !empty($errors[$form_names['rtg']]) || !$posted ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['inernacionala']['forma']['dodatneinfo']; ?></label>
                                            <textarea cols="30" rows="5" name="<?php echo $form_names['dodatneinfo']; ?>"></textarea>                                            
                                        </div>
                                    </div>
                                    <div class="clearfix captcha">
                                        <div class="captcha-wrapper">
                                            <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

                                            <input class="verify <?php echo !empty($errors[$form_names['verifikuj']]) || !$posted ? "" : ' wrong-data'; ?>" type="text" id="verify" name="<?php echo $form_names['verifikuj']; ?>" >
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <button type="submit" class="button" value="Submit" style="float: left;"><?php echo $lang['page']['onama']['partneri']['form']['submit']; ?></button>
                                    </div>
                                    <input type="hidden" name="<?php echo $token_id; ?>" value="<?php echo $token_value; ?>" />
                                </fieldset>
                            </form>							
                        </article>
                        <!--/ feedback -->
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