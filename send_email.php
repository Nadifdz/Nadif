<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "Mod.0812@gmail.com";
    $subject = "Nouveau message de votre site web";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès !";
    } else {
        echo "Erreur lors de l'envoi de l'email.";
    }
}
?>
