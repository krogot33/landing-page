<?php

// Replace with your actual email address
$toEmail = "hola123@gmail.com";

// Replace with the subject of the email
$subject = "Contacto desde sitio web";

// Get the form data
$name = $_POST['nombre'];
$company = $_POST['empresa'];
$message = $_POST['consulta'];

// Prepare the email body
$body = "Nombre: $name\n" .
         "Empresa: $company\n" .
         "Consulta:\n$message";

// Set headers
$headers = "From: no-reply@tudominio.com"; // Replace with your website's email address

// Send the email
if (mail($toEmail, $subject, $body, $headers)) {
    echo "Su mensaje ha sido enviado correctamente.";
} else {
    echo "Hubo un error al enviar el mensaje. Inténtalo de nuevo más tarde.";
}

$recaptchaToken = $_POST['g-recaptcha-token'];
$secretKey = 'XXXXXXXXXXXXXXX'; // Replace with your secret key

$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptchaToken);
$responseData = json_decode($response, true);

if ($responseData['success']) {
    // reCAPTCHA verification successful, process the form data
} else {
    // reCAPTCHA verification failed, handle the error
}


?>
