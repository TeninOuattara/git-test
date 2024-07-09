<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    // $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT); // Hash du mot de passe pour la sécurité

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root"; // remplacez par votre nom d'utilisateur
    $password = ""; // remplacez par votre mot de passe
    $dbname = "bd-todoapp";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    // Définir le charset UTF-8 pour la connexion
    if (!$conn->set_charset("utf8mb4")) {
        printf("Erreur lors du chargement du jeu de caractères utf8mb4 : %s\n", $conn->error);
        exit();
    }

    // Préparer et exécuter la requête de sélection
    $sql = "SELECT id, nomcomplet, email, motdepasse FROM inscription WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérifier si l'utilisateur existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Vérifier le mot de passe
        // if (password_verify($motdepasse, $row['motdepasse'])) {
            if ($motdepasse === $row['motdepasse']) {

            // Les informations de connexion sont correctes
            $_SESSION['id'] = $row['id'];
            $_SESSION['nom'] = $row['nomcomplet'];
            echo "Connexion réussie. Bienvenue, " . $row['nomutilisateur'] . "!";
            // Redirection vers une page sécurisée
            header("Location: acceuil.php");
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
        }
    } else {
        // Utilisateur non trouvé
        echo "Aucun utilisateur trouvé avec cet email.";
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>
