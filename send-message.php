<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'fdm';  // Remplacez par le nom de votre base de données
$username = 'root';
$password = '';

$response = ['success' => false, 'message' => ''];

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Traitement des données du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        // Validation des champs
        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Préparer la requête d'insertion
            $sql = "INSERT INTO messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);

            // Exécuter la requête
            if ($stmt->execute()) {
                // Envoi de l'email
                $to = 'jobdamien6@gmail.com'; // Remplacez par votre adresse email
                $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email;
                $mailBody = "Nom: $name\nEmail: $email\nObjet: $subject\nMessage: $message";

                if (mail($to, $subject, $mailBody, $headers)) {
                    $response['success'] = true;
                    $response['message'] = 'Votre message a été envoyé avec succès!';
                } else {
                    $response['message'] = 'Une erreur s\'est produite lors de l\'envoi de l\'email.';
                }
            } else {
                $response['message'] = 'Une erreur s\'est produite lors de l\'enregistrement du message.';
            }
        } else {
            $response['message'] = 'Veuillez remplir tous les champs avec des informations valides.';
        }
    }
} catch (PDOException $e) {
    $response['message'] = 'Erreur de connexion à la base de données : ' . $e->getMessage();
}

// Retourner la réponse en JSON
echo json_encode($response);
?>
