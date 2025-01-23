<?php
// Inclure les fichiers de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Inclure l'autoloader de Composer
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fdm";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Préparer et exécuter la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO insertion (nom, email, objet, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Configuration et envoi de l'email via PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Paramètres SMTP
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Remplacez par votre serveur SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'jobdamien@gmail.com'; // Remplacez par votre adresse email
            $mail->Password = 'pddlbvsnfzzqkszs';   // Remplacez par votre mot de passe
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Paramètres de l'email
            $mail->setFrom($email, $name); // L'expéditeur
            $mail->addAddress('jobdamien6@gmail.com'); // Adresse du destinataire
            $mail->addReplyTo($email, $name);

            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = "Nouveau message : $subject";
            $mail->Body = "
                <p>Vous avez reçu un nouveau message via le formulaire de contact :</p>
                <p><strong>Nom :</strong> $name</p>
                <p><strong>Email :</strong> $email</p>
                <p><strong>Objet :</strong> $subject</p>
                <p><strong>Message :</strong></p>
                <p>$message</p>
            ";
            $mail->AltBody = "Vous avez reçu un nouveau message :
                Nom : $name
                Email : $email
                Objet : $subject
                Message : $message
            ";

            $mail->send();
            echo "<script>alert('Votre message a été envoyé avec succès et enregistré en base de données !');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Message enregistré mais échec de l\'envoi de l\'email. Erreur : {$mail->ErrorInfo}');</script>";
        }
    } else {
        echo "<script>alert('Échec de l\'enregistrement du message en base de données.');</script>";
    }

    $stmt->close();
}

// Fermer la connexion à la base de données
$conn->close();
?>
