<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $destinataire = "jrueholiday99@gmail.com";
    $sujet = "Nouveau message de support";
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Email: $email\n";
    $corps_message .= "Message:\n$message\n";
    
    mail($destinataire, $sujet, $corps_message);
    
    header("Location: confirmation.html");
    exit();
}
?>