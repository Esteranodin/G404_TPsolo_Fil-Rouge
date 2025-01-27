<?php
if (isset($_SESSION['user'])) {
    /**
     * @var User $user
     */
    $user = $_SESSION['user'];
}
?>

<header class="p-8 w-full">

    <nav class="flex">
        <div class="mt-1 lg:hidden">

            <img class="w-8 cursor-pointer" id="burgerIcon" src="./assets/src/menu_burger.svg" alt="Icone d'un menu burger"></a>
            <div class=" hidden flex-col gap-4 pt-20 font-title font-medium absolute top-0 left-0 bg-neutral-grey-off p-6 rounded-lg shadow-md lg:hidden" id="menuBurger">

                <img class="w-8 cursor-pointer absolute top-4 right-4" id="closeIcon" src="./assets/src/close_icon.svg" alt="Icône de fermeture" />

                <a class="" href="account.php">Mon compte</a>
                <a href="">Blabla</a>
                <a href="">bip bip</a>
            </div>

        </div>

        <div class="px-4 w-[80%] mx-auto justify-center ">
            <div class="flex flex-row justify-between items-center">
                <a href="">
                    <img class="w-6" src="./assets/src/slider.png" alt="Icone de barres de slides pour lister les catégories"></a>

                <a href="homepage.php" class="">
                    <img class="h-10" src="./assets/src/logo.jpg" alt="Image du logo de l'entreprise Bookmaker">
                </a>

                <?php if (isset($user)) { ?>
                    <a href="account.php">
                        <p class=" text-primary-blue font-title text-xl font-bold pt-4 pb-4 pl-4">Hi, <?= $user->getFirstname() ?> !</p>
                    </a>
                <?php } else { ?> <a class="w-9" href="./login.php">
                        <img class="h-10" src="./assets/src/user-round.svg" alt="Icone de login">
                    </a>
                <?php } ?>
            </div>
        </div>
    </nav>

    <div class="flex flex-col items-center w-[80%] mx-auto justify-center">
        <h1 class="text-neutral-black font-title text-2xl font-semibold text-center pb-1 pt-3 tracking-[0.13em] ">BOOKMAKER</h1>
        <h2 class="text-neutral-black text-center text-xs font-semibold font-title tracking-[0.13em] pb-10">Le meilleur des livres d'occasion</h2>
    </div>
</header>