<?php

require_once("./components/htmlStart.php");
require_once("./components/header.php");

?>


<body class="bg-neutral-white-off text-paragraph font-body">

    <main>

        <section>
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Remplissez le formulaire suivant</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <div class="pt-10 pb-2 pl-4">

                <form action="../process/process_inscription.php" method="post" class="flex flex-col gap-8">

                    <div class="flex gap-4">
                        <label for="firstname">Votre prénom :</label>
                        <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="firstname" name="firstname" required />
                    </div>

                    <div class="flex gap-4">
                        <label for="lastname">Votre nom :</label>
                        <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="lastname" name="lastname" required />
                    </div>

                    <div class="flex gap-4">
                        <label for="mail">Votre e-mail :</label>
                        <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="mail" name="mail" required />
                    </div>

                    <div class="flex gap-4">
                        <label for="password">Password (8 caractères minimum) :</label>
                        <input class="shadow-lg ps-3 font-semibold text-paragraph placeholder-primary-grey border-primary-grey  rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="password" id="password" name="password" minlength="8" required />
                    </div>

                    <input type="submit" value="S'inscrire" class="bg-primary-pink rounded-[60px] font-medium text-neutral-white-off py-2 px-6 text-center w-[20%]" />

                </form>

            </div>

        </section>

        <!-- Erreurs -->

        <?php
        if (isset($_GET["error"])) {
        ?>
            <p class="text-center text-red-500">

            <?php

switch ($_GET["error"]) {
    case 'invalidRequest':
        ?> Erreur : requête invalide (mauvaise méthode HTTP) <?php
        break;
    case 'removedInput':
        ?> Erreur : un ou plusieurs inputs sont manquants <?php
        break;
    case 'emptyInputs':
        ?> Erreur : vous n'avez pas tout rempli <?php
        break;
    case 'tooLong':
        ?> Erreur : l'username ou le mot de passe est trop long <?php
        break;
    case 'incorrectMail':
        ?> Erreur : e-mail incorrect <?php
        break;
    case 'takenUsername':
        ?> Erreur : ce nom d'utilisateur est déjà pris <?php
        break;
    case 'takenMail':
        ?> Erreur : cet e-mail est déjà utilisé <?php
        break;
    default:
        break; 
}}
?>              

    </main>

</body>

</html>