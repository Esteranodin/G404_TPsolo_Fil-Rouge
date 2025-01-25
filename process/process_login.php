<?php

// empêche de changer la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/login.php?error=invalidRequest');
    exit;
}

// empêche la suppression d'un input
if (
    !isset($_POST['mail'], $_POST['password'])
) {
    header('Location: ../public/login.php?error=removedInput');
    exit;
}

// empêche de valider des champs vides
if (
    empty($_POST['mail']) ||
    empty($_POST['password'])
) {
    header('Location: ../public/login.php?error=emptyInputs');
    exit;
}

// declaration variable pour ensuite
$mail = $_POST['mail'];
$mdp = $_POST['password'];

// POO

require_once '../utils/autoloader.php';

$userRepo = new UserRepository();

if (!$userRepo->checkMailExist($mail)) {
    header('Location: ../public/login.php?error=undefineAccount');
    exit();
}

// Vérifie si le mot de passe est le même que le mot de passe hashé
$user = $userRepo->checkPassword($mail, $mdp);

if (!$user) {
    header('Location: ../public/login.php?error=passwordIncorrect');
    exit();
}

// Garde les informations dans une session
session_start();

$_SESSION["user"] = $user;

header('Location: ../public/account.php');
exit;
