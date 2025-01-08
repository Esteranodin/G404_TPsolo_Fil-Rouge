<?php

// évite qu'on change la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/inscription.php?error=invalidRequest');
    exit;
}

// Evite la suppression d'un input
if (
    !isset($_POST['mail'], $_POST['password'], $_POST['lastname'], $_POST['firstname'],)
) {
    header('Location: ../public/inscription.php?error=removedInput');
    exit;
}

// Evite de donner les inputs vides
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

// connection à la bdd
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
        // Si un utilisateur est trouvé, redirige ou affiche une erreur
       if ($user['mail'] === $mail) {
            header('Location: ../public/connexion.php?error=takenMail');
            exit();
        }
    }
    
    $sql = "INSERT INTO `user`(`id`, `mail`, `password`, `lastname`, `firstname`, `role`) VALUES (:mail, :mdp, :lastname, :fisrtname)";
    // Hashage du mot de passe pour la sécurité
    $hashedMdp = password_hash($mdp, PASSWORD_BCRYPT);

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':mail' => $mail,
        ':mdp' => $hashedMdp,
        ':lastname' => $lastname,
        ':firstname' => $firstname
    ]);
    var_dump($mdp);
    die;


    
    header('Location: ../index.php?success=1');
    exit;

} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    exit;
}
?>
