<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'fdm';
$username = 'root';
$password = '';

$response = ['success' => false, 'message' => ''];

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        // Valider l'email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Vérifier si l'email existe déjà
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM subscribers WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                $response['message'] = 'Cet email est déjà abonné.';
            } else {
                // Préparer la requête d'insertion
                $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (:email)");
                $stmt->bindParam(':email', $email);

                if ($stmt->execute()) {
                    $response['success'] = true;
                    $response['message'] = 'Email enregistré avec succès.';
                } else {
                    $response['message'] = 'Erreur lors de l\'enregistrement de votre email.';
                }
            }
        } else {
            $response['message'] = 'Email invalide.';
        }
    } else {
        $response['message'] = 'Aucun email soumis.';
    }

} catch (PDOException $e) {
    $response['message'] = 'Erreur de connexion à la base de données : ' . $e->getMessage();
}

// Réponse en JSON
echo json_encode($response);
?>
