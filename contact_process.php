<?php
include "./config.php";
include "./global.php";
header('Content-Type: application/json');

/* include 'config.php';
 */
$name = trim($_POST["Param_name"]);
$email = trim($_POST["Param_email"]);
$subject = trim($_POST["Param_subject"]);
$message = trim($_POST["Param_message"]);

$ok = 1;
$messageInfo = "<ul>";

/* controle de saisie */
if (empty($name)) {
    $ok = 0;
    $messageInfo .= "<li> $nameError</li>";
}


if (empty($email)) {
    $ok = 0;
    $messageInfo .= "<li>Veuillez saisir votre  email</li>";
}else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messageInfo .= '<li>Adresse email est incorrecte.</li>';
        $ok = 0;
        $erreurEmail = 1;
    }
}
if (empty($message)) {
    $message = "pas de message";
}

if (empty($subject)) {
    $ok = 0;
    $messageInfo .= "<li> veuillez fournir un sujet </li>";
}


if ($ok) {

    $myemail = $my_email;
    $emailSubject = 'New contact from'.$domainName;
    $emailMessage = "<strong>$name</strong> , <strong>$email</strong>  contacted you via $domainName   ";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: '.$domainName. "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    /* mail($myemail, $emailSubject, $emailMessage, $headers); */
 
    $message = addslashes($message);
    $key = $generateKey;
    $sql = 'INSERT INTO `yart_contacts` ( `key`, `name`, `email`, `message`,  `subject`) VALUES ("'.$key.'","'.$name.'","'.$email.'","'.$message.'","'.$subject.'");';
    if ($link->query($sql)) {
        # code...
        $ok = 1 ;
        $messageInfo .= "<li>$successMessageSend</li>";
    }
    else {
        echo("Error description: " . $link -> error);
        $ok = 0 ;
        $messageInfo .= "<li>une erreur s'est produite, veuillez réessayer plus tard</li>";
    }
    $link->close();
}
$messageInfo .= "</ul>";
$data = array("succes" => $ok,
    "message" => $messageInfo);
echo json_encode($data);

?>
