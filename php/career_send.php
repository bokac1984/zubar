<?php
include_once("../lang/lang.php");
include_once("../includes/config.php");
if(!session_id()) {
	session_start();
}
error_reporting(0);
if (isset($_POST['action'])) {
    if ($_POST['action'] == "career_form_request") {
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
            echo json_encode($result);
            exit;
        }
		
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
		
        $subject.="Website Forma";

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers.= "From: ".$data['email']."\r\n";

        $after_message = "\r\n<br />--------------------------------------------------------------------------------------------------\r\n<br /> Ovaj email je poslat sa website forme: Karijera.";

        if (mail($ourMail, $subject, $pre_messagebody_info . $after_message, $headers)) {
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

