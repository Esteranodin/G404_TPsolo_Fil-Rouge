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

                    <div class="flex gap-4 items-center">
                        <label for="firstname">Votre prénom :</label>
                        <input placeholder="Saisir votre prénom ici" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue font-body" type="text" id="firstname" name="firstname" required />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="lastname">Votre nom :</label>
                        <input placeholder="Saisir votre nom de famille ici" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue font-body" type="text" id="lastname" name="lastname" required />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="mail">Votre e-mail :</label>
                        <input placeholder="votremail@example.fr" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue focus:invalid:outline-border-pink font-body" type="email" id="mail" name="mail" required />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="password">Password :</label>
                        <input  placeholder="8 caractères minimum" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue focus:invalid:outline-border-pink font-body" type="password" id="password" name="password" minlength="8" required />
                    </div>

                    <input type="submit" value="S'inscrire" class="bg-primary-pink rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center w-1/6 box-content cursor-pointer" />

                    <h3 class="text-primary-grey font-title text-2xl font-bold pt-4 pb-4 pl-4">Si vous êtes un professionnel, veuillez aussi remplir les champs suivants :</h3>

                    <div class="flex gap-4 items-center">
                        <label for="phone">Votre numéro de téléphone :</label>
                        <input placeholder="Saisir votre n° de tél." class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue font-body" type="text" id="phone" name="phone" />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="company">Le nom de votre entreprise :</label>
                        <input placeholder="Saisir le nom de votre entreprise" class="w-1/6 ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue font-body" type="text" id="company" name="company" />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="companyAdress">L'adresse de votre entreprise :</label>
                        <input placeholder="Saisir l'adresse de votre entreprise" class="w-1/6 ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue font-body" type="text" id="companyAdress" name="companyAdress" />
                    </div> 

                    <input type="submit" value="Création d'un compte PRO" class="bg-primary-grey rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center w-1/5 box-content cursor-pointer" />

                </form>

            </div>

            <a class="absolute top-48 right-10 bg-primary-grey rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center box-content cursor-pointer" href="./homepage.php">Retourner à l'accueil</a>

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