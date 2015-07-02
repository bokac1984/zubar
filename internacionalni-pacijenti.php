<?php
if (!session_id()) {
    session_start();
}
error_reporting(0);
include_once("lang/lang.php");
include 'php/CSFR.Class.php';
include 'includes/config.php';

$csrf = new CSFR();

$success = array();
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
$form_names = $csrf->form_names(array('imeprezime', 'email', 'rtg', 'verifikuj'), false);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $posted = false;
    // Generate Random Form Names
    
    $required_fields = array(
        $form_names['imeprezime'] => $lang['page']['inernacionala']['imeprezime']['error'],
        $form_names['email'] => $lang['page']['inernacionala']['email']['error'],
        $form_names['rtg'] => $lang['page']['inernacionala']['rtg']['error'],
        $form_names['verifikuj'] => $lang['page']['inernacionala']['captcha']['error']
    );
    // Check if token id and token value are valid.
    if ($csrf->check_valid('post')) {
        // Get the Form Variables.
        $data[$form_names['imeprezime']] = htmlspecialchars($_POST[$form_names['imeprezime']]);
        $data[$form_names['email']] = htmlspecialchars($_POST[$form_names['email']]);
        $data[$form_names['verifikuj']] = htmlspecialchars($_POST[$form_names['verifikuj']]);
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
                if ($name == $form_names['email']) {
                    if (!check_email_address($value)) {
                        $errors[$name] = $lang['page']['inernacionala']['email2']['error'];
                    }
                }
            }
        }
        // da li je fajl odabran
        $data[$form_names['rtg']] = $_FILES[$form_names['rtg']];
        $data[$form_names['dodatne']] = $_FILES[$form_names['rtg']];
        $allowedExtensions = array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png'
        );
        // da li postoji greska sa uploadom fajla
        if (
                !isset($data[$form_names['rtg']]['error']) ||
                is_array($data[$form_names['rtg']]['error'])
        ) {
            $errors[$form_names['rtg']] = $lang['page']['rtg']['general']['error'];
        }


        if (extension_loaded('file_info')) {
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            if (false === $ext = array_search(
                    $finfo->file($data[$form_names['rtg']]['tmp_name']), $allowedExtensions, true
                    )) {
                $errors[$form_names['rtg']] = $lang['page']['rtg']['mime']['error'];
            }
        } else {
            if (!in_array($data[$form_names['rtg']]['type'], $allowedExtensions)) {
                $errors[$form_names['rtg']] = $lang['page']['rtg']['mime']['error'];
            }
        }


        if ($data[$form_names['rtg']]['size'] == 0) {
            $errors[$form_names['rtg']] = $required_fields[$form_names['rtg']];
        } elseif ($data[$form_names['rtg']]['size'] > $imageSize) {
            $errors[$form_names['rtg']] = $lang['page']['rtg']['size']['error'] . $imageSize / 1048576 . ' MB.';
        }

        // check for errors, if none, proceed to sending email
        if (empty($errors)) {
            require_once('php/PHPMailer/class.phpmailer.php');

            $mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch

            try {
                $body = "Imate novi kontakt sa forme \"Internacionalni pacijenti\" od\r\n";
                $body .= htmlspecialchars($data[$form_names['imeprezime']]) . ": " . htmlspecialchars($data[$form_names['email']]) . "\r\n";
                if (!empty($_POST['dodatneinfo'])) {
                    $body .= "Dodatne informacije sa forme: \r\n" . htmlspecialchars($_POST['dodatneinfo']) . "\r\n";
                }
                $body .= "Prilog je dodat u ovaj mail.\r\n";
                $mail->isHTML(false);
                $mail->AddAddress($emailAddress, 'Stomatologija Kecman'); // adresa gdje se salju podaci sa forme
                $mail->SetFrom($noreplyAddressForEmail, 'Stomatologija Kecman'); // ovo je adresa koja salje na gornju email adresu
                $mail->AddReplyTo(htmlspecialchars($data[$form_names['email']]), htmlspecialchars($data[$form_names['imeprezime']])); // ovaoj je lik koji salje formu na sajt mail
                $mail->Subject = 'Kontakt sa forme: "Internacionalni pacijenti"';
                $mail->Body = $body;
                $mail->AddAttachment($data[$form_names['rtg']]['tmp_name'], htmlspecialchars($data[$form_names['rtg']]['name']));      // attachment
                $mail->Send();
                $success['message'] = $lang['page']['inernacionala']['email']['success'];
            } catch (phpmailerException $e) {
                $errors['mail'] = $e->errorMessage(); //Pretty error messages from PHPMailer
            } catch (Exception $e) {
                $errors['mail'] = $e->getMessage(); //Boring error messages from anything else!
            }
        } else {
            $posted = true;
        }
    }
    // Regenerate a new random value for the form.
    $form_names = $csrf->form_names(array('imeprezime', 'email', 'rtg', 'verifikuj'), true);
}

function check_email_address($email) {
// First, we check that there's one @ symbol,
// and that the lengths are right.
    if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
// Email invalid because wrong number of characters
// in one section or wrong number of @ symbols.
        return false;
    }
// Split it into sections to make life easier
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
        if
        (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
в†Є'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
            return false;
        }
    }
// Check if domain is IP. If not,
// it should be valid domain name
    if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
            return false; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if
            (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
в†Є([A-Za-z0-9]+))$", $domain_array[$i])) {
                return false;
            }
        }
    }
    return true;
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
                                                        foreach ($errors as $k => $v) {
                                                            echo "$v<br>";
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else if (!empty($success)) { ?>
                                        <div id="contact_form_responce" style="display: block;">
                                            <div class="wpb_alert">
                                                <div class="messagebox_text clearfix"><h1></h1>
                                                    <p>
                                                        <?php
                                                        echo $success['message'];
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
                                            <input type="text" name="<?php echo $form_names['email']; ?>" <?php echo!empty($errors[$form_names['email']]) || !$posted ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['inernacionala']['forma']['rtg']; ?></label>
                                            <input type="file" name="<?php echo $form_names['rtg']; ?>" <?php echo!empty($errors[$form_names['rtg']]) || !$posted ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['inernacionala']['forma']['dodatneinfo']; ?></label>
                                            <textarea cols="30" rows="5" name="dodatneinfo"></textarea>                                            
                                        </div>
                                    </div>
                                    <div class="clearfix captcha">
                                        <div class="captcha-wrapper">
                                            <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

                                            <input class="verify <?php echo!empty($errors[$form_names['verifikuj']]) || !$posted ? "" : ' wrong-data'; ?>" type="text" id="verify" name="<?php echo $form_names['verifikuj']; ?>" >
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
        <!-- copyrights -->
        <?php include("includes/javascripts.php"); ?>
        <!--/ copyrights -->
    </body>
</html>