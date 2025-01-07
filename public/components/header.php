<!-- <?php 
session_start();

// Pour chemin absolu
$basePath = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?> -->

<header class="flex flex-col">

        <nav class="w-full flex p-4 justify-between">
            <div class="flex w-3/12 gap-4">
                <img class="w-8 " src="./assets/src/menu_burger.svg" alt="Icone d'un menu burger fermé">
                <img class="w-6" src="./assets/src/slider.png" alt="Icone de barres de slide pour lister les catégories">
            </div>

            <a href="./index.php" class="w-6/12 flex justify-center">
                <img class="h-10 self-center" src="./assets/src/logo.jpg" alt="Image du logo de l'entreprise Bookmaker">
            </a>

            <div class="w-3/12 flex justify-end">
                <img src="./assets/src/user-round.svg" alt="Icone de connexion">
            </div>

        </nav>

        <h1 class="text-neutral-black font-title text-2xl font-semibold text-center pt-4 tracking-[0.13em]">BOOKMAKER</h1>
        <h2 class="text-neutral-black text-center text-xs font-semibold font-title tracking-[0.13em] pb-10">Le meilleur des livres d'occasion</h2>
    </header>