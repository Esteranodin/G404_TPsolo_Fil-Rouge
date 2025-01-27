<?php

// Process de secu a passer en POO via un objet ValidarService par exemple

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/registration.php?error=invalidRequest');
    exit;
}

// empêche la suppression d'un input
if (
    !isset($_POST['mail'], $_POST['password'], $_POST['lastname'], $_POST['firstname'],)
) {
    header('Location: ../public/registration.php?error=removedInput');
    exit;
}

// empêche de valider des champs vides
if (
    empty($_POST['lastname']) ||
    empty($_POST['firstname']) ||
    empty($_POST['mail']) ||
    empty($_POST['password'])
) {
    header('Location: ../public/registration.php?error=emptyInputs');
    exit;
}

// Sanitization + revoir celle de tel et adresse
$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$mail = trim($_POST['mail']);
$mdp = trim($_POST['password']);
$phone = trim($_POST['phone']);
$company = htmlspecialchars(trim($_POST['company']));
$companyAdress = htmlspecialchars(trim($_POST['companyAdress']));


// Evite que l'username ou le password soient trop long
if (strlen($mail) > 35 || strlen($mdp) > 50) {
    header('Location: ../public/registration.php?error=tooLong');
    exit;
}

// Verification email conforme vie regex
if (!preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]/', $mail)) {
    header('Location: ../public/registration.php?error=incorrectMail');
    exit;
}


// DEBUT REFACTORISATION POO
require_once '../utils/autoloader.php';

$userRepo = new UserRepository();
$userRepoPro = new UserProRepository();

// Vérifie si le mail exixte et donc est déjà utilisé
if ($userRepo->checkMailExist($mail)) {
    header('Location: ../public/login.php?error=takenMail');
    exit();
}

$user = new User($mail, $mdp, $lastname, $firstname);
$userPro = new UserPro($phone, $company, $companyAdress, $isValidated = 0);

$userRepo->createAccount($user);
if ($userRepoPro->createAccountPro($userPro)) {
 $user = $user->setUserPro($userPro);
 $user = $userPro->getId();

}


header('Location: ../public/homepage.php?success=newAccount');
exit;


// PRO