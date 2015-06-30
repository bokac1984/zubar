<?php
include_once("../lang/lang.php");
include_once("../includes/config.php");
if(!session_id()) {
	session_start();
}
error_reporting(0);
$result = array(
    "is_errors" => 0,
    "info" => ""
);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['action'] == "quickorder") {
        $ourMail = $emailAddress; //Insert your email address here
        
        $required_fields = array(
            "ime" => $lang['karijera']['form']['ime']['error'], 
            "tel" => $lang['karijera']['form']['tel']['error'],
        );
        
        $pre_messagebody_info = "";
        $subject = "Website forma: Naruči se";
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
            }
        }

        if (!empty($errors)) {
            $result['is_errors'] = 1;
            $result['info'] = $errors;
            echo json_encode($result);
            exit;
        }
		
        $pre_messagebody_info.="Imate novu narudzbu od: \r\n<br /><strong>Ime i Prezime</strong>" . ": " . trim(htmlentities($data['ime'])) ."\r\n<br />";
        $pre_messagebody_info.="<strong>Telefon</strong>" . ": " . trim(htmlentities($data['tel']));	

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers.= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers.= "From: ".$data['email']."\r\n";

        $after_message = "\r\n<br />--------------------------------------------------------------------------------------------------\r\n<br /> Ovaj email je poslat sa website forme: Naruči se.";

        if (mail($ourMail, $subject, $pre_messagebody_info . $after_message, $headers)) {
            $result["info"] = "success";
        } else {
            $result["info"] = "server_fail";
        }

        echo json_encode($result);
        exit;
    }
} else {
    $result = array(
        "is_errors" => 1,
        "info" => "Greška prilikom obrade zahtjeva. Obratite se administratoru."
    );
    echo json_encode($result);
}
?>

