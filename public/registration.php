<?php

require_once("./components/htmlStart.php");
require_once("./components/header.php");

?>


<body class="bg-neutral-white-off font-body text-paragraph">

    <main>

        <section class="ml-8">
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Remplissez les champs suivants</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <div class="pt-10 pb-2 pl-4">

                <form action="../process/process_registration.php" method="post" class="flex flex-col gap-8">

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

                    <input type="submit" value="S'inscrire" class="bg-primary-pink rounded-[60px] font-medium text-neutral-white-off py-2 px-6 text-center w-[20%] box-content" />

                    <h3 class="text-primary-grey font-title text-2xl font-bold pt-4 pb-4 pl-4">Si vous êtes un professionnel, veuillez aussi remplir les champs suivants</h3>

                    <div class="flex gap-4">
                        <label for="phone">Votre numéro de téléphone :</label>
                        <input class="shadow-lg ps-3 font-semibold text-paragraph placeholder-primary-grey border-primary-grey  rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="phone" name="phone" required />
                    </div>

                    <div class="flex gap-4">
                        <label for="company">Le nom de votre entreprise :</label>
                        <input class="shadow-lg ps-3 font-semibold text-paragraph placeholder-primary-grey border-primary-grey  rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="company" name="company" required />
                    </div>

                    <div class="flex gap-4">
                        <label for="companyAdress">L'adresse de votre entreprise :</label>
                        <input class="shadow-lg ps-3 font-semibold text-paragraph placeholder-primary-grey border-primary-grey  rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="companyAdress" name="companyAdress" required />
                    </div> 

                    <input type="submit" value="Création d'un compte PRO" class="bg-neutral-black rounded-[60px] font-medium text-primary-yellow py-2 px-6 text-center w-[20%] box-content" />

                </form>

            </div>

        </section>

        <!-- Erreurs a retravailler -->

        <?php
        if (isset($_GET["error"])) { ?> <p class="text-center text-xl font-semibold text-red-500"> <?php

                                                                                            switch ($_GET["error"]) {
                                                                                                case 'invalidRequest':
                                                                                            ?> Erreur : mauvaise méthode de requête <?php
                                                                                                    break;
                                                                                                case 'removedInput':
                                                                ?> Erreur : un ou plusieurs inputs sont manquants <?php
                                                                                                    break;
                                                                                                case 'emptyInputs':
                                                            ?> Erreur : vous n'avez pas rempli tous les champs nécessaires <?php
                                                                                                    break;
                                                                                                case 'tooLong':
                                                ?> Erreur : votre identifiant ou votre mot de passe est trop long <?php
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
                                                                                            }
                                                                                        }
                                                ?>

    </main>

    <footer>

    </footer>
</body>

</html>