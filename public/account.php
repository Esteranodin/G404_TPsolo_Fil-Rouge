<?php
require_once("./components/htmlStart.php");
require_once("./components/header.php");


/**
 * @var User $user
 */
$user = $_SESSION['user'];

?>

<body class="bg-neutral-white-off font-body text-paragraph">

    <main>

        <section class="ml-8">
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Hi, <?= $user->getFirstname() ?> !</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <h3 class="text-lg font-bold my-8">Vos informations</h3>

            <div class="mx-4 flex flex-col gap-4 font-medium">

                <p>Votre prénom : <?= $user->getFirstname() ?></p>
                <p>Votre nom de famille : <?= $user->getLastname() ?></p>
                <p>Votre adresse mail : <?= $user->getMail() ?></p>

                <a class="bg-primary-grey rounded-[60px] font-medium text-neutral-white-off mt-4 py-2 px-6 text-center w-2/6" href="./accountModifications.php">Modifier vos informations</a>




    </main>

    <footer>

    </footer>

</body>

</html>