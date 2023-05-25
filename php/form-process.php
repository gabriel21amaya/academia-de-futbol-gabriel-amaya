<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nombre es Obligatorio";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Correo Electrónico es Obligatorio";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Mensaje es Obligatorio";
} else {
    $message = $_POST["message"];
}


$EmailTo = "amayacgabriel@gmail.com ";
$Subject = "Nuevo Mensaje Recibido";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Enviado";
}else{
    if($errorMSG == ""){
        echo "Ha ocurrido un error";
    } else {
        echo $errorMSG;
    }
}

?>