<?php

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

// empêche la suppression d'un input
if (
    !isset($_POST['mail'], $_POST['password'])
) {
    header('Location: ../index.php?error=1');
    exit;
}

// empêche de valider des champs vides
if (
    empty($_POST['mail']) ||
    empty($_POST['password'])
) {
    header('Location: ../index.php?error=2');
    exit;
}

// sanitization du pseudo

$username = htmlspecialchars(trim($_POST['username']));
$mdp = $_POST['password'];



// CONNECTION à la base de données
require_once("../utils/connect-db.php");



try {

    // regarde si c'est mail ou username
    $sql = ("SELECT * FROM user WHERE username = :username OR email = :username");
  
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();


    
    // On récupère les données de l'user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
    // Regarde si l'utilisateur existe déja, si non, retourne erreur 10
    if (!$user) {
        header('Location: ../public/connexion.php?error=10');
    }

    // vérifie si le mot de passe est le même que le mot de passe hashé
    if (!password_verify($mdp, $user["password"])) {
        header('Location: ../public/connexion.php?error=9');
    }


    // Garde les informations dans une session
    session_start();

    $_SESSION["user"]["username"] = $user["username"];
    $_SESSION["user"]["id"] = $user["id"];
    $_SESSION["user"]["role"] = $user["role"];
    header('Location: ../public/homepage.php');
    exit;
} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    exit;
}
?>
