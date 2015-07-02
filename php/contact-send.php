<?php
require_once("../includes/config.php");
require_once("../lang/lang.php");
if(!session_id()) {
	session_start();
}
error_reporting(0);

if (isset($_POST['action'])) {
    if ($_POST['action'] == "contact_form_request") {

        $ourMail = $kontakt; //Insert your email address here

        $required_fields = array(
            "ime" => $lang['kontakt']['forma']['error']['ime'], 
            "email" => $lang['kontakt']['forma']['error']['email'], 
            "telefon" => $lang['kontakt']['forma']['error']['telefon'], 
            "poruka" => $lang['kontakt']['forma']['error']['poruka']
        );
        $pre_messagebody_info = "";
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
            $errors["verify"] = $lang['kontakt']['forma']['error']['captcha'];
        }

//***
        $result = array(
            "is_errors" => 0,
            "info" => ""
        );
        if (!empty($errors)) {
            $result['is_errors'] = 1;
            $result['info'] = $errors;
            echo json_encode($result);
            exit;
        }
		
        $pre_messagebody_info.="<strong>Ime i prezime</strong>" . ": " . trim(htmlentities($data['ime'])) . "<br>";
        $pre_messagebody_info.="<strong>E-mail</strong>" . ": " . trim(htmlentities($data['email'])) . "<br>";
        if (!empty($data['poruka'])){
                $pre_messagebody_info.="<strong>Poruka</strong>" . ": " . trim(htmlentities($data['poruka'])) . "<br>";
        }
		
        if (!empty($data["telefon"])){
                $pre_messagebody_info.="<strong>Telefon</strong>" . ": " . trim(htmlentities($data['telefon'])) . "<br>";
        }
        $kot = "Kontakt";
        $subject = "Website Forma: Kontakt";
        if (isset($data['partner'])) {
            $subject = "Website Forma: Partnerski program";
            $kot = "Partnerski program";
        }
        

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers.= "From: ".$noreplyAddressForEmail."\r\n";

        $after_message = "\r\n<br />--------------------------------------------------------------------------------------------------\r\n<br /> Ovaj email je poslat sa website forme: $kot.";

        if (mail($ourMail, $subject, $pre_messagebody_info .$after_message, $headers)) {
            $result["info"] = "success";
        } else {
            $result["info"] = "server_fail";
        }

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

