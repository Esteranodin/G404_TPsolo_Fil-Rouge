<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../public/registration.php?error=invalidRequest');
    exit;    
}

if (
    !isset($_POST['title'], $_POST['idAuthor'], $_POST['parutionAt'], $_POST['publisher'], $_POST['resum'])
) {
    header('Location: ../public/registration.php?error=removedInput');
    exit;
}

// empêche de valider des champs vides
if (
    empty($_POST['title']) ||
    empty($_POST['idAuthor']) ||
    empty($_POST['parutionAt']) ||
    empty($_POST['publisher']) ||
    empty($_POST['resum'])
) {
    header('Location: ../public/registration.php?error=emptyInputs');
    exit;
}

// Sanitization + revoir celle de tel et adresse
$title = htmlspecialchars(trim($_POST['title']));
$idAuthor = htmlspecialchars(trim($_POST['idAuthor']));
$parutionAt = htmlspecialchars(trim($_POST['parutionAt']));
$publisher = htmlspecialchars(trim($_POST['publisher']));
$resum = htmlspecialchars(trim($_POST['resum']));

// Evite que l'username ou le password soient trop long
if (strlen($resum) > 200 || strlen($parutionAt) > 4) {
    header('Location: ../public/registration.php?error=tooLong');
    exit;
}

require_once '../utils/autoloader.php';

// si besoin d'une session book pour ensuite
// session_start();

/**
 * @var Book $book
 */
// $_SESSION['book'] = $book;

$book = new Book($title, $idAuthor, $parutionAt, $publisher, $resum);

$book->getTitle($title);
$book->getIdAuthor($idAuthor);
$book->getParutionAt($parutionAt);
$book->getPublisher($publisher);
$book->getResum($resum);

$bookRepo = new BookRepository();

$bookRepo->createBook($book);

// $_SESSION['book'] = $book;

header('Location: ../public/bookCreate.php?success=isANewBook');
exit;
