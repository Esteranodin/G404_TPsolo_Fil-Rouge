<?php

require_once("./components/htmlStart.php");
require_once("./components/header.php");

?>


<body class="bg-neutral-white-off text-paragraph font-body">


    <main>
        <section>
        <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-3 pl-4">Connexion</h2>
        <hr class="border-2 border-primary-blue w-full ml-16">

        <div class="pt-10 pb-2 pl-4 ">

            <form action="../process/process_connexion.php" method="post" class="flex flex-col gap-8">

                <div class="flex gap-4">
                    <label for="mail">Mail :</label>
                    <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey  rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="mail" name="mail" required />
                </div>

                <div class="flex gap-4">
                    <label for="password">Password (8 caractères minimum) :</label>
                    <input class="shadow-lg ps-3 font-semibold text-paragraph placeholder-primary-grey border-primary-grey  rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="password" id="password" name="password" minlength="8" required />
                </div>

                <input type="submit" value="Se connecter" class="bg-primary-pink rounded-[60px] font-medium text-neutral-white-off py-2 px-6 text-center w-[20%]" />

            </form>
        </div>

        </section>

        <div class="flex flex-col gap-8">
            <hr class="flex border-2 border-primary-blue mt-10 mr-56">

            <div class="flex flex-col pl-4 gap-4">
                <p class="text-primary-grey font-title text-2xl font-bold">Pas encore inscrit ?</p>
    
                <a class="bg-primary-grey rounded-[60px] font-medium text-neutral-white-off py-2 px-6 text-center w-[20%]" href="./inscription.php">Inscrivez-vous</a>
            </div>

        </div>

    </main>
    <footer>

    </footer>





</body>

</html>