<?php

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/account.php?error=invalidRequest');
    exit;
} 

// empêche la suppression d'un input
if (
    !isset($_POST['lastname'], $_POST['firstname'], $_POST['newMdp'], $_POST['phone'], $_POST['company'], $_POST['companyAdress'])
) {
    header('Location: ../public/account.php?error=removedInput');
    exit;
}

// empêche de valider des champs vides
if (
    empty($_POST['lastname']) ||
    empty($_POST['firstname'])
) {
    header('Location: ../public/account.php?error=emptyInputs');
    exit;
}

// Sanitization
$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$newMdp = $_POST['newMdp'] ? trim($_POST['newMdp']) : null;

$phone = htmlspecialchars(trim($_POST['phone']));
$company = htmlspecialchars(trim($_POST['company']));
$companyAdress = htmlspecialchars(trim($_POST['companyAdress']));

// Evite que le password soit trop long
if ($newMdp && strlen($newMdp) > 50) {
    header('Location: ../public/account.php?error=tooLong');
    exit;
}

require_once '../utils/autoloader.php';

// Une fois que les vérifs sont ok on demarre la session
session_start();

/**
 * @var User $user
 */
$user = $_SESSION['user'];

$userPro = $_SESSION['user']->getUserPro();

$userRepo = new UserRepository();

$user->setFirstname($firstname);
$user->setLastname($lastname);
if ($newMdp) {
    $user->setPassword($newMdp);
    $userRepo->modifiedAccount($user, true);
}

$userRepo->modifiedAccount($user);

// Plus opti dans cet ordre (si pas de conditions comme au dessus) car on récup ce qui est envoyé en POST et ensuite on crée le nouveau repo + la méthode pour envoyer en BDD
$userPro->setPhone($phone);
$userPro->setCompany($company);
$userPro->setCompanyAdress($companyAdress);

$userProRepo = new UserProRepository();

$userProRepo->modifiedAccountPro($userPro);

// on écrase la session pour garder les dernières modifs
$_SESSION['user'] = $user;

header('Location: ../public/accountModifications.php?success=infosModified');
exit;
