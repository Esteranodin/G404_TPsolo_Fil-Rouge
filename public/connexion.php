<?php

require_once("./components/htmlStart.php");
require_once("./components/header.php");

?>


<body class="bg-neutral-white text-paragraph font-body">


    <main>

        <h2 class="text-2xl text-neutral-white font-bold text-center my-16">Connexion</h2>

        <div class="flex p-16 font-semibold text-neutral-white rounded-sm ">
            <form action="../process/process_connexion.php" method="post" class="flex flex-col gap-8">

                <div class="flex gap-4">
                    <label for="mail">Mail :</label>
                    <input class="rounded-xl pl-2 text-primary-grey-dark" type="text" id="mail" name="mail" required />
                </div>

                <div class="flex gap-4">
                    <label for="password">Password (8 caractères minimum) :</label>
                    <input class="rounded-xl pl-2 text-primary-grey-dark" type="password" id="password" name="password" minlength="8" required />
                </div>


                <input  type="submit" value="Se connecter" class="bg-primary-accent flex h-fit text-white px-2 py-4 cursor-pointer rounded-xl"/>

            </form>
        </div>

    </main>
    <footer>

    </footer>





</body>

</html>