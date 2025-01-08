<?php

require_once("./components/htmlStart.php");
require_once("./components/header.php");

require_once("../utils/connect_db.php");


$sql = "SELECT `lastname`,`firstname` FROM `user`";

try {
    $stmt = $pdo->query($sql);
    $user = $stmt->fetchAll(
        PDO::FETCH_ASSOC
    );
} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

?>


<body class="bg-neutral-white-off text-paragraph font-body">

<div class="p-4 text-center">

        <h3 class="text-lg font-bold mb-1"><?= $user["firstname"]?></h3>

    </div>

    <footer>

    </footer>





</body>

</html>