<?php

    /* REQUETE D'INITIALISATION DES MOBS APPELEE DANS LA PAGE "initializeMonsters.php" */

    function initMobEtape($ID,$nomMob, $lieuMob, $etapeMob) {
        include_once('./Connection_BDD.php');
        $conn = getBdd('*****', '*****', '*****');

        $reqCreateMonster = $conn->prepare("INSERT INTO *****.etapes (idUser, nomMob, lieuMob, etapeMob, Capture) VALUES('".$ID."', '".$nomMob."', '".$lieuMob."', $etapeMob, 0);");
        $reqCreateMonster->execute();
    }

?>