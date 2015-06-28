<?php

require_once("../includes/config.php");
require_once("../lang/lang.php");
if (!session_id()) {
    session_start();
}
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
    $ourMail = $emailAddress; //Insert your email address here

    $required_fields = array(
        "ime" => $lang['askus']['form']['ime']['error'],
        "email" => $lang['askus']['form']['email']['error'],
        "telefon" => $lang['askus']['form']['tel']['error'],
        "poruka" => $lang['askus']['form']['poruka']['error']
    );
    $pre_messagebody_info = "";
    $subject = "Website forma: Pitajte doktora";
    $errors = array();
    $data = array(
        'ime' => trim(htmlentities($_POST['ime'])),
        'email' => trim(htmlentities($_POST['email'])),
        'telefon' => trim(htmlentities($_POST['telefon'])),
        'poruka' => trim(htmlentities($_POST['poruka'])),
        'verify' => trim(htmlentities($_POST['verify'])),
    );

    //check for required and assemble message
    if (!empty($data)) {
        foreach ($data as $key => $value) {
            $name = strtolower(trim($key));
            if (array_key_exists($name, $required_fields)) {
                if (empty($value)) {
                    $errors[$name] = $required_fields[$name];
                }
            }
            if ($name == $form_names['email']) {
                if (!check_email_address($value)) {
                    $errors[$name] = $required_fields[$name];
                }
            }
        }
    }

//***	

    $verify = $_SESSION['verify'];
    if ($verify != $data['verify']) {
        $errors["verify"] = "Verifikacioni kod koji ste unijeli je pogrešan!";
    }

//***
    $result = array(
        "is_errors" => 0,
        "info" => ""
    );

    // da li je fajl odabran
    $data['fajl'] = $_FILES['fajl'];
    $allowedExtensions = array(
        'jpg' => 'image/jpeg',
        'png' => 'image/png'
    );
    // da li postoji greska sa uploadom fajla
    if (
            !isset($data['fajl']['error']) ||
            is_array($data['fajl']['error'])
    ) {
        $errors['fajl'] = $lang['askus']['form']['fajl']['error'];
    }


    if (extension_loaded('file_info')) {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        if (false === $ext = array_search(
                $finfo->file($data['fajl']['tmp_name']), $allowedExtensions, true
                )) {
            $errors['fajl'] = $lang['askus']['form']['fajl']['mime']['error'];
        }
    } else {
        if (!in_array($data['fajl']['type'], $allowedExtensions)) {
             $errors['fajl'] = $lang['askus']['form']['fajl']['mime']['error'];
        }
    }


    if ($data['fajl']['size'] == 0) {
         $errors['fajl'] = $lang['askus']['form']['fajl']['error'];
    } elseif ($data['fajl']['size'] > $imageSize) {
         $errors['fajl'] = $lang['askus']['form']['fajl']['size']['error'] . $imageSize / 1048576 . ' MB.';
    }
    $pre_messagebody_info.="Imate novi kontakt sa forme \"Pitajte doktora\"\r\n";
    $pre_messagebody_info.="Ime i prezime" . ": " . $data['ime'] . "\r\n";
    $pre_messagebody_info.="Telefon" . ": " . $data['telefon'] . "\r\n";
    $pre_messagebody_info.="E-mail" . ": " . $data['email'] . "\r\n";
    $pre_messagebody_info.="Poruka" . ": " . $data['poruka'] . "\r\n";
    $pre_messagebody_info.= "Prilog je dodat u ovaj mail.\r\n";
    if (empty($errors)) {
        require_once('PHPMailer/class.phpmailer.php');
        $mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch

        try {
            $mail->isHTML(false);
            $mail->AddAddress($emailAddress, 'Stomatologija Kecman'); // adresa gdje se salju podaci sa forme
            $mail->SetFrom($noreplyAddressForEmail, 'Stomatologija Kecman'); // ovo je adresa koja salje na gornju email adresu
            $mail->AddReplyTo(htmlspecialchars($data['email']), htmlspecialchars($data['ime'])); // ovaoj je lik koji salje formu na sajt mail
            $mail->Subject = 'Kontakt sa forme: "Pitajte doktora"';
            $mail->Body = $pre_messagebody_info;
            $mail->AddAttachment($data['fajl']['tmp_name'], htmlspecialchars($data['fajl']['name']));      // attachment
            $mail->Send();
            $errors['info'] = 'success';
            $errors['message'] = $lang['askus']['form']['success'];
        } catch (phpmailerException $e) {
            $errors['info'] = 'server_fail';
            $errors['message'] = $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            $errors['info'] = 'server_fail';
            $errors['message'] = $e->getMessage(); //Boring error messages from anything else!
        }
        $result['is_errors'] = 0;
        $result['info'] = $errors['info'];
        $result['message'] = $errors['message'];
        // posalji rezultat json
        echo json_encode($result);
        exit;
    } else {
        $result['is_errors'] = 1;
        $result['info'] = $errors;
        echo json_encode($result);
        exit;
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

