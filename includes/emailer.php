
<?php

$errores = array();
$successful = array();

if (isset($_POST['submit'])) {

    global $errores;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['message'];
    $url = 'http://broux.com.ar/';

    if (!empty($name) && !empty($email) && !empty($text)) {
        sendMail($name, $email, $text, $url);
    } else {
        array_push($errors, "Al menos uno de los campos estaba vacio");
        header('Location:' . $url);
    }
}

function sendMail($name, $email, $text, $url)
{
    global $errores, $successful;

    $to = 'info@broux.com.ar';
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From:' . $name . " " . $email . "\r\n";
    $header .= 'To: Broux: ' . $to . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();
    $subject = 'Consulta | Enviado desde Broux.com.ar';
    $message = str_replace("\n.", "\n..", $text);

    $success = mail($to, $subject, $message, $header);

    if ($success) {
        array_push($successful,  $name . ", gracias por contactarse. Le responderemos a la brevedad!");
        header('Location:' . $url);
    } else {
        $errorMessage = error_get_last()['message'];
        array_push($errores, $errorMessage);
        header('Location:' . $url);
    }
}

?>