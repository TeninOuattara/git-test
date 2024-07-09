<?php
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

$email = $_POST['email'];

// Vérifier si l'email existe déjà
$sql = "SELECT email FROM inscription WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // L'email existe déjà
    echo "Cet email est déjà utilisé. Veuillez choisir un autre email.";
} else {
    // L'email n'est pas encore utilisé
    echo "";
}

// Fermer la connexion
$stmt->close();
$conn->close();
?>
