<?php
require_once("./components/htmlStart.php");
require_once("./components/header.php");


/**
 * @var User $user
 */
$user = $_SESSION['user'];

?>

<body class="bg-neutral-white-off font-body text-paragraph">

    <main>

    <?php if (isset($_GET["success"])) { ?> <p class="text-center text-xl font-black text-green-600 p-8"> <?php 
        switch ($_GET["success"]) {
        case 'nameModified': ?> Votre compte a bien été créé ! <?php
        break; }
        } ?>

    <section class>
            <h2 class="text-primary-blue font-title text-2xl font-bold pt-4 pb-4 pl-4">Remplissez les champs à modifier</h2>
            <hr class="border-2 border-primary-blue w-full ml-16">

            <div class="pt-10 pb-2 pl-4">

            <h3 class="text-lg font-bold mb-8">Modifier vos informations : </h3>

                <form action="../process/process_modifications.php" method="post" class="flex flex-col gap-8">

                    <div class="flex gap-4">
                        <label for="firstname">Votre prénom :</label>
                        <input class="shadow-lg ps-3 text-paragraph placeholder-primary-grey border-primary-grey rounded-3xl bg-neutral-white focus:ring-primary-blue focus:border-primary-blue" type="text" id="firstname" name="firstname" required />
                    </div>

        <div class="p-4 text-center">

        
        </div>

        <input type="submit" value="Confirmez vos modifications" class="bg-primary-pink rounded-[60px] font-medium text-neutral-white-off mt-4 py-2 px-6 text-center w-2/6" />
    </main>

    <footer>

    </footer>

</body>

</html>