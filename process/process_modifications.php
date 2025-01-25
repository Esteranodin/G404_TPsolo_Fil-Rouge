<?php

require_once '../utils/autoloader.php';

session_start();

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/account.php?error=invalidRequest');
    exit;
} 

$mail = $_SESSION['user']->getMail();
$user = $_SESSION['user'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
// if else en ternaire pour eviter trop de if imbriqués
$newMdp = isset($_POST['newMdp']) ? $_POST['newMdp'] : null;

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
    empty($_POST['firstname']) ||
    empty($_POST['newMdp'])
) {
    header('Location: ../public/account.php?error=emptyInputs');
    exit;
}

// Sanitization
$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$newMdp = $newMdp ? trim($newMdp) : null;


// Evite que le password soit trop long
// if (strlen($newMdp) > 50) {
//     header('Location: ../public/account.php?error=tooLong');
//     exit;
// }


$userRepo = new UserRepository();
$userRepo->modifiedAccount($user->getMail(), $lastname, $firstname, $newMdp);

$user->setLastname($lastname);
$user->setFirstname($firstname);
if ($newMdp) {
    $user->setPassword($newMdp);
}

$_SESSION['user'] = $user;

header('Location: ../public/accountModifications.php?success=infosModified');
exit;
