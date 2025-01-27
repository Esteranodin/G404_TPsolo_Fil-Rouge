<?php
require_once("./components/htmlStart.php");
require_once("./components/header.php");

if (isset($_SESSION['user'])) {
    /**
     * @var User $user
     */
    $user = $_SESSION['user'];
} // ajoputer else et message veuillez vous connecter ou vous  inscrire
?>

<body class="bg-neutral-white-off font-body text-paragraph">

    <main>

        <section class="ml-8 flex flex-col">
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Hi, <?= $user->getFirstname() ?> !</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <h3 class="text-lg font-bold mt-8 mb-6">Vos informations</h3>

            <div class="mx-4 flex flex-col gap-10">
                <div class="mx-4 flex flex-col gap-4 font-medium">

                    <p>Votre prénom :&ensp;<?= $user->getFirstname() ?></p>
                    <p>Votre nom de famille :&ensp;<?= $user->getLastname() ?></p>
                    <p>Votre adresse mail :&ensp;<?= $user->getMail() ?></p>
                    <p>Votre mot de passe :&ensp; ******** </p>
                </div>

                <a class="bg-primary-grey rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center w-1/6 box-content cursor-pointer" href="./accountModifications.php">Modifier vos informations</a>
                
                <a class="bg-primary-grey rounded-[60px] hover:bg-hover-blue font-medium hover:font-extrabold text-neutral-white-off hover:text-primary-grey py-2 px-6 text-center w-1/6 box-content cursor-pointer" href="./homepage.php">Retourner à l'accueil</a>
            </div>
          
                <a class="absolute top-48  right-10 bg-primary-pink rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center box-content cursor-pointer" href="../process/process_logout.php">Déconnexion</a>
                
        </section>
    </main>

    <?php
    if (isset($_GET["error"])) { ?> <p class="text-center text-xl font-semibold text-red-500 pt-6"> <?php
                                                                                                        switch ($_GET["error"]) {
                                                                                                            case 'invalidRequest': ?> Erreur : mauvaise méthode de requête <?php
                                                                                                                break;
                                                                                                            case 'removedInput': ?> Erreur : un ou plusieurs inputs sont manquants <?php
                                                                                                                break;
                                                                                                            case 'emptyInputs': ?> Erreur : vous n'avez pas rempli tous les champs nécessaires <?php
                                                                                                                break;
                                                                                                            case 'tooLong': ?> Erreur : votre identifiant ou votre mot de passe est trop long <?php
                                                                                                                break;
                                                                                                            case 'incorrectMail': ?> Erreur : e-mail incorrect <?php
                                                                                                                break;
                                                                                                            case 'takenUsername': ?> Erreur : ce nom d'utilisateur est déjà pris <?php
                                                                                                                break;
                                                                                                            case 'takenMail': ?> Erreur : cet e-mail est déjà utilisé <?php
                                                                                                                break;
                                                                                                            default:
                                                                                                                break;
                                                                                                        }
                                                                                                    } ?>

        <footer>

        </footer>

</body>

</html>