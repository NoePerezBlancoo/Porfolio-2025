
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['affair']);
    $message = htmlspecialchars($_POST['message']);

    // Configurar el correo electrónico
    $to = "noeperezblanco1992@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Nombre: $name\n";
    $body .= "Correo: $email\n";
    $body .= "Asunto: $subject\n\n";
    $body .= "Mensaje:\n$message\n";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
