<?php

require_once("./components/htmlStart.php");
require_once("./components/header.php");

?>

<body class="bg-neutral-white-off font-body text-paragraph">

    <main>
        <section class="ml-8 flex flex-col">
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Remplissez les champs suivants</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <div class="pt-10 pb-2 pl-4 w[60%]">

                <form action="../process/process_bookCreate.php" method="post" class="flex flex-col gap-8">

                    <div class="flex gap-4 items-center">
                        <label for="firstname">Titre du livre : </label>
                        <input placeholder="Saisir le titre ici" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue font-body" type="text" id="title" name="title" required />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="lastname">Id autor (temp)</label>
                        <input placeholder="Saisir un nombre" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue font-body" type="text" id="idAuthor" name="idAuthor" required />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="mail">Date de parution</label>
                        <input placeholder="Saisir la date de parution" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue focus:invalid:outline-border-pink font-body" type="text" id="parutionAt" name="parutionAt" required />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="mail">Editeur</label>
                        <input placeholder="Saisir l'éditeur" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue focus:invalid:outline-border-pink font-body" type="text" id="publisher" name="publisher" required />
                    </div>

                    <div class="flex gap-4 items-center">
                        <label for="mail">Description</label>
                        <input placeholder="Saisir un court résumé" class="ps-3 px-2 placeholder-primary-grey placeholder:text-input placeholder:font-light py-[1px] bg-neutral-grey-off border border-primary-grey rounded-lg shadow-md focus:outline-border-blue focus:invalid:outline-border-pink font-body" type="text" id="resum" name="resum" required />
                    </div>



                    <input type="submit" value="Enregistrer ce livre" class="bg-primary-pink rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center w-1/6 box-content cursor-pointer" />


                    <a class="absolute top-48 right-10 bg-primary-grey rounded-[60px] hover:bg-hover-pink font-medium text-neutral-white-off py-2 px-6 text-center box-content cursor-pointer" href="./homepage.php">Retourner à l'accueil</a>


        </section>
    </main>

    <footer>

    </footer>
</body>

</html>