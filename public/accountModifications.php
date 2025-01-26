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

    <?php if (isset($_GET["success"])) { ?> <p class="text-center text-xl font-black text-green-600 p-8"> <?php 
        switch ($_GET["success"]) {
        case 'infosModified': ?> Vos modifications ont bien été prises en compte <?php
        break; } ?> </p>
        <div class="text-center mt-8">
            <a href="account.php" class="bg-primary-blue text-white font-bold py-2 px-4 rounded">Retour à votre compte</a>
        </div>
    <?php } else { ?>    

    <section class>
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Remplissez les champs à modifier</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <div class="pt-10 pb-2 pl-4">

            <h3 class="text-lg font-bold mb-8">Modifier vos informations : </h3>

                <form action="../process/process_modifications.php" method="post" class="flex flex-col gap-8">

                    <div class="flex gap-4">
                        <label for="firstname">Votre prénom :</label>
                        <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="firstname" name="firstname" value="<?= $user->getFirstname()?>" />
                    </div>

                    <div class="flex gap-4">
                        <label for="lastname">Votre nom de famille :</label>
                        <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="lastname" name="lastname" value="<?= $user->getLastname() ?>" />
                    </div>

                    <div class="flex gap-4">
                        <label for="newMdp">Votre nouveau mot de passe :</label>
                        <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue"type="password" id="newMdp" name="newMdp" minlength="8" value="<?= $user->getPassword() ?>" />
                    </div>

         <input type="submit" value="Confirmez vos modifications" class="bg-primary-pink rounded-[60px] font-medium text-neutral-white-off mt-4 py-2 px-6 text-center w-2/6 box-content" />
        
         <div class="flex justify-center">
                <a class="bg-primary-grey rounded-[60px] font-medium text-neutral-white-off mt-4 py-2 px-6 text-center w-1/6" href="./account.php">Retourner à votre compte</a>
            </div>

    </main>
    
    <?php } ?>

    <footer>

    </footer>

</body>

</html>