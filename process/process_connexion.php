<?php

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/connexion.php?error=invalidRequest');
    exit;
}

// empêche la suppression d'un input
if (
    !isset($_POST['mail'], $_POST['password'])
) {
    header('Location: ../public/connexion.php?error=removedInput');
    exit;
}

// empêche de valider des champs vides
if (
    empty($_POST['mail']) ||
    empty($_POST['password'])
) {
    header('Location: ../public/connexion.php?error=emptyInputs');
    exit;
}

// declaration variable pour requête ultérieure
$mail = $_POST['mail'];
$mdp = $_POST['password'];


// CONNECTION à la base de données
require_once("../utils/connect_db.php");


try {
    $sql = ("SELECT * FROM user WHERE mail = :mail");
 
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();

   
    // On récupère les données de l'user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
    // Regarde si l'utilisateur n'existe pas
    if (!$user) {
        header('Location: ../public/connexion.php?error=undefineAccount');
    }

    // vérifie si le mot de passe est le même que le mot de passe hashé
    if (!password_verify($mdp, $user["password"])) {
        header('Location: ../public/connexion.php?error=9');
    }

    // Garde les informations dans une session
    session_start();

    $_SESSION["user"]["id"] = $user["id"];
    $_SESSION["user"]["mail"] = $user["mail"];
    $_SESSION["user"]["role"] = $user["role"];
    $_SESSION["user"]["lastname"] = $user["lastname"];
    $_SESSION["user"]["firstname"] = $user["firstname"];

    header('Location: ../public/account.php');
    exit;
    
} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    exit;
}
// ?>
