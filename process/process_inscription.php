<?php

// Process de secu a passer en POO via un objet ValidaroService par exemple

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

// Verification email conforme vie regex
if (!preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]/', $mail)) {
    header('Location: ../public/inscription.php?error=incorrectMail');
    exit;
}


// POO

require_once '../utils/autoloader.php';

$userRepo = new UserRepository();

// Vérifie si le mail exixte et donc est déjà utilisé
if ($userRepo->checkMailExist($mail)) {
    header('Location: ../public/connexion.php?error=takenMail');
    exit();
}

$user = new User($mail, $mdp, $lastname, $firstname);

$userRepo->createAccount($user);

header('Location: ../index.php?success=newAccount');
exit;
