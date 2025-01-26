<?php
require_once("./components/htmlStart.php");
require_once("./components/header.php");
?>

<body class="bg-neutral-white-off font-body text-paragraph">
    
<main>  

 <!-- Messages a retravailler -->

    <?php if (isset($_GET["success"])) { ?> <p class="text-center text-xl font-black text-green-600 p-8"> <?php 
        switch ($_GET["success"]) {
        case 'newAccount': ?> Votre compte a bien été créé ! <?php break; } } ?>

    <!-- SEARCH BAR  -->
<section>
        <form class="relative w-[88%] mx-auto">
            <input type="search" id="searchBar"
                class="w-full shadow-lg p-4 ps-6 font-semibold text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-primary-grey/15 focus:ring-primary-blue focus:border-primary-blue"
                placeholder="Chercher un livre, un auteur..." required />

            <button type="submit" class="text-primary-grey absolute end-2.5 bottom-1.5 bg-primary-grey/25 hover:bg-neutral-grey focus:ring-2 focus:outline-none focus:ring-primary-pink font-medium rounded-full text-sm p-3 item-center box-content">
                <svg class="w-4 h-4 text-primary-pink" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </button>
        </form>
    </section>

    <section class="mt-10">

        <div class="w-[260px] h-[260px] bg-primary-yellow/85 place-self-center shadow-md">

            <h2 class="font-title text-xl font-extrabold pt-4 pb-2 pl-4 ">Nouveautés</h2>
            <hr class="border-2 border-primary-blue w-[199px] ml-10">
        </div>
    </section>

    <section class="w-[93%] place-self-center">
        <div class="absolute ml-4 p-3 -mt-6 bg-neutral-black rounded-tl-lg rounded-br-lg">
            <p class="text-neutral-white-off font-medium">prix €</p>
        </div>

        <article class="flex flex-col my-12 place-self-center h-contain rounded-md bg-primary-blue/15 shadow-md font-body text-paragraph">
            <div class="flex gap-4">
                <div class="box-border w-[40%] mt-12 ml-4 border-[1px] border-border-grey bg-shadow-filter rounded-md shadow-md">
                    <img src="" alt="Couverture du livre" class="object-cover">
                </div>

                <div class="flex flex-col w-[50%]">
                    <h2 class="font-title text-lg font-medium pt-4 pb-2">balise php nom auteur</h2>
                    <h3 class="font-title text-lg font-medium pt-4 pb-2">balise php titre livre</h3>
                    <p>Integer eget ante dui. Aliquam varius pulvinar dignissim. Proin quis orci rhoncus, rhoncus libero quis, tincidunt mauris. Fusce quis luctus orci. Aenean sodales at nisl vel vehicula. Fusce scelerisque enim a volutpat a.</p>
                </div>
            </div>
            <div class="flex flex-row ml-16 my-4 gap-5 ">
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">HIST.</p>
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">SF</p>
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">LGBT+</p>
            </div>
        </article>
        <div class="absolute ml-4 p-3 -mt-6 bg-neutral-black rounded-tl-lg rounded-br-lg">
            <p class="text-neutral-white-off font-medium">prix €</p>
        </div>
        <article class="flex flex-col my-12  place-self-center h-contain rounded-md bg-primary-pink/15 shadow-md font-body text-paragraph">
            <div class="flex gap-4">
                <div class="box-border w-[40%] mt-12 ml-4 border-[1px] border-border-grey bg-shadow-filter rounded-md shadow-md">
                    <img src="" alt="Couverture du livre" class="object-cover">
                </div>

                <div class="flex flex-col w-[50%]">
                    <h2 class="font-title text-lg font-medium pt-4 pb-2">balise php nom auteur</h2>
                    <h3 class="font-title text-lg font-medium pt-4 pb-2">balise php titre livre</h3>
                    <p>Integer eget ante dui. Aliquam varius pulvinar dignissim. Proin quis orci rhoncus, rhoncus libero quis, tincidunt mauris. Fusce quis luctus orci. Aenean sodales at nisl vel vehicula. Fusce scelerisque enim a volutpat a.</p>
                </div>
            </div>
            <div class="flex flex-row ml-16 my-4 gap-5 ">
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">HIST.</p>
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">SF</p>
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">LGBT+</p>
            </div>
        </article>
        <div class="absolute ml-4 p-3 -mt-6 bg-neutral-black rounded-tl-lg rounded-br-lg">
            <p class="text-neutral-white-off font-medium">prix €</p>
        </div>
        <article class="flex flex-col my-12  place-self-center h-contain rounded-md bg-primary-blue/15 shadow-md font-body text-paragraph">
            <div class="flex gap-4">
                <div class="box-border w-[40%] mt-12 ml-4 border-[1px] border-border-grey bg-shadow-filter rounded-md shadow-md">
                    <img src="" alt="Couverture du livre" class="object-cover">
                </div>

                <div class="flex flex-col w-[50%]">
                    <h2 class="font-title text-lg font-medium pt-4 pb-2">balise php nom auteur</h2>
                    <h3 class="font-title text-lg font-medium pt-4 pb-2">balise php titre livre</h3>
                    <p>Integer eget ante dui. Aliquam varius pulvinar dignissim. Proin quis orci rhoncus, rhoncus libero quis, tincidunt mauris. Fusce quis luctus orci. Aenean sodales at nisl vel vehicula. Fusce scelerisque enim a volutpat a.</p>
                </div>
            </div>
            <div class="flex flex-row ml-16 my-4 gap-5 ">
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">HIST.</p>
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">SF</p>
                <p class="bg-primary-pink rounded-[60px] text-neutral-white-off py-1 px-6 text-center font-medium">LGBT+</p>
            </div>
        </article>
    </section>

</main>

<footer>

</footer>

</body>

</html>