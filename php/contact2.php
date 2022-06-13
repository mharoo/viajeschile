<?php
    $recipient = "mharoo@gmail.com";
    //Este es el correo al que se enviará el mensaje
if($_POST) {
    $nombre = "";
    $email = "";
    $asunto = "";
    //$concerned_department = "";
    $mensaje = "";
     
    if(isset($_POST['nombre'])) {
      $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['asunto'])) {
        $asunto = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
    }
     
    /*if(isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
    }*/
     
    if(isset($_POST['mensaje'])) {
        $mensaje = htmlspecialchars($_POST['mensaje']);
    }
     
    /*if($concerned_department == "billing") {
        $recipient = "mharoo@gmail.com";
    }
    else if($concerned_department == "marketing") {
        $recipient = "mharoo@gmail.com";
    }
    else if($concerned_department == "technical support") {
        $recipient = "mharoo@gmail.com";
    }*/
    else {
        $recipient = "mharoo@gmail.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'De: ' . $email . "\r\n";
     
    if(mail($recipient, $asunto, $mensaje, $headers)) {
        echo "<script> alert('correo enviado exitosamente')</script>";
        echo "<script> setTimeout(\"location.href='../index.html'\",1000)</script>";
        // echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo "<script> alert('We are sorry but the email did not go through').</script>";
        echo "<script> setTimeout(\"location.href='../index.html'\",1000)</script>";
    }
     
} else {
    echo "<script> alert('Something went wrong')</script>";
    echo "<script> setTimeout(\"location.href='../index.html'\",1000)</script>";
}
 
?>