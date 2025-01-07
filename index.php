<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKMAKER</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    <script defer src="./assets/js/menu_burger.js"></script>
</head>

<body class="bg-neutral-white text-paragraph font-body">
    <header class="flex flex-col">

        <nav class="w-full flex p-4 justify-between">
            <div class="flex w-3/12 gap-4 items-center">

                <img class="w-8 cursor-pointer lg:hidden" id="burgerIcon" src="./assets/src/menu_burger.svg" alt="Icone d'un menu burger"></a>
                <div class=" hidden flex-col gap-4 pt-20 font-title font-medium absolute top-0 left-0 bottom-0 bg-neutral-grey p-6 rounded-lg shadow-md lg:hidden" id="menuBurger">

                    <img class="w-8 cursor-pointer absolute top-4 right-4" id="closeIcon" src="./assets/src/close_icon.svg" alt="Icône de fermeture" />

                    <a class="" href="./public/account.php">Mon compte</a>
                    <a href="./public/">Blabla</a>
                    <a href="./public/">bip bip</a>
                </div>

                <a href="">
                    <img class="w-6" src="./assets/src/slider.png" alt="Icone de barres de slide pour lister les catégories"></a>
            </div>

            <a href="./index.php" class="w-6/12 flex justify-center">
                <img class="h-10" src="./assets/src/logo.jpg" alt="Image du logo de l'entreprise Bookmaker">
            </a>

            <div class="w-3/12 flex justify-end">
                <img src="./assets/src/user-round.svg" alt="Icone de connexion">
            </div>

        </nav>

        <h1 class="text-neutral-black font-title text-2xl font-semibold text-center pt-4 tracking-[0.13em]">BOOKMAKER</h1>
        <h2 class="text-neutral-black text-center text-xs font-semibold font-title tracking-[0.13em] pb-10">Le meilleur des livres d'occasion</h2>
    </header>

    <main>
        <!-- SEARCH BAR  -->
        <section>
            <form class="relative w-[88%] mx-auto">
                <input type="search" id="searchBar"
                    class="w-full  shadow-lg p-4 ps-6 font-semibold text-paragraph placeholder-primary-grey border-grey-500 rounded-3xl bg-primary-grey/15 focus:ring-primary-blue focus:border-primary-blue"
                    placeholder="Chercher un livre, un auteur..." required />

                <button type="submit" class="text-primary-grey absolute end-2.5 bottom-1.5 bg-primary-grey/25 hover:bg-neutral-grey focus:ring-2 focus:outline-none focus:ring-primary-pink font-medium rounded-full text-sm p-3 item-center ">
                    <svg class="w-4 h-4 text-primary-pink" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </button>
            </form>







    </main>





</body>

</html>