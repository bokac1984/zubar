<?php
include_once("lang/lang.php");
include_once("includes/config.php");
if(!session_id()) {
	session_start();
}
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ourMail = $emailAddress; //Insert your email address here
//echo "<pre>";
//print_r($_REQUEST);
//echo "</pre>";
        $required_fields = array(
            "ime" => $lang['karijera']['form']['ime']['error'], 
            "imerod" => $lang['karijera']['form']['imerod']['error'],
            "prezime" => $lang['karijera']['form']['prezime']['error'],
            "datumrodj" => $lang['karijera']['form']['datumrodj']['error'],
            "mjestorodj" => $lang['karijera']['form']['mjestorodj']['error'],
            "adresa" => $lang['karijera']['form']['adresa']['error'],
            "opstina" => $lang['karijera']['form']['opstina']['error'],
            "emailadr" => $lang['karijera']['form']['emailadr']['error'],
            "srednja" => $lang['karijera']['form']['srednja']['error'],
            "faks" => $lang['karijera']['form']['faks']['error'],
            "spec" => $lang['karijera']['form']['spec']['error'], 
            "tel" => $lang['karijera']['form']['tel']['error'],
            "engnivo" => $lang['karijera']['form']['engnivo']['error'],
            "slovnivo" => $lang['karijera']['form']['slovnivo']['error'],
            "italnivo" => $lang['karijera']['form']['italnivo']['error'],
            "njemnivo" => $lang['karijera']['form']['njemnivo']['error'],
            'svednivo' => $lang['karijera']['form']['svednivo']['error'],
            'radnaracunaru' => $lang['karijera']['form']['radnaracunaru']['error'],
            'zadnjeradno' => $lang['karijera']['form']['zadnjeradno']['error'],
            'vozacka' => $lang['karijera']['form']['vozacka']['error'],
            'prekovremeno' => $lang['karijera']['form']['prekovremeno']['error'],
            'vikednom' => $lang['karijera']['form']['vikednom']['error'],
            'verify-career' => $lang['karijera']['form']['captcha']['error']
        );
        $pre_messagebody_info = "";
        $subject = "Website forma: Karijera";
        $errors = array();
        $data = array();
        parse_str($_POST['values'], $data);
		
        //check for required and assemble message
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $name = strtolower(trim($key));
                if (array_key_exists($name, $required_fields)) {
                    if (empty($value)) {
                        $errors[$name] = $required_fields[$name];
                    }
                }

                if ($name == "email") {
                    if (!check_email_address($value)) {
                        $errors[$name] = "Unijeli ste pogrešnu email adresu!";
                    }
                }
            }
        }
        $result = array(
            "is_errors" => 0,
            "info" => ""
        );
        if (!empty($errors)) {
            $result['is_errors'] = 1;
            $result['info'] = $errors;
        }
                // check for errors, if none, proceed to sending email
        if (empty($errors)) {
            require_once('php/PHPMailer/class.phpmailer.php');

            $mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch

            try {
                $pre_messagebody_info.="<strong>Ime (ime roditelja) Prezime</strong>" . ": " . $data['ime'] 
                        . " (" . $data['imerod'] . ") ". $data['prezime']."<br />";
                $pre_messagebody_info.="<strong>Datum rođenja:</strong>" . ": " . $data['datumrodj'] . "<br />";
                $pre_messagebody_info.="<strong>Mjesto rođenja</strong>" . ": " . $data['mjestorodj'] . "<br />";
                $pre_messagebody_info.="<strong>Adresa</strong>" . ": " . $data['adresa'] . "<br />";
                $pre_messagebody_info.="<strong>Opstina</strong>" . ": " . $data['opstina'] . "<br />";
                $pre_messagebody_info.="<strong>Telefon</strong>" . ": " . $data['tel'] . "<br />";
                $pre_messagebody_info.="<strong>E-mail</strong>" . ": " . $data['emailadr'] . "<br />";
                $pre_messagebody_info.="<strong>Apliciram za</strong>" . ": " . $data['tip_posla'] . "<br />";
                $pre_messagebody_info.="<strong>Završena srednja</strong>" . ": " . $data['srednja'] . "<br />";
                $pre_messagebody_info.="<strong>Završen fakultet</strong>" . ": " . $data['faks'] . "<br />";
                $pre_messagebody_info.="<strong>Specijalizacija</strong>" . ": " . $data['spec'] . "<br />";
                $pre_messagebody_info.="<strong>Nivo engleskog jezika</strong>" . ": " . $data['engnivo'] . "<br />";
                $pre_messagebody_info.="<strong>Nivo italijanskog jezika</strong>" . ": " . $data['italnivo'] . "<br />";
                $pre_messagebody_info.="<strong>Nivo njemačkog jezika</strong>" . ": " . $data['njemnivo'] . "<br />";
                $pre_messagebody_info.="<strong>Nivo slovenačkog jezika</strong>" . ": " . $data['slovnivo'] . "<br />";
                $pre_messagebody_info.="<strong>Nivo švedskog jezika</strong>" . ": " . $data['svednivo'] . "<br />";
                $pre_messagebody_info.="<strong>Nivo poznavanja rada na računaru</strong>" . ": " . $data['radnaracunaru'] . "<br />";
                $pre_messagebody_info.="<strong>Poslednje radno iskustvo</strong>" . ": " . $data['zadnjeradno'] . "<br />";
                $vozackaD = isset($data['vozacka']) ? "DA" : "NE";
                $prekovremenoRad = isset($data['prekovremeno']) ? "DA" : "NE";
                $vikednomRadim = isset($data['vikednom']) ? "DA" : "NE";
                $pre_messagebody_info.="<strong>Posjedujem vozačku dozvolu B kategorije</strong>" . ": " . $vozackaD . "<br />";
                $pre_messagebody_info.="<strong>Spreman/na sam na plaćeni prekovremeni rad</strong>" . ": " . $prekovremenoRad . "<br />";
                $pre_messagebody_info.="<strong>Spreman/na sam na plaćeni rad vikendom i praznikom</strong>" . ": " . $vikednomRadim . "<br />";

                $mail->isHTML(false);
                $mail->AddAddress($emailAddress, 'Stomatologija Kecman'); // adresa gdje se salju podaci sa forme
                $mail->SetFrom($noreplyAddressForEmail, 'Stomatologija Kecman'); // ovo je adresa koja salje na gornju email adresu
                $mail->AddReplyTo(htmlspecialchars($data[$form_names['email']]), htmlspecialchars($data[$form_names['imeprezime']])); // ovaoj je lik koji salje formu na sajt mail
                $mail->Subject = 'Kontakt sa forme: "Karijera"';
                $mail->Body = $pre_messagebody_info;
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
                                            <label><?php echo $lang['page']['onama']['karijera']['form']['portret']; ?>:</label>
                                            <input type="file" name="portret">
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