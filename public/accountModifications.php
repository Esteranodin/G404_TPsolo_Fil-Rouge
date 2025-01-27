<?php
require_once("./components/htmlStart.php");
require_once("./components/header.php");

/**
 * @var User $user
 */
$user = $_SESSION['user'];

// var_dump($_SESSION);
// die();
$userPro = $_SESSION['user']->getUserPro();
$userProId = $user->getUserPro()->getId();
?>

<body class="bg-neutral-white-off font-body text-paragraph">

    <main>

        <?php if (isset($_GET["success"])): ?>
            <p class="text-center text-xl font-black text-green-600 p-8">
                <?php
                switch ($_GET["success"]) {
                    case 'infosModified': ?> Vos modifications ont bien été prises en compte <?php
                                                                                                break;
                                                                                        }
                                                                                                ?>
            </p>
            <div class="text-center mt-8">
                <a href="account.php" class="bg-primary-blue rounded-[60px] font-medium text-neutral-white-off hover:bg-hover-blue hover:font-extrabold py-2 px-6 text-center w-1/6 box-content cursor-pointer">Retourner à votre compte</a>
            </div>
        <?php else: ?>

            <section class="ml-8 flex flex-col">
                <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Remplissez les champs à modifier</h2>
                <hr class="border-2 border-primary-blue w-full ml-16">

                <div class="pt-10 pb-2 pl-4">

                    <h3 class="text-lg font-bold mb-8">Modifier vos informations : </h3>

                    <form action="../process/process_modifications.php" method="post" class="flex flex-col gap-8">

                        <div class="flex gap-4">
                            <label for="firstname">Votre prénom :</label>
                            <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="firstname" name="firstname" value="<?= $user->getFirstname() ?>" />
                        </div>

                        <div class="flex gap-4">
                            <label for="lastname">Votre nom de famille :</label>
                            <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="lastname" name="lastname" value="<?= $user->getLastname() ?>" />
                        </div>

                        <div class="flex gap-4">
                            <label for="newMdp">Votre nouveau mot de passe :</label>
                            <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="password" id="newMdp" name="newMdp" minlength="8" value="" />
                        </div>

                        <?php if ($userProId) { ?>

                            <div class="flex gap-4">
                                <label for="firstname">Votre numéro de téléphone :</label>
                                <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="phone" name="phone" value="<?= $userPro->getPhone() ?>" />
                            </div>

                            <div class="flex gap-4">
                                <label for="firstname">Votre entreprise :</label>
                                <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="company" name="company" value="<?= $userPro->getCompany() ?>" />
                            </div>

                            <div class="flex gap-4">
                                <label for="firstname">L'adresse de votre entreprise :</label>
                                <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="companyAdress" name="companyAdress" value="<?= $userPro->getCompanyAdress() ?>" />
                            </div>


                        <?php } ?>
                        <input type="submit" value="Confirmez vos modifications" class="bg-primary-grey rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center w-1/5 box-content cursor-pointer place-self-center" />
                </div>

                <a class="absolute top-48 right-10 bg-primary-pink rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center box-content cursor-pointer" href="./account.php">Retourner à votre compte</a>

            </section>
    </main>

<?php endif ?>

<footer>

</footer>

</body>

</html>