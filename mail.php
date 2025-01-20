<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contact_name'];
    $email = $_POST['inputEmail'];
    $message = $_POST['message'];

    // Affichage pour le débogage
    echo "Nom: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";

    $to = "vidal.louis93@gmail.com"; 
    $subject = "Nouveau message de contact de $name";
    $body = "Vous avez reçu un nouveau message de contact :\n\n" . "Nom: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Affichage pour le débogage
    echo "Destinataire: $to<br>";
    echo "Sujet: $subject<br>";
    echo "Corps: $body<br>";

    if (mail($to, $subject, $body)) {
        echo "<script>alert('Votre message a été envoyé avec succès.'); window.location = 'https://www.louisvidal.fr';</script>";
    } else {
        echo "<script>alert('Désolé, une erreur s'est produite lors de l'envoi de l'envoi de votre message. Veuillez réessayer.'); window.location = 'index.html';</script>";
    }
} else {
    header("Location: index.html");
    exit;
}
?>
