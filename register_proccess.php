<?php
include "./config.php";
include "./global.php";
header('Content-Type: application/json');

/* include 'config.php';
 */
$name = trim($_POST["Param_name"]);
$email = trim($_POST["Param_email"]);
$desiredDate = trim($_POST["Param_desiredDate"]);
$nPass = trim($_POST["Param_nPass"]);
$country = trim($_POST["Param_country"]);
$number = trim($_POST["Param_number"]);


$messageInfo = "<ul>";
$ok = 1;

/* controle de saisie */
if (empty($name)) {
    $ok = 0;
}
if (empty($nPass)) {
    $ok = 0;
}
if (empty($desiredDate)) {
    $ok = 0;
}
if (empty($country)) {
    $ok = 0;
}
if (empty($number)) {
    $ok = 0;
}


if (empty($email)) {
    $ok = 0;
}else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $ok = 0;
        $erreurEmail = 1;
    }
}

if ($ok) {

    $myemail = $my_email;
    $subject = 'New registration from yarayh.com';
    $emailMessage = "<strong>$name</strong> , <strong>$email</strong>  , just registerd in yarayh.com  . <br> his number is : <strong>$number</strong> ";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: yarayh.com' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    /* mail($myemail, $subject, $emailMessage, $headers); */
 
    $key = $generateKey;
    $sql = 'INSERT INTO `yart_registrations` ( `key`, `full_name`, `email`, `desired_date`, `number`, `country`, `num_passport`) VALUES ("'.$key.'","'.$name.'","'.$email.'","'.$desiredDate.'","'.$number.'","'.$country.'","'.$nPass.'");';
    if ($link->query($sql)) {
        # code...
        $ok = 1 ;
        $messageInfo .= "<li>Votre demande a été envoyer avec succes , on vas te contacter tres rapidement</li>";
    }
    else {
        echo("Error description: " . $link -> error);
        $ok = 0 ;
        $messageInfo .= "<li>une erreur s'est produite, veuillez réessayer plus tard</li>";
    }
    $link->close();
}else {
  $messageInfo .= "<li>please make sure you provided a correct email and all the requested information</li>";
}
$messageInfo .= "</ul>";
$data = array("succes" => $ok,
    "message" => $messageInfo);
echo json_encode($data);

?>
