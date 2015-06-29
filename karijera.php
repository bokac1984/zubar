<?php
include_once("lang/lang.php");
include_once("includes/config.php");
include_once 'php/CSFR.Class.php';
if(!session_id()) {
	session_start();
}
error_reporting(0);
$csrf = new CSFR();
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
$formNamesKeys = array(
    "ime", 
    "imerod",
    "prezime",
    "datumrodj",
    "mjestorodj",
    "adresa",
    "opstina",
    "emailadr",
    "srednja",
    "faks",
    "spec", 
    "tel",
    'zadnjeradno',
    'verify-career',
    'portret'
);
$form_names = $csrf->form_names($formNamesKeys, false);
$posted = false;
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ourMail = $emailAddress; //Insert your email address here
    $required_fields = array(
        $form_names["ime"] => $lang['karijera']['form']['ime']['error'], 
        $form_names["imerod"] => $lang['karijera']['form']['imerod']['error'],
        $form_names["prezime"] => $lang['karijera']['form']['prezime']['error'],
        $form_names["datumrodj"] => $lang['karijera']['form']['datumrodj']['error'],
        $form_names["mjestorodj"] => $lang['karijera']['form']['mjestorodj']['error'],
        $form_names["adresa"] => $lang['karijera']['form']['adresa']['error'],
        $form_names["opstina"] => $lang['karijera']['form']['opstina']['error'],
        $form_names["emailadr"] => $lang['karijera']['form']['emailadr']['error'],
        $form_names["srednja"] => $lang['karijera']['form']['srednja']['error'],
        $form_names["faks"] => $lang['karijera']['form']['faks']['error'],
        $form_names["spec"] => $lang['karijera']['form']['spec']['error'], 
        $form_names["tel"] => $lang['karijera']['form']['tel']['error'],
        $form_names['zadnjeradno'] => $lang['karijera']['form']['zadnjeradno']['error'],
        $form_names['verify-career'] => $lang['karijera']['form']['captcha']['error'],
        $form_names['portret'] => $lang['karijera']['form']['portret']['error'],
    );

    $pre_messagebody_info = "";
    $subject = "Website forma: Karijera";
    $errors = array();
    $data = array();
    // Check if token id and token value are valid.
    if ($csrf->check_valid('post')) {
	$data = array(
            $form_names["ime"] => htmlspecialchars($_POST[$form_names['ime']]), 
            $form_names["imerod"] => htmlspecialchars($_POST[$form_names['imerod']]),
            $form_names["prezime"] => htmlspecialchars($_POST[$form_names['prezime']]),
            $form_names["datumrodj"] => htmlspecialchars($_POST[$form_names['datumrodj']]),
            $form_names["mjestorodj"] => htmlspecialchars($_POST[$form_names['mjestorodj']]),
            $form_names["adresa"] => htmlspecialchars($_POST[$form_names['adresa']]),
            $form_names["opstina"] => htmlspecialchars($_POST[$form_names['opstina']]),
            $form_names["emailadr"] => htmlspecialchars($_POST[$form_names['emailadr']]),
            $form_names["srednja"] => trim(htmlspecialchars($_POST[$form_names['srednja']])),
            $form_names["faks"] => trim(htmlspecialchars($_POST[$form_names['faks']])),
            $form_names["spec"] => trim(htmlspecialchars($_POST[$form_names['spec']])),
            $form_names["tel"] => htmlspecialchars($_POST[$form_names['tel']]),
            $form_names['zadnjeradno'] => htmlspecialchars($_POST[$form_names['zadnjeradno']]),
            $form_names['verify-career'] => htmlspecialchars($_POST[$form_names['verify-career']]),
        );
        $data=array_map('trim',$data);
        $i = 0;
        $dataForValues = array();
        foreach ($data as $item) {
            $dataForValues[$formNamesKeys[$i++]] = $item;
        }
        //check for required and assemble message
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $name = strtolower(trim($key));
                if ($name == $form_names['email']) {
                    if (!check_email_address($value)) {
                        $errors[$name] = $lang['karijera']['form']['emailadr']['error'];
                    }
                    continue;
                }
                if (array_key_exists($name, $required_fields)) {
                    if (empty($value)) {
                        $errors[$name] = $required_fields[$name];
                    }
                }
            }
        }
        $result = array(
            "is_errors" => 0,
            "info" => ""
        );
        // check file is uploaded
        $data[$form_names['portret']] = $_FILES[$form_names['portret']];
        $allowedExtensions = array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png'
        );
        // da li postoji greska sa uploadom fajla
        if (
                !isset($data[$form_names['portret']]['error']) ||
                is_array($data[$form_names['portret']]['error'])
        ) {
            $errors[$form_names['portret']] = $lang['karijera']['form']['portret']['error'];
        }


        if (extension_loaded('file_info')) {
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            if (false === $ext = array_search(
                    $finfo->file($data[$form_names['portret']]['tmp_name']), $allowedExtensions, true
                    )) {
                $errors[$form_names['portret']] = $lang['portret']['mime']['error'];
            }
        } else {
            if (!in_array($data[$form_names['portret']]['type'], $allowedExtensions)) {
                $errors[$form_names['portret']] = $lang['portret']['mime']['error'];
            }
        }


        if ($data[$form_names['portret']]['size'] == 0) {
            $errors[$form_names['portret']] = $required_fields[$form_names['portret']];
        } elseif ($data[$form_names['portret']]['size'] > $imageSize) {
            $errors[$form_names['portret']] = $lang['portret']['size']['error'] . $imageSize / 1048576 . ' MB.';
        }
        // end of check
        if (!empty($errors)) {
            $result['is_errors'] = 1;
            $result['info'] = $errors;
        }
                // check for errors, if none, proceed to sending email
        if (empty($errors)) {
            require_once('php/PHPMailer/class.phpmailer.php');

            $mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch

            try {
                $pre_messagebody_info.="<strong>Ime (ime roditelja) Prezime</strong>" . ": " . $data[$form_names['ime']] 
                        . " (" . $data[$form_names['imerod']] . ") ". $data[$form_names['prezime']]."\r\n";
                $pre_messagebody_info.="<strong>Datum rođenja:</strong>" . ": " . $data[$form_names['datumrodj']] . "\r\n";
                $pre_messagebody_info.="<strong>Mjesto rođenja</strong>" . ": " . $data[$form_names['mjestorodj']] . "\r\n";
                $pre_messagebody_info.="<strong>Adresa</strong>" . ": " . $data[$form_names['adresa']] . "\r\n";
                $pre_messagebody_info.="<strong>Opstina</strong>" . ": " . $data[$form_names['opstina']] . "\r\n";
                $pre_messagebody_info.="<strong>Telefon</strong>" . ": " . $data[$form_names['tel']] . "\r\n";
                $pre_messagebody_info.="<strong>E-mail</strong>" . ": " . $data[$form_names['emailadr']] . "\r\n";
                $pre_messagebody_info.="<strong>Apliciram za</strong>" . ": " . htmlspecialchars($_POST['tip_posla']) . "\r\n";
                $pre_messagebody_info.="<strong>Završena srednja</strong>" . ": " . $data[$form_names['srednja']] . "\r\n";
                $pre_messagebody_info.="<strong>Završen fakultet</strong>" . ": " . $data[$form_names['faks']]. "\r\n";
                $pre_messagebody_info.="<strong>Specijalizacija</strong>" . ": " . $data[$form_names['spec']] . "\r\n";
                $engNivo = htmlspecialchars($_POST['engnivo']);
                $italNivo = htmlspecialchars($_POST['italnivo']);
                $njemaNivo = htmlspecialchars($_POST['njemnivo']);
                $slovNivo = htmlspecialchars($_POST['slovnivo']);
                $svedNivo = htmlspecialchars($_POST['svednivo']);
                $radNaRacunaru = htmlspecialchars($_POST['radnaracunaru']);
                $pre_messagebody_info.="<strong>Nivo engleskog jezika</strong>" . ": " . $engNivo . "\r\n";
                $pre_messagebody_info.="<strong>Nivo italijanskog jezika</strong>" . ": " . $italNivo . "\r\n";
                $pre_messagebody_info.="<strong>Nivo njemačkog jezika</strong>" . ": " . $njemaNivo . "\r\n";
                $pre_messagebody_info.="<strong>Nivo slovenačkog jezika</strong>" . ": " . $slovNivo . "\r\n";
                $pre_messagebody_info.="<strong>Nivo švedskog jezika</strong>" . ": " . $svedNivo . "\r\n";
                $pre_messagebody_info.="<strong>Nivo poznavanja rada na računaru</strong>" . ": " . $radNaRacunaru . "\r\n";
                $pre_messagebody_info.="<strong>Poslednje radno iskustvo</strong>" . ": " . $data[$form_names['zadnjeradno']] . "\r\n";
                $vozackaD = isset($_POST['vozacka']) ? "DA" : "NE";
                $prekovremenoRad = isset($_POST['prekovremeno']) ? "DA" : "NE";
                $vikednomRadim = isset($_POST['vikednom']) ? "DA" : "NE";
                $pre_messagebody_info.="<strong>Posjedujem vozačku dozvolu B kategorije</strong>" . ": " . $vozackaD . "\r\n";
                $pre_messagebody_info.="<strong>Spreman/na sam na plaćeni prekovremeni rad</strong>" . ": " . $prekovremenoRad . "\r\n";
                $pre_messagebody_info.="<strong>Spreman/na sam na plaćeni rad vikendom i praznikom</strong>" . ": " . $vikednomRadim . "\r\n";
                $pre_messagebody_info .= "\r\n U prilogu je fotografija.";
                echo $pre_messagebody_info;exit();
                $mail->isHTML(false);
                $mail->AddAddress($karijeraEmail, 'Stomatologija Kecman'); // adresa gdje se salju podaci sa forme
                $mail->SetFrom($noreplyAddressForEmail, 'Stomatologija Kecman'); // ovo je adresa koja salje na gornju email adresu
                $mail->AddReplyTo(htmlspecialchars($data[$form_names['email']]), htmlspecialchars($data[$form_names['imeprezime']])); // ovaoj je lik koji salje formu na sajt mail
                $mail->Subject = 'Kontakt sa forme: "Karijera"';
                $mail->Body = $pre_messagebody_info;
                $mail->AddAttachment($data[$form_names['portret']]['tmp_name'], htmlspecialchars($data[$form_names['portret']]['name']));      // attachment
                $mail->Send();
                $success['message'] = $lang['page']['inernacionala']['email']['success'];
            } catch (phpmailerException $e) {
                $errors['mail'] = $e->errorMessage(); //Pretty error messages from PHPMailer
            } catch (Exception $e) {
                $errors['mail'] = $e->getMessage(); //Boring error messages from anything else!
            }
        }
    }
    // ponovo generisi nazive za formu
    $form_names = $csrf->form_names($formNamesKeys, true);
    // signaliziraj da je forma postovana
    $posted = true;
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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
                        <img src="img/pages/karijera.jpg" alt="" class="ls-bg">
                    </div>
                </section>
            </div>
            <!--/ slider -->
            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1><?php echo $lang['page']['onama']['karijera']['title']; ?></h1>

                    <nav class="bread-crumbs">
                        <a href="/"><?php echo $lang['menu']['home'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['onama']['title'] ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#"><?php echo $lang['page']['onama']['karijera']['title']; ?></a>
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
                            <p><?php echo $lang['page']['onama']['karijera']['content']; ?></p>

                            <form action="" id="careerform" method="post" enctype="multipart/form-data">
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
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['ime']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['ime']; ?>" name="<?php echo $form_names['ime']; ?>" <?php echo (!empty($dataForValues['ime']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['imerod']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['imerod']; ?>" name="<?php echo $form_names['imerod']; ?>" <?php echo (!empty($dataForValues['imerod']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['prezime']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['prezime']; ?>" name="<?php echo $form_names['prezime']; ?>" <?php echo (!empty($dataForValues['prezime']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['portret']; ?>:</label>
                                            <input type="file" name="<?php echo $form_names['portret']; ?>" <?php echo (!empty($errors[$form_names['portret']]) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['datumrodj']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['datumrodj']; ?>" name="<?php echo $form_names['datumrodj']; ?>" id="datepicker" <?php echo (!empty($dataForValues['datumrodj']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['mjestorodj']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['mjestorodj']; ?>" name="<?php echo $form_names['mjestorodj']; ?>" <?php echo (!empty($dataForValues['mjestorodj']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['adresa']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['adresa']; ?>" name="<?php echo $form_names['adresa']; ?>" <?php echo (!empty($dataForValues['adresa']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['opstina']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['opstina']; ?>" name="<?php echo $form_names['opstina']; ?>" <?php echo (!empty($dataForValues['opstina']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['telefon']; ?>:</label>
                                            <input type="text" value="<?php echo $dataForValues['tel']; ?>" name="<?php echo $form_names['tel']; ?>" <?php echo (!empty($dataForValues['tel']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['email']; ?></label>
                                            <input type="text" value="<?php echo $dataForValues['emailadr']; ?>" name="<?php echo $form_names['emailadr']; ?>" <?php echo (!empty($dataForValues['emailadr']) || !$posted) ? "" : 'class="wrong-data"'; ?>>
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
                                            <textarea wrap="physical" rows="6" name="<?php echo $form_names['srednja']; ?>" <?php echo (!empty($dataForValues['srednja']) || !$posted) ? "" : 'class="wrong-data"'; ?>><?php echo $dataForValues['srednja']; ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['faks']; ?></label>
                                            <textarea wrap="physical" rows="6" name="<?php echo $form_names['faks']; ?>" <?php echo (!empty($dataForValues['faks']) || !$posted) ? "" : 'class="wrong-data"'; ?>><?php echo $dataForValues['faks']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['spec']; ?></label>
                                            <textarea wrap="physical" rows="6" name="<?php echo $form_names['spec']; ?>" <?php echo (!empty($dataForValues['spec']) || !$posted) ? "" : 'class="wrong-data"'; ?>><?php echo $dataForValues['spec']; ?> </textarea>
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
                                            <textarea rows="6" name="<?php echo $form_names['zadnjeradno']; ?>" <?php echo (!empty($dataForValues['zadnjeradno']) || !$posted) ? "" : 'class="wrong-data"'; ?>><?php echo $dataForValues['zadnjeradno']; ?> </textarea>
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

                                            <input class="verify <?php echo (!empty($dataForValues['verify-career']) || !$posted) ? "" : 'wrong-data'; ?>" type="text" id="verify-career" name="<?php echo $form_names['verify-career']; ?>" />
                                        </div>
                                    </div>
                                    <input type="hidden" name="<?php echo $token_id; ?>" value="<?php echo $token_value; ?>" />
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
        <!-- copyrights -->
        <?php include("includes/javascripts.php"); ?>
        <!--/ copyrights -->
    </body>
</html>