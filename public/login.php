<?php

require_once("./components/htmlStart.php");
require_once("./components/header.php");

?>


<body class="bg-neutral-white-off font-body text-paragraph">

    <main>
        <section class="ml-8">
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-3 pl-4">Connexion</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <div class="pt-10 pb-2 pl-4">

                <form action="../process/process_login.php" method="post" class="flex flex-col gap-8">

                    <div class="flex gap-4 items-center">
                        <label for="mail">Mail :</label>
                        <input placeholder="janedoe@exemple.fr" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey border border-primary-grey rounded-lg shadow-md focus:outline-border-blue " type="email" id="mail" name="mail" required />
                    </div>
<!-- invalid:border-pink-500 invalid:text-pink-600 focus:border-sky-500 focus:outline focus:outline-sky-500 focus:invalid:border-pink-500 focus:invalid:outline-pink-500 disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 disabled:shadow-none dark:disabled:border-gray-700 dark:disabled:bg-gray-800/20 -->
                    <div class="flex gap-4">
                        <label for="password">Password (8 caractères minimum) :</label>
                        <input class="shadow-lg ps-3 font-semibold text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="password" id="password" name="password" minlength="8" required />
                    </div>

                    <input type="submit" value="Se connecter" class="bg-primary-pink rounded-[60px] font-medium text-neutral-white-off py-2 px-6 text-center w-[20%] box-content" />

                </form>
            </div>

        </section>

        <hr class="flex border-2 border-primary-blue my-10 mr-56">

        <section class="ml-8">

                <div class="flex flex-col pl-4 gap-8">
                    <p class="text-primary-grey font-title text-2xl font-bold">Pas encore inscrit ?</p>

                    <a class="bg-primary-grey rounded-[60px] font-medium text-neutral-white-off py-2 px-6 text-center w-[20%]" href="./registration.php">Inscrivez-vous</a>
                </div>

        </section>
    </main>
    <footer>

    </footer>


    <!-- Erreurs -->

    <?php
    if (isset($_GET["error"])) {
    ?>
        <p class="text-center text-xl font-semibold text-red-500">

            <?php

            switch ($_GET["error"]) {

                case 'takenMail':
            ?> Votre compte existe déjà, veuillez vous connectez<?php
                                                            break;
                                                        case 'invalidRequest':
                                                            ?>Erreur : mauvaise méthode de requête<?php
                                                                    break;
                                                                case 'removedInput':
                                                                    ?> Erreur : un ou plusieurs champs sont manquants...<?php
                                                                    break;
                                                                case 'emptyInputs':
                                                                ?> Erreur : vous n'avez pas rempli tous les champs nécessaires <?php
                                                                    break;
                                                                case 'undefineAccount':
                                                    ?> Votre compte n'existe pas, veuillez en créér un en cliquant sur le bouton inscrivez-vous<?php
                                                                                                        break;
                                                                                                    case 'passwordIncorrect':
                                                                                                        ?> Votre mot de passe ne correspond pas<?php
                                                                                                        break;
                                                                                                    default:
                                                                                                        break;
                                                                                                }
                                                                                            }
                                                    ?>

</body>


</html>