<?php
require_once("./components/htmlStart.php");
require_once("./components/header.php");


/**
 * @var User $user
 */
$user = $_SESSION['user'];

var_dump($_SESSION);
?>

<body class="bg-neutral-white-off text-paragraph font-body">

    <div class="p-4 text-center">

        <h3 class="text-lg font-bold mb-1">Bonjour <?= $user->getFirstname() ?></h3>
        <p>Connexion réussie et faire tout le reste ^^</p>
    </div>

    <footer>

    </footer>





</body>

</html>