<?php

require_once '../utils/autoloader.php';

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/account.php?error=invalidRequest');
    exit;
} 


// empêche la suppression d'un input
if (
    !isset($_POST['lastname'], $_POST['firstname'], $_POST['newMdp'])
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


// Evite que le password soit trop long

if ($newMdp && strlen($newMdp) > 50) {
    header('Location: ../public/account.php?error=tooLong');
    exit;
}

// Une fois que les vérifs sont ok on demarre la session et le reste
session_start();


/**
 * @var User $user
 */
$user = $_SESSION['user'];

$userPro = $_SESSION['user']->getUserPro();

// TODO a nettoyer e, les passant dans les verifs avant pour que les variables existent en amont
$phone = $_POST['phone'];
$company = $_POST['company'];
$companyAdress = $_POST['companyAdress'];

$userRepo = new UserRepository();

$user->setFirstname($firstname);
$user->setLastname($lastname);
if ($newMdp) {
    $user->setPassword($newMdp);
    $userRepo->modifiedAccount($user, true);
}

$userRepo->modifiedAccount($user);

// si pas de conditions on fait d'abord objet puis on en envoit en bdd avec le repo ensuite
$userPro->setPhone($phone);
$userPro->setCompany($company);
$userPro->setCompanyAdress($companyAdress);


$userProRepo = new UserProRepository();


$userProRepo->modifiedAccountPro($userPro);


$_SESSION['user'] = $user;

header('Location: ../public/accountModifications.php?success=infosModified');
exit;
