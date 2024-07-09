<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // utf8mb4 COLLATE utf8mb4_unicode_ci; l'encodage qui prend les accent francais

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $nomUser = $_POST ['nom-complet'];
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    // $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT); // Hash du mot de passe pour la sécurité
    $civilite = $_POST['civilite'];
    $genre = $_POST['genre'];
    $date = date('Y-m-d H:i:s');

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
    

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO inscription (nomcomplet,nomutilisateur, email, motdepasse, civilite, genre,date) VALUES (?, ?, ?, ?, ?, ?,?)";
    // Préparation de la requête
    $stmt = $conn->prepare($sql);
    // Liaison des variables aux marqueurs de paramètres dans la requête préparée
    $stmt->bind_param("sssssss", $nom, $nomUser, $email, $motdepasse, $civilite, $genre, $date);
    // Exécution de la requête
    if ($stmt->execute()) {
            header("Location: index.php");

    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

    // Fermer la connexion
    $stmt->close();
    $conn->close();
?>
