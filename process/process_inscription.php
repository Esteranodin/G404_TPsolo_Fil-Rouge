<?php

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/inscription.php?error=invalidRequest');
    exit;
}

// empêche la suppression d'un input
if (
    !isset($_POST['mail'], $_POST['password'], $_POST['lastname'], $_POST['firstname'],)
) {
    header('Location: ../public/inscription.php?error=removedInput');
    exit;
}

// empêche de valider des champs vides
if (
    empty($_POST['lastname']) ||
    empty($_POST['firstname']) ||
    empty($_POST['mail']) ||
    empty($_POST['password'])
) {
    header('Location: ../public/inscription.php?error=emptyInputs');
    exit;
}

// Sanitization
$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$mail = $_POST['mail'];
$mdp = $_POST['password'];

// Evite que l'username ou le password soient trop long
if (strlen($mail) > 35 || strlen($mdp) > 50) {
    header('Location: ../public/inscription.php?error=tooLong');
    exit;
}

// Sanitize Email
if (!preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]/', $mail)) {
    header('Location: ../public/inscription.php?error=incorrectMail');
    exit;
}

// CONNECTION à la base de données
require_once("../utils/connect_db.php");


try {
    // Vérification si l'email existe déjà
    $checkSql = "SELECT mail FROM `user` WHERE `mail` = :mail";
    $stmt = $pdo->prepare($checkSql);
    $stmt->execute([
        ':mail' => $_POST['mail']
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        // Si un utilisateur est trouvé, redirige sur connexion
        if ($user['mail'] === $mail) {
            header('Location: ../public/connexion.php?error=takenMail');
            exit();
        }
    }
       
    $sql = "INSERT INTO `user`(`mail`, `password`, `lastname`, `firstname`) VALUES (:mail, :mdp, :lastname, :firstname)";
    // Hashage du mot de passe pour la sécurité
    $hashedMdp = password_hash($mdp, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare($sql);
   
    $stmt->execute([
        ':mail' => $mail,
        ':mdp' => $hashedMdp,
        ':lastname' => $lastname,
        ':firstname' => $firstname
    ]);
       
    header('Location: ../index.php?success=newAccount');
    exit;

} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    exit;
}

?>
