<?php
session_start();
include_once('./Connection_BDD.php');
$conn = getBdd('*****', '*****', '*****');
$WhichStep = "";

// RECUPERATION DE TOUTES LES INFORMATIONS UTILES EN BASE DE DONNEES

$reqRecupAllMobs1 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=1");
while($RecupAllMobs1 = $reqRecupAllMobs1->fetch()) {
    $nomMob1[] = $RecupAllMobs1['nomMob'];
    $lieuMob1[] = $RecupAllMobs1['lieuMob'];
    $isCapture1[] = $RecupAllMobs1['Capture'];
}

$reqRecupAllMobsCount1 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=1");
while($RecupAllMobsCount1 = $reqRecupAllMobsCount1->fetch()) {
    $nombreDonneesCount1[] = $RecupAllMobsCount1['count(*)'];
}

$reqRecupAllMobsCaptured1 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=1");
while($RecupAllMobsCaptured1 = $reqRecupAllMobsCaptured1->fetch()) {
    $nombreDonnees1[] = $RecupAllMobsCaptured1['count(*)'];
}


$reqRecupAllMobs2 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=2");
while($RecupAllMobs2 = $reqRecupAllMobs2->fetch()) {
    $nomMob2[] = $RecupAllMobs2['nomMob'];
    $lieuMob2[] = $RecupAllMobs2['lieuMob'];
    $isCapture2[] = $RecupAllMobs2['Capture'];
}

$reqRecupAllMobsCount2 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=2");
while($RecupAllMobsCount2 = $reqRecupAllMobsCount2->fetch()) {
    $nombreDonneesCount2[] = $RecupAllMobsCount2['count(*)'];
}

$reqRecupAllMobsCaptured2 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=2");
while($RecupAllMobsCaptured2 = $reqRecupAllMobsCaptured2->fetch()) {
    $nombreDonnees2[] = $RecupAllMobsCaptured2['count(*)'];
}


$reqRecupAllMobs3 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=3");
while($RecupAllMobs3 = $reqRecupAllMobs3->fetch()) {
    $nomMob3[] = $RecupAllMobs3['nomMob'];
    $lieuMob3[] = $RecupAllMobs3['lieuMob'];
    $isCapture3[] = $RecupAllMobs3['Capture'];
}

$reqRecupAllMobsCount3 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=3");
while($RecupAllMobsCount3 = $reqRecupAllMobsCount3->fetch()) {
    $nombreDonneesCount3[] = $RecupAllMobsCount3['count(*)'];
}

$reqRecupAllMobsCaptured3 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=3");
while($RecupAllMobsCaptured3 = $reqRecupAllMobsCaptured3->fetch()) {
    $nombreDonnees3[] = $RecupAllMobsCaptured3['count(*)'];
}

$reqRecupAllMobs4 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=4");
while($RecupAllMobs4 = $reqRecupAllMobs4->fetch()) {
    $nomMob4[] = $RecupAllMobs4['nomMob'];
    $lieuMob4[] = $RecupAllMobs4['lieuMob'];
    $isCapture4[] = $RecupAllMobs4['Capture'];
}

$reqRecupAllMobsCount4 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=4");
while($RecupAllMobsCount4 = $reqRecupAllMobsCount4->fetch()) {
    $nombreDonneesCount4[] = $RecupAllMobsCount4['count(*)'];
}

$reqRecupAllMobsCaptured4 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=4");
while($RecupAllMobsCaptured4 = $reqRecupAllMobsCaptured4->fetch()) {
    $nombreDonnees4[] = $RecupAllMobsCaptured4['count(*)'];
}

$reqRecupAllMobs5 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=5");
while($RecupAllMobs5 = $reqRecupAllMobs5->fetch()) {
    $nomMob5[] = $RecupAllMobs5['nomMob'];
    $lieuMob5[] = $RecupAllMobs5['lieuMob'];
    $isCapture5[] = $RecupAllMobs5['Capture'];
}

$reqRecupAllMobsCount5 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=5");
while($RecupAllMobsCount5 = $reqRecupAllMobsCount5->fetch()) {
    $nombreDonneesCount5[] = $RecupAllMobsCount5['count(*)'];
}

$reqRecupAllMobsCaptured5 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=5");
while($RecupAllMobsCaptured5 = $reqRecupAllMobsCaptured5->fetch()) {
    $nombreDonnees5[] = $RecupAllMobsCaptured5['count(*)'];
}

$reqRecupAllMobs6 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=6");
while($RecupAllMobs6 = $reqRecupAllMobs6->fetch()) {
    $nomMob6[] = $RecupAllMobs6['nomMob'];
    $lieuMob6[] = $RecupAllMobs6['lieuMob'];
    $isCapture6[] = $RecupAllMobs6['Capture'];
}

$reqRecupAllMobsCount6 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=6");
while($RecupAllMobsCount6 = $reqRecupAllMobsCount6->fetch()) {
    $nombreDonneesCount6[] = $RecupAllMobsCount6['count(*)'];
}

$reqRecupAllMobsCaptured6 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=6");
while($RecupAllMobsCaptured6 = $reqRecupAllMobsCaptured6->fetch()) {
    $nombreDonnees6[] = $RecupAllMobsCaptured6['count(*)'];
}

$reqRecupAllMobs7 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=7");
while($RecupAllMobs7 = $reqRecupAllMobs7->fetch()) {
    $nomMob7[] = $RecupAllMobs7['nomMob'];
    $lieuMob7[] = $RecupAllMobs7['lieuMob'];
    $isCapture7[] = $RecupAllMobs7['Capture'];
}

$reqRecupAllMobsCount7 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=7");
while($RecupAllMobsCount7 = $reqRecupAllMobsCount7->fetch()) {
    $nombreDonneesCount7[] = $RecupAllMobsCount7['count(*)'];
}

$reqRecupAllMobsCaptured7 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=7");
while($RecupAllMobsCaptured7 = $reqRecupAllMobsCaptured7->fetch()) {
    $nombreDonnees7[] = $RecupAllMobsCaptured7['count(*)'];
}

$reqRecupAllMobs8 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=8");
while($RecupAllMobs8 = $reqRecupAllMobs8->fetch()) {
    $nomMob8[] = $RecupAllMobs8['nomMob'];
    $lieuMob8[] = $RecupAllMobs8['lieuMob'];
    $isCapture8[] = $RecupAllMobs8['Capture'];
}

$reqRecupAllMobsCount8 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=8");
while($RecupAllMobsCount8 = $reqRecupAllMobsCount8->fetch()) {
    $nombreDonneesCount8[] = $RecupAllMobsCount8['count(*)'];
}

$reqRecupAllMobsCaptured8 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=8");
while($RecupAllMobsCaptured8 = $reqRecupAllMobsCaptured8->fetch()) {
    $nombreDonnees8[] = $RecupAllMobsCaptured8['count(*)'];
}

$reqRecupAllMobs9 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=9");
while($RecupAllMobs9 = $reqRecupAllMobs9->fetch()) {
    $nomMob9[] = $RecupAllMobs9['nomMob'];
    $lieuMob9[] = $RecupAllMobs9['lieuMob'];
    $isCapture9[] = $RecupAllMobs9['Capture'];
}

$reqRecupAllMobsCount9 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=9");
while($RecupAllMobsCount9 = $reqRecupAllMobsCount9->fetch()) {
    $nombreDonneesCount9[] = $RecupAllMobsCount9['count(*)'];
}

$reqRecupAllMobsCaptured9 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=9");
while($RecupAllMobsCaptured9 = $reqRecupAllMobsCaptured9->fetch()) {
    $nombreDonnees9[] = $RecupAllMobsCaptured9['count(*)'];
}

$reqRecupAllMobs10 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=10");
while($RecupAllMobs10 = $reqRecupAllMobs10->fetch()) {
    $nomMob10[] = $RecupAllMobs10['nomMob'];
    $lieuMob10[] = $RecupAllMobs10['lieuMob'];
    $isCapture10[] = $RecupAllMobs10['Capture'];
}

$reqRecupAllMobsCount10 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=10");
while($RecupAllMobsCount10 = $reqRecupAllMobsCount10->fetch()) {
    $nombreDonneesCount10[] = $RecupAllMobsCount10['count(*)'];
}

$reqRecupAllMobsCaptured10 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=10");
while($RecupAllMobsCaptured10 = $reqRecupAllMobsCaptured10->fetch()) {
    $nombreDonnees10[] = $RecupAllMobsCaptured10['count(*)'];
}

$reqRecupAllMobs11 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=11");
while($RecupAllMobs11 = $reqRecupAllMobs11->fetch()) {
    $nomMob11[] = $RecupAllMobs11['nomMob'];
    $lieuMob11[] = $RecupAllMobs11['lieuMob'];
    $isCapture11[] = $RecupAllMobs11['Capture'];
}

$reqRecupAllMobsCount11 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=11");
while($RecupAllMobsCount11 = $reqRecupAllMobsCount11->fetch()) {
    $nombreDonneesCount11[] = $RecupAllMobsCount11['count(*)'];
}

$reqRecupAllMobsCaptured11 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=11");
while($RecupAllMobsCaptured11 = $reqRecupAllMobsCaptured11->fetch()) {
    $nombreDonnees11[] = $RecupAllMobsCaptured11['count(*)'];
}

$reqRecupAllMobs12 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=12");
while($RecupAllMobs12 = $reqRecupAllMobs12->fetch()) {
    $nomMob12[] = $RecupAllMobs12['nomMob'];
    $lieuMob12[] = $RecupAllMobs12['lieuMob'];
    $isCapture12[] = $RecupAllMobs12['Capture'];
}

$reqRecupAllMobsCount12 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=12");
while($RecupAllMobsCount12 = $reqRecupAllMobsCount12->fetch()) {
    $nombreDonneesCount12[] = $RecupAllMobsCount12['count(*)'];
}

$reqRecupAllMobsCaptured12 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=12");
while($RecupAllMobsCaptured12 = $reqRecupAllMobsCaptured12->fetch()) {
    $nombreDonnees12[] = $RecupAllMobsCaptured12['count(*)'];
}

$reqRecupAllMobs13 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=13");
while($RecupAllMobs13 = $reqRecupAllMobs13->fetch()) {
    $nomMob13[] = $RecupAllMobs13['nomMob'];
    $lieuMob13[] = $RecupAllMobs13['lieuMob'];
    $isCapture13[] = $RecupAllMobs13['Capture'];
}

$reqRecupAllMobsCount13 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=13");
while($RecupAllMobsCount13 = $reqRecupAllMobsCount13->fetch()) {
    $nombreDonneesCount13[] = $RecupAllMobsCount13['count(*)'];
}

$reqRecupAllMobsCaptured13 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=13");
while($RecupAllMobsCaptured13 = $reqRecupAllMobsCaptured13->fetch()) {
    $nombreDonnees13[] = $RecupAllMobsCaptured13['count(*)'];
}

$reqRecupAllMobs14 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=14");
while($RecupAllMobs14 = $reqRecupAllMobs14->fetch()) {
    $nomMob14[] = $RecupAllMobs14['nomMob'];
    $lieuMob14[] = $RecupAllMobs14['lieuMob'];
    $isCapture14[] = $RecupAllMobs14['Capture'];
}

$reqRecupAllMobsCount14 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=14");
while($RecupAllMobsCount14 = $reqRecupAllMobsCount14->fetch()) {
    $nombreDonneesCount14[] = $RecupAllMobsCount14['count(*)'];
}

$reqRecupAllMobsCaptured14 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=14");
while($RecupAllMobsCaptured14 = $reqRecupAllMobsCaptured14->fetch()) {
    $nombreDonnees14[] = $RecupAllMobsCaptured14['count(*)'];
}

$reqRecupAllMobs15 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=15");
while($RecupAllMobs15 = $reqRecupAllMobs15->fetch()) {
    $nomMob15[] = $RecupAllMobs15['nomMob'];
    $lieuMob15[] = $RecupAllMobs15['lieuMob'];
    $isCapture15[] = $RecupAllMobs15['Capture'];
}

$reqRecupAllMobsCount15 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=15");
while($RecupAllMobsCount15 = $reqRecupAllMobsCount15->fetch()) {
    $nombreDonneesCount15[] = $RecupAllMobsCount15['count(*)'];
}

$reqRecupAllMobsCaptured15 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=15");
while($RecupAllMobsCaptured15 = $reqRecupAllMobsCaptured15->fetch()) {
    $nombreDonnees15[] = $RecupAllMobsCaptured15['count(*)'];
}

$reqRecupAllMobs16 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=16");
while($RecupAllMobs16 = $reqRecupAllMobs16->fetch()) {
    $nomMob16[] = $RecupAllMobs16['nomMob'];
    $lieuMob16[] = $RecupAllMobs16['lieuMob'];
    $isCapture16[] = $RecupAllMobs16['Capture'];
}

$reqRecupAllMobsCount16 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=16");
while($RecupAllMobsCount16 = $reqRecupAllMobsCount16->fetch()) {
    $nombreDonneesCount16[] = $RecupAllMobsCount16['count(*)'];
}

$reqRecupAllMobsCaptured16 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=16");
while($RecupAllMobsCaptured16 = $reqRecupAllMobsCaptured16->fetch()) {
    $nombreDonnees16[] = $RecupAllMobsCaptured16['count(*)'];
}

$reqRecupAllMobs17 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=17");
while($RecupAllMobs17 = $reqRecupAllMobs17->fetch()) {
    $nomMob17[] = $RecupAllMobs17['nomMob'];
    $lieuMob17[] = $RecupAllMobs17['lieuMob'];
    $isCapture17[] = $RecupAllMobs17['Capture'];
}

$reqRecupAllMobsCount17 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=17");
while($RecupAllMobsCount17 = $reqRecupAllMobsCount17->fetch()) {
    $nombreDonneesCount17[] = $RecupAllMobsCount17['count(*)'];
}

$reqRecupAllMobsCaptured17 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=17");
while($RecupAllMobsCaptured17 = $reqRecupAllMobsCaptured17->fetch()) {
    $nombreDonnees17[] = $RecupAllMobsCaptured17['count(*)'];
}

$reqRecupAllMobs18 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=18");
while($RecupAllMobs18 = $reqRecupAllMobs18->fetch()) {
    $nomMob18[] = $RecupAllMobs18['nomMob'];
    $lieuMob18[] = $RecupAllMobs18['lieuMob'];
    $isCapture18[] = $RecupAllMobs18['Capture'];
}

$reqRecupAllMobsCount18 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=18");
while($RecupAllMobsCount18 = $reqRecupAllMobsCount18->fetch()) {
    $nombreDonneesCount18[] = $RecupAllMobsCount18['count(*)'];
}

$reqRecupAllMobsCaptured18 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=18");
while($RecupAllMobsCaptured18 = $reqRecupAllMobsCaptured18->fetch()) {
    $nombreDonnees18[] = $RecupAllMobsCaptured18['count(*)'];
}

$reqRecupAllMobs19 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=19");
while($RecupAllMobs19 = $reqRecupAllMobs19->fetch()) {
    $nomMob19[] = $RecupAllMobs19['nomMob'];
    $lieuMob19[] = $RecupAllMobs19['lieuMob'];
    $isCapture19[] = $RecupAllMobs19['Capture'];
}

$reqRecupAllMobsCount19 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=19");
while($RecupAllMobsCount19 = $reqRecupAllMobsCount19->fetch()) {
    $nombreDonneesCount19[] = $RecupAllMobsCount19['count(*)'];
}

$reqRecupAllMobsCaptured19 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=19");
while($RecupAllMobsCaptured19 = $reqRecupAllMobsCaptured19->fetch()) {
    $nombreDonnees19[] = $RecupAllMobsCaptured19['count(*)'];
}

$reqRecupAllMobs20 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=20");
while($RecupAllMobs20 = $reqRecupAllMobs20->fetch()) {
    $nomMob20[] = $RecupAllMobs20['nomMob'];
    $lieuMob20[] = $RecupAllMobs20['lieuMob'];
    $isCapture20[] = $RecupAllMobs20['Capture'];
}

$reqRecupAllMobsCount20 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=20");
while($RecupAllMobsCount20 = $reqRecupAllMobsCount20->fetch()) {
    $nombreDonneesCount20[] = $RecupAllMobsCount20['count(*)'];
}

$reqRecupAllMobsCaptured20 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=20");
while($RecupAllMobsCaptured20 = $reqRecupAllMobsCaptured20->fetch()) {
    $nombreDonnees20[] = $RecupAllMobsCaptured20['count(*)'];
}

$reqRecupAllMobs21 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=21");
while($RecupAllMobs21 = $reqRecupAllMobs21->fetch()) {
    $nomMob21[] = $RecupAllMobs21['nomMob'];
    $lieuMob21[] = $RecupAllMobs21['lieuMob'];
    $isCapture21[] = $RecupAllMobs21['Capture'];
}

$reqRecupAllMobsCount21 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=21");
while($RecupAllMobsCount21 = $reqRecupAllMobsCount21->fetch()) {
    $nombreDonneesCount21[] = $RecupAllMobsCount21['count(*)'];
}

$reqRecupAllMobsCaptured21 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=21");
while($RecupAllMobsCaptured21 = $reqRecupAllMobsCaptured21->fetch()) {
    $nombreDonnees21[] = $RecupAllMobsCaptured21['count(*)'];
}

$reqRecupAllMobs22 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=22");
while($RecupAllMobs22 = $reqRecupAllMobs22->fetch()) {
    $nomMob22[] = $RecupAllMobs22['nomMob'];
    $lieuMob22[] = $RecupAllMobs22['lieuMob'];
    $isCapture22[] = $RecupAllMobs22['Capture'];
}

$reqRecupAllMobsCount22 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=22");
while($RecupAllMobsCount22 = $reqRecupAllMobsCount22->fetch()) {
    $nombreDonneesCount22[] = $RecupAllMobsCount22['count(*)'];
}

$reqRecupAllMobsCaptured22 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=22");
while($RecupAllMobsCaptured22 = $reqRecupAllMobsCaptured22->fetch()) {
    $nombreDonnees22[] = $RecupAllMobsCaptured22['count(*)'];
}

$reqRecupAllMobs23 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=23");
while($RecupAllMobs23 = $reqRecupAllMobs23->fetch()) {
    $nomMob23[] = $RecupAllMobs23['nomMob'];
    $lieuMob23[] = $RecupAllMobs23['lieuMob'];
    $isCapture23[] = $RecupAllMobs23['Capture'];
}

$reqRecupAllMobsCount23 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=23");
while($RecupAllMobsCount23 = $reqRecupAllMobsCount23->fetch()) {
    $nombreDonneesCount23[] = $RecupAllMobsCount23['count(*)'];
}

$reqRecupAllMobsCaptured23 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=23");
while($RecupAllMobsCaptured23 = $reqRecupAllMobsCaptured23->fetch()) {
    $nombreDonnees23[] = $RecupAllMobsCaptured23['count(*)'];
}

$reqRecupAllMobs24 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=24");
while($RecupAllMobs24 = $reqRecupAllMobs24->fetch()) {
    $nomMob24[] = $RecupAllMobs24['nomMob'];
    $lieuMob24[] = $RecupAllMobs24['lieuMob'];
    $isCapture24[] = $RecupAllMobs24['Capture'];
}

$reqRecupAllMobsCount24 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=24");
while($RecupAllMobsCount24 = $reqRecupAllMobsCount24->fetch()) {
    $nombreDonneesCount24[] = $RecupAllMobsCount24['count(*)'];
}

$reqRecupAllMobsCaptured24 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=24");
while($RecupAllMobsCaptured24 = $reqRecupAllMobsCaptured24->fetch()) {
    $nombreDonnees24[] = $RecupAllMobsCaptured24['count(*)'];
}

$reqRecupAllMobs25 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=25");
while($RecupAllMobs25 = $reqRecupAllMobs25->fetch()) {
    $nomMob25[] = $RecupAllMobs25['nomMob'];
    $lieuMob25[] = $RecupAllMobs25['lieuMob'];
    $isCapture25[] = $RecupAllMobs25['Capture'];
}

$reqRecupAllMobsCount25 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=25");
while($RecupAllMobsCount25= $reqRecupAllMobsCount25->fetch()) {
    $nombreDonneesCount25[] = $RecupAllMobsCount25['count(*)'];
}

$reqRecupAllMobsCaptured25 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=25");
while($RecupAllMobsCaptured25 = $reqRecupAllMobsCaptured25->fetch()) {
    $nombreDonnees25[] = $RecupAllMobsCaptured25['count(*)'];
}

$reqRecupAllMobs26 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=26");
while($RecupAllMobs26 = $reqRecupAllMobs26->fetch()) {
    $nomMob26[] = $RecupAllMobs26['nomMob'];
    $lieuMob26[] = $RecupAllMobs26['lieuMob'];
    $isCapture26[] = $RecupAllMobs26['Capture'];
}

$reqRecupAllMobsCount26 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=26");
while($RecupAllMobsCount26 = $reqRecupAllMobsCount26->fetch()) {
    $nombreDonneesCount26[] = $RecupAllMobsCount26['count(*)'];
}

$reqRecupAllMobsCaptured26 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=26");
while($RecupAllMobsCaptured26 = $reqRecupAllMobsCaptured26->fetch()) {
    $nombreDonnees26[] = $RecupAllMobsCaptured26['count(*)'];
}

$reqRecupAllMobs27 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=27");
while($RecupAllMobs27 = $reqRecupAllMobs27->fetch()) {
    $nomMob27[] = $RecupAllMobs27['nomMob'];
    $lieuMob27[] = $RecupAllMobs27['lieuMob'];
    $isCapture27[] = $RecupAllMobs27['Capture'];
}

$reqRecupAllMobsCount27 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=27");
while($RecupAllMobsCount27 = $reqRecupAllMobsCount27->fetch()) {
    $nombreDonneesCount27[] = $RecupAllMobsCount27['count(*)'];
}

$reqRecupAllMobsCaptured27 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=27");
while($RecupAllMobsCaptured27 = $reqRecupAllMobsCaptured27->fetch()) {
    $nombreDonnees27[] = $RecupAllMobsCaptured27['count(*)'];
}

$reqRecupAllMobs28 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=28");
while($RecupAllMobs28 = $reqRecupAllMobs28->fetch()) {
    $nomMob28[] = $RecupAllMobs28['nomMob'];
    $lieuMob28[] = $RecupAllMobs28['lieuMob'];
    $isCapture28[] = $RecupAllMobs28['Capture'];
}

$reqRecupAllMobsCount28 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=28");
while($RecupAllMobsCount28 = $reqRecupAllMobsCount28->fetch()) {
    $nombreDonneesCount28[] = $RecupAllMobsCount28['count(*)'];
}

$reqRecupAllMobsCaptured28 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=28");
while($RecupAllMobsCaptured28 = $reqRecupAllMobsCaptured28->fetch()) {
    $nombreDonnees28[] = $RecupAllMobsCaptured28['count(*)'];
}

$reqRecupAllMobs29 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=29");
while($RecupAllMobs29 = $reqRecupAllMobs29->fetch()) {
    $nomMob29[] = $RecupAllMobs29['nomMob'];
    $lieuMob29[] = $RecupAllMobs29['lieuMob'];
    $isCapture29[] = $RecupAllMobs29['Capture'];
}

$reqRecupAllMobsCount29 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=29");
while($RecupAllMobsCount29 = $reqRecupAllMobsCount29->fetch()) {
    $nombreDonneesCount29[] = $RecupAllMobsCount29['count(*)'];
}

$reqRecupAllMobsCaptured29 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=29");
while($RecupAllMobsCaptured29 = $reqRecupAllMobsCaptured29->fetch()) {
    $nombreDonnees29[] = $RecupAllMobsCaptured29['count(*)'];
}

$reqRecupAllMobs30 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=30");
while($RecupAllMobs30 = $reqRecupAllMobs30->fetch()) {
    $nomMob30[] = $RecupAllMobs30['nomMob'];
    $lieuMob30[] = $RecupAllMobs30['lieuMob'];
    $isCapture30[] = $RecupAllMobs30['Capture'];
}

$reqRecupAllMobsCount30 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=30");
while($RecupAllMobsCount30 = $reqRecupAllMobsCount30->fetch()) {
    $nombreDonneesCount30[] = $RecupAllMobsCount30['count(*)'];
}

$reqRecupAllMobsCaptured30 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=30");
while($RecupAllMobsCaptured30 = $reqRecupAllMobsCaptured30->fetch()) {
    $nombreDonnees30[] = $RecupAllMobsCaptured30['count(*)'];
}

$reqRecupAllMobs31 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=31");
while($RecupAllMobs31 = $reqRecupAllMobs31->fetch()) {
    $nomMob31[] = $RecupAllMobs31['nomMob'];
    $lieuMob31[] = $RecupAllMobs31['lieuMob'];
    $isCapture31[] = $RecupAllMobs31['Capture'];
}

$reqRecupAllMobsCount31 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=31");
while($RecupAllMobsCount31 = $reqRecupAllMobsCount31->fetch()) {
    $nombreDonneesCount31[] = $RecupAllMobsCount31['count(*)'];
}

$reqRecupAllMobsCaptured31 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=31");
while($RecupAllMobsCaptured31 = $reqRecupAllMobsCaptured31->fetch()) {
    $nombreDonnees31[] = $RecupAllMobsCaptured31['count(*)'];
}

$reqRecupAllMobs32 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=32");
while($RecupAllMobs32 = $reqRecupAllMobs32->fetch()) {
    $nomMob32[] = $RecupAllMobs32['nomMob'];
    $lieuMob32[] = $RecupAllMobs32['lieuMob'];
    $isCapture32[] = $RecupAllMobs32['Capture'];
}

$reqRecupAllMobsCount32 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=32");
while($RecupAllMobsCount32 = $reqRecupAllMobsCount32->fetch()) {
    $nombreDonneesCount32[] = $RecupAllMobsCount32['count(*)'];
}

$reqRecupAllMobsCaptured32 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=32");
while($RecupAllMobsCaptured32 = $reqRecupAllMobsCaptured32->fetch()) {
    $nombreDonnees32[] = $RecupAllMobsCaptured32['count(*)'];
}

$reqRecupAllMobs33 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=33");
while($RecupAllMobs33 = $reqRecupAllMobs33->fetch()) {
    $nomMob33[] = $RecupAllMobs33['nomMob'];
    $lieuMob33[] = $RecupAllMobs33['lieuMob'];
    $isCapture33[] = $RecupAllMobs33['Capture'];
}

$reqRecupAllMobsCount33 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=33");
while($RecupAllMobsCount33 = $reqRecupAllMobsCount33->fetch()) {
    $nombreDonneesCount33[] = $RecupAllMobsCount33['count(*)'];
}

$reqRecupAllMobsCaptured33 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=33");
while($RecupAllMobsCaptured33 = $reqRecupAllMobsCaptured33->fetch()) {
    $nombreDonnees33[] = $RecupAllMobsCaptured33['count(*)'];
}

$reqRecupAllMobs34 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=34");
while($RecupAllMobs34 = $reqRecupAllMobs34->fetch()) {
    $nomMob34[] = $RecupAllMobs34['nomMob'];
    $lieuMob34[] = $RecupAllMobs34['lieuMob'];
    $isCapture34[] = $RecupAllMobs34['Capture'];
}

$reqRecupAllMobsCount34 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=34");
while($RecupAllMobsCount34 = $reqRecupAllMobsCount34->fetch()) {
    $nombreDonneesCount34[] = $RecupAllMobsCount34['count(*)'];
}

$reqRecupAllMobsCaptured34 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=34");
while($RecupAllMobsCaptured34 = $reqRecupAllMobsCaptured34->fetch()) {
    $nombreDonnees34[] = $RecupAllMobsCaptured34['count(*)'];
}

$reqRecupAllMobs35 = $conn->query("SELECT * FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=35");
while($RecupAllMobs35 = $reqRecupAllMobs35->fetch()) {
    $nomMob35[] = $RecupAllMobs35['nomMob'];
    $lieuMob35[] = $RecupAllMobs35['lieuMob'];
    $isCapture35[] = $RecupAllMobs35['Capture'];
}

$reqRecupAllMobsCount35 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND etapeMob=35");
while($RecupAllMobsCount35 = $reqRecupAllMobsCount35->fetch()) {
    $nombreDonneesCount35[] = $RecupAllMobsCount35['count(*)'];
}

$reqRecupAllMobsCaptured35 = $conn->query("SELECT count(*) FROM *****.etapes WHERE idUser='".$_SESSION['ID']."' AND Capture='1' AND etapeMob=35");
while($RecupAllMobsCaptured35 = $reqRecupAllMobsCaptured35->fetch()) {
    $nombreDonnees35[] = $RecupAllMobsCaptured35['count(*)'];
}


// ACTIONS AU CLIC DU BOUTON DE VALIDATION DES CAPTURES

if(isset($_POST['submitCapture'])) {
    for($j = 1; $j < 36; $j++) {
        if($j == 5) {
            for($i = 0; $i < 19; $i++) {
                if(isset($_POST["Etape5Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob5[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob5[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
        if($j == 14) {
            for($i = 0; $i < 18; $i++) {
                if(isset($_POST["Etape14Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob14[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob14[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
        if($j ==16) {
            for($i = 0; $i < 2; $i++) {
                if(isset($_POST["Etape16Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob16[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob16[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
        if($j == 18) {
            for($i = 0; $i < 17; $i++) {
                if(isset($_POST["Etape18Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob18[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob18[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
        if($j == 19) {
            for($i = 0; $i < 11; $i++) {
                if(isset($_POST["Etape19Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob19[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob19[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
        if($j == 34) {
            for($i = 0; $i < 6; $i++) {
                if(isset($_POST["Etape34Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob34[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob34[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
        if($j == 35) {
            for($i = 0; $i < 1; $i++) {
                if(isset($_POST["Etape35Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob35[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".$nomMob35[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
        if($j < 5 || $j > 5 && $j < 14 || $j == 15 || $j == 17 || $j > 19 && $j < 34) {
            for($i = 0; $i < 20; $i++) {
                if(isset($_POST["Etape".$j."Mob$i"])) {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=1 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".${"nomMob".$j}[$i]."';");
                    header("Location: profil.php");
                }
                else {
                    $updateCapture=$conn->query("UPDATE *****.etapes SET Capture=0 WHERE idUser='".$_SESSION['ID']."' AND nomMob='".${"nomMob".$j}[$i]."';");
                    header("Location: profil.php");
                }
            }
        }
    }
}

// ACTIONS AU CLIC DU BOUTON DE RECHERCHE D'UN MOB

if (isset($_POST['buttonSearchEtapeMob'])) {
    $reqSearchMobWhichEtape = $conn->prepare("select etapeMob from etapes where idUser='".$_SESSION['ID']."' AND nomMob LIKE '%".$_POST['searchEtapeMob']."' OR nomMob LIKE '".$_POST['searchEtapeMob']."%' OR nomMob='".$_POST['searchEtapeMob']."'");
    $reqSearchMobWhichEtape->execute();
    $DoesMobExists = $reqSearchMobWhichEtape->rowCount();
    while($SearchMobWhichEtape = $reqSearchMobWhichEtape->fetch()) {
        $MobWhichEtape[] = $SearchMobWhichEtape['etapeMob'];
    }
    if(!empty($_POST['searchEtapeMob'])) {
        if($DoesMobExists > 0) {
            for($i = 0; $i < sizeof($MobWhichEtape); $i++) {
                $WhichStep .= "Etape " . $MobWhichEtape[$i];
                if($i != sizeof($MobWhichEtape) - 1) {
                    $WhichStep .= " ou ";
                }
            }
        }
        else {
            $WhichStep = "Ce mob n'existe pas. Menteur.";
        }
    }
    else {
        $WhichStep = "Rempli le champs, mécréant.";
    }
}

?>
<html style="background: url('./assets/img/backgroundConnexion.jpg') no-repeat center center fixed; background-size: cover; height: 100%;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon avancement</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <script src="assets/js/main.js"></script>

        <!-- RECHERCHE DE MONSTRE -->

        <center>
            <div style="height: 19vh; width: 50%; background-color: white; margin-top: 15vh;">
                <form method="post">
                    <label class="labelConnexion">
                        <span>
                            Rentrez le mob recherché
                        </span>
                        <br />
                        <span style="color: red;">
                            Ce bouton rafraîchit la page, validez vos captures avant de chercher un mob.
                        </span>
                    </label>
                    <input type="text" name="searchEtapeMob"><br />
                    <button name="buttonSearchEtapeMob">Chercher</button><br />
                    <label class="labelConnexion"><?php echo $WhichStep; ?></label>
                </form>
            </div>
        </center>

        <!-- HEADER -->

        <form method="post">
        <div class="block">
            <header class="header">
                <span style="margin-left: 1vw;" class="header-logo"><?php echo "Je te souhaite une bonne chasse, ".$_SESSION['login']; ?></span>
                <nav class="header-menu">
                    <p style="margin-left: 40vw; color: black; margin-top: 0.5vh;" class="navbar-item">
                        <input class="buttonValidate"  style="margin-right: 5vw;" type='submit' name='submitCapture' value="Valider mes captures">
                        <span id="spanGlobal">Avancement global : <script>document.write(AvancementGlobal+"/"+AvancementMaxGlobal+" soit en pourcentage : "+AvancementPourcentageGlobal+"%")</script><progress style="width: 100%" id="progressGlobal"></progress></span>
                    </p>
                </nav>
            </header>
        </div>


            <!-- CREATION ET REMPLISSAGE DES MENUS ACCORDEONS -->

            <center>
                <?php
                if($nombreDonnees1[0] == 20) {
                    echo "<button id='Etape1' class='accordion' style='width: 50%; background-color: #6EB8FF; margin-top: 10vh;' onclick='return false;'>Etape 1  <span style='margin-left: 10vw;'></span> <span id='spanAll1'><script>document.write(AvancementEtape1+'/'+AvancementMaxEtape1+' soit en pourcentage : '+AvancementPourcentageEtape1+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape1'></progress></button>";
                }
                else {
                    echo "<button id='Etape1' class='accordion' style='width: 50%; margin-top: 10vh;' onclick='return false;'>Etape 1 <span style='margin-left: 10vw;'></span> <span id='spanAll1'><script>document.write(AvancementEtape1+'/'+AvancementMaxEtape1+' soit en pourcentage : '+AvancementPourcentageEtape1+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape1'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape1' onclick='checkAllEtape(1);'> <span class='checkmark'></span></label>";
                        for($i = 0; $i < $nombreDonneesCount1[0]; $i++) {
                            if($isCapture1[$i] == 0) {
                                echo '<div>';
                                    echo '<p style="margin: 0 auto;">';
                                        echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape1Mob$i' id='Etape1Mob$i' onclick='ActuEtape1Mob($i);'> <span class='checkmark'></span></label>";
                                    echo '</p>';
                                    echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape1/".$nomMob1[$i].".svg'>";
                                    echo '<p style="margin-right: auto; ">';
                                        echo $nomMob1[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob1[$i].'</span>';
                                    echo '</p>';
                                echo '</div> <br />';
                            }
                            else {
                                echo '<div>';
                                    echo '<p style="margin: 0 auto;">';
                                        echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape1Mob$i' id='Etape1Mob$i' onclick='ActuEtape1Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                    echo '</p>';
                                    echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape1/".$nomMob1[$i].".svg'>";
                                    echo '<p style="margin-right: auto; ">';
                                        echo $nomMob1[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob1[$i].'</span>';
                                    echo '</p>';
                                echo '</div> <br />';
                            }
                        }
                    ?>
                </div>

                <?php
                if($nombreDonnees2[0] == 20) {
                    echo "<button id='Etape2' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 2 <span style='margin-left: 10vw;'></span> <span id='spanAll2'><script>document.write(AvancementEtape2+'/'+AvancementMaxEtape2+' soit en pourcentage : '+AvancementPourcentageEtape2+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape2'></progress></button>";
                }
                else {
                    echo "<button id='Etape2' class='accordion' style='width: 50%;' onclick='return false;'>Etape 2 <span style='margin-left: 10vw;'></span> <span id='spanAll2'><script>document.write(AvancementEtape2+'/'+AvancementMaxEtape2+' soit en pourcentage : '+AvancementPourcentageEtape2+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape2'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape2' onclick='checkAllEtape(2);'> <span class='checkmark'></span></label>";
                        for($i = 0; $i < $nombreDonneesCount2[0]; $i++) {
                            if($isCapture2[$i] == 0) {
                                echo '<div>';
                                    echo '<p style="margin: 0 auto;">';
                                        echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape2Mob$i' id='Etape2Mob$i' onclick='ActuEtape2Mob($i);'> <span class='checkmark''></span></label>";
                                    echo '</p>';
                                    echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape2/".$nomMob2[$i].".svg'>";
                                    echo '<p style="margin-right: auto; ">';
                                        echo $nomMob2[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob2[$i].'</span>';
                                    echo '</p>';
                                echo '</div> <br />';
                            }
                            else {
                                echo '<div>';
                                    echo '<p style="margin: 0 auto;">';
                                        echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape2Mob$i' id='Etape2Mob$i' onclick='ActuEtape2Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                    echo '</p>';
                                    echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape2/".$nomMob2[$i].".svg'>";
                                    echo '<p style="margin-right: auto; ">';
                                        echo $nomMob2[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob2[$i].'</span>';
                                    echo '</p>';
                                echo '</div> <br />';
                            }
                        }
                    ?>
                </div>

                <?php
                if($nombreDonnees3[0] == 20) {
                    echo "<button id='Etape3' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 3 <span style='margin-left: 10vw;'></span> <span id='spanAll3'><script>document.write(AvancementEtape3+'/'+AvancementMaxEtape3+' soit en pourcentage : '+AvancementPourcentageEtape3+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape3'></progress></button>";
                }
                else {
                    echo "<button id='Etape3' class='accordion' style='width: 50%;' onclick='return false;'>Etape 3 <span style='margin-left: 10vw;'></span> <span id='spanAll3'><script>document.write(AvancementEtape3+'/'+AvancementMaxEtape3+' soit en pourcentage : '+AvancementPourcentageEtape3+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape3'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape3' onclick='checkAllEtape(3);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount3[0]; $i++) {
                        if($isCapture3[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape3Mob$i' id='Etape3Mob$i' onclick='ActuEtape3Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape3/".$nomMob3[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob3[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob3[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape3Mob$i' id='Etape3Mob$i' onclick='ActuEtape3Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape3/".$nomMob3[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob3[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob3[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees4[0] == 20) {
                    echo "<button id='Etape4' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 4 <span style='margin-left: 10vw;'></span> <span id='spanAll4'><script>document.write(AvancementEtape4+'/'+AvancementMaxEtape4+' soit en pourcentage : '+AvancementPourcentageEtape4+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape4'></progress></button>";
                }
                else {
                    echo "<button id='Etape4' class='accordion' style='width: 50%;' onclick='return false;'>Etape 4 <span style='margin-left: 10vw;'></span> <span id='spanAll4'><script>document.write(AvancementEtape4+'/'+AvancementMaxEtape4+' soit en pourcentage : '+AvancementPourcentageEtape4+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape4'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape4' onclick='checkAllEtape(4);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount4[0]; $i++) {
                        if($isCapture4[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape4Mob$i' id='Etape4Mob$i' onclick='ActuEtape4Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape4/".$nomMob4[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob4[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob4[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape4Mob$i' id='Etape4Mob$i' onclick='ActuEtape4Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape4/".$nomMob4[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob4[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob4[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees5[0] == 19) {
                    echo "<button id='Etape5' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 5 <span style='margin-left: 10vw;'></span> <span id='spanAll5'><script>document.write(AvancementEtape5+'/'+AvancementMaxEtape5+' soit en pourcentage : '+AvancementPourcentageEtape5+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape5'></progress></button>";
                }
                else {
                    echo "<button id='Etape5' class='accordion' style='width: 50%;' onclick='return false;'>Etape 5 <span style='margin-left: 10vw;'></span> <span id='spanAll5'><script>document.write(AvancementEtape5+'/'+AvancementMaxEtape5+' soit en pourcentage : '+AvancementPourcentageEtape5+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape5'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape5' onclick='checkAllEtape(5);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount5[0]; $i++) {
                        if($isCapture5[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape5Mob$i' id='Etape5Mob$i' onclick='ActuEtape5Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape5/".$nomMob5[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob5[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob5[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape5Mob$i' id='Etape5Mob$i' onclick='ActuEtape5Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape5/".$nomMob5[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob5[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob5[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees6[0] == 20) {
                    echo "<button id='Etape6' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 6 <span style='margin-left: 10vw;'></span> <span id='spanAll6'><script>document.write(AvancementEtape6+'/'+AvancementMaxEtape6+' soit en pourcentage : '+AvancementPourcentageEtape6+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape6'></progress></button>";
                }
                else {
                    echo "<button id='Etape6' class='accordion' style='width: 50%;' onclick='return false;'>Etape 6 <span style='margin-left: 10vw;'></span> <span id='spanAll6'><script>document.write(AvancementEtape6+'/'+AvancementMaxEtape6+' soit en pourcentage : '+AvancementPourcentageEtape6+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape6'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape6' onclick='checkAllEtape(6);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount6[0]; $i++) {
                        if($isCapture6[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape6Mob$i' id='Etape6Mob$i' onclick='ActuEtape6Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape6/".$nomMob6[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob6[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob6[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape6Mob$i' id='Etape6Mob$i' onclick='ActuEtape6Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape6/".$nomMob6[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob6[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob6[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees7[0] == 20) {
                    echo "<button id='Etape7' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 7 <span style='margin-left: 10vw;'></span> <span id='spanAll7'><script>document.write(AvancementEtape7+'/'+AvancementMaxEtape7+' soit en pourcentage : '+AvancementPourcentageEtape7+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape7'></progress></button>";
                }
                else {
                    echo "<button id='Etape7' class='accordion' style='width: 50%;' onclick='return false;'>Etape 7 <span style='margin-left: 10vw;'></span> <span id='spanAll7'><script>document.write(AvancementEtape7+'/'+AvancementMaxEtape7+' soit en pourcentage : '+AvancementPourcentageEtape7+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape7'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape7' onclick='checkAllEtape(7);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount7[0]; $i++) {
                        if($isCapture7[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape7Mob$i' id='Etape7Mob$i' onclick='ActuEtape7Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape7/".$nomMob7[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob7[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob7[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape7Mob$i' id='Etape7Mob$i' onclick='ActuEtape7Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape7/".$nomMob7[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob7[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob7[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees8[0] == 20) {
                    echo "<button id='Etape8' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 8 <span style='margin-left: 10vw;'></span> <span id='spanAll8'><script>document.write(AvancementEtape8+'/'+AvancementMaxEtape8+' soit en pourcentage : '+AvancementPourcentageEtape8+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape8'></progress></button>";
                }
                else {
                    echo "<button id='Etape8' class='accordion' style='width: 50%;' onclick='return false;'>Etape 8 <span style='margin-left: 10vw;'></span> <span id='spanAll8'><script>document.write(AvancementEtape8+'/'+AvancementMaxEtape8+' soit en pourcentage : '+AvancementPourcentageEtape8+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape8'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape8' onclick='checkAllEtape(8);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount8[0]; $i++) {
                        if($isCapture8[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape8Mob$i' id='Etape8Mob$i' onclick='ActuEtape8Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape8/".$nomMob8[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob8[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob8[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape8Mob$i' id='Etape8Mob$i' onclick='ActuEtape8Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape8/".$nomMob8[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob8[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob8[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees9[0] == 20) {
                    echo "<button id='Etape9' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 9 <span style='margin-left: 10vw;'></span> <span id='spanAll9'><script>document.write(AvancementEtape9+'/'+AvancementMaxEtape9+' soit en pourcentage : '+AvancementPourcentageEtape9+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape9'></progress></button>";
                }
                else {
                    echo "<button id='Etape9' class='accordion' style='width: 50%;' onclick='return false;'>Etape 9 <span style='margin-left: 10vw;'></span> <span id='spanAll9'><script>document.write(AvancementEtape9+'/'+AvancementMaxEtape9+' soit en pourcentage : '+AvancementPourcentageEtape9+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape9'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape9' onclick='checkAllEtape(9);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount9[0]; $i++) {
                        if($isCapture9[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape9Mob$i' id='Etape9Mob$i' onclick='ActuEtape9Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape9/".$nomMob9[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob9[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob9[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape9Mob$i' id='Etape9Mob$i' onclick='ActuEtape9Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape9/".$nomMob9[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob9[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob9[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees10[0] == 20) {
                    echo "<button id='Etape10' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 10 <span style='margin-left: 10vw;'></span> <span id='spanAll10'><script>document.write(AvancementEtape10+'/'+AvancementMaxEtape10+' soit en pourcentage : '+AvancementPourcentageEtape10+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape10'></progress></button>";
                }
                else {
                    echo "<button id='Etape10' class='accordion' style='width: 50%;' onclick='return false;'>Etape 10 <span style='margin-left: 10vw;'></span> <span id='spanAll10'><script>document.write(AvancementEtape10+'/'+AvancementMaxEtape10+' soit en pourcentage : '+AvancementPourcentageEtape10+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape10'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape10' onclick='checkAllEtape(10);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount10[0]; $i++) {
                        if($isCapture10[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape10Mob$i' id='Etape10Mob$i' onclick='ActuEtape10Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape10/".$nomMob10[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob10[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob10[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape10Mob$i' id='Etape10Mob$i' onclick='ActuEtape10Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape10/".$nomMob10[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob10[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob10[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees11[0] == 20) {
                    echo "<button id='Etape11' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 11 <span style='margin-left: 10vw;'></span> <span id='spanAll11'><script>document.write(AvancementEtape11+'/'+AvancementMaxEtape11+' soit en pourcentage : '+AvancementPourcentageEtape11+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape11'></progress></button>";
                }
                else {
                    echo "<button id='Etape11' class='accordion' style='width: 50%;' onclick='return false;'>Etape 11 <span style='margin-left: 10vw;'></span> <span id='spanAll11'><script>document.write(AvancementEtape11+'/'+AvancementMaxEtape11+' soit en pourcentage : '+AvancementPourcentageEtape11+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape11'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape11' onclick='checkAllEtape(11);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount11[0]; $i++) {
                        if($isCapture11[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape11Mob$i' id='Etape11Mob$i' onclick='ActuEtape11Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape11/".$nomMob11[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob11[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob11[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape11Mob$i' id='Etape11Mob$i' onclick='ActuEtape11Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape11/".$nomMob11[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob11[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob11[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees12[0] == 20) {
                    echo "<button id='Etape12' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 12 <span style='margin-left: 10vw;'></span> <span id='spanAll12'><script>document.write(AvancementEtape12+'/'+AvancementMaxEtape12+' soit en pourcentage : '+AvancementPourcentageEtape12+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape12'></progress></button>";
                }
                else {
                    echo "<button id='Etape12' class='accordion' style='width: 50%;' onclick='return false;'>Etape 12 <span style='margin-left: 10vw;'></span> <span id='spanAll12'><script>document.write(AvancementEtape12+'/'+AvancementMaxEtape12+' soit en pourcentage : '+AvancementPourcentageEtape12+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape12'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape12' onclick='checkAllEtape(12);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount12[0]; $i++) {
                        if($isCapture12[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape12Mob$i' id='Etape12Mob$i' onclick='ActuEtape12Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape12/".$nomMob12[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob12[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob12[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape12Mob$i' id='Etape12Mob$i' onclick='ActuEtape12Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape12/".$nomMob12[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob12[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob12[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees13[0] == 20) {
                    echo "<button id='Etape13' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 13 <span style='margin-left: 10vw;'></span> <span id='spanAll13'><script>document.write(AvancementEtape13+'/'+AvancementMaxEtape13+' soit en pourcentage : '+AvancementPourcentageEtape13+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape13'></progress></button>";
                }
                else {
                    echo "<button id='Etape13' class='accordion' style='width: 50%;' onclick='return false;'>Etape 13 <span style='margin-left: 10vw;'></span> <span id='spanAll13'><script>document.write(AvancementEtape13+'/'+AvancementMaxEtape13+' soit en pourcentage : '+AvancementPourcentageEtape13+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape13'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape13' onclick='checkAllEtape(13);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount13[0]; $i++) {
                        if($isCapture13[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape13Mob$i' id='Etape13Mob$i' onclick='ActuEtape13Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape13/".$nomMob13[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob13[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob13[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape13Mob$i' id='Etape13Mob$i' onclick='ActuEtape13Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape13/".$nomMob13[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob13[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob13[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees14[0] == 18) {
                    echo "<button id='Etape14' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 14 <span style='margin-left: 10vw;'></span> <span id='spanAll14'><script>document.write(AvancementEtape14+'/'+AvancementMaxEtape14+' soit en pourcentage : '+AvancementPourcentageEtape14+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape14'></progress></button>";
                }
                else {
                    echo "<button id='Etape14' class='accordion' style='width: 50%;' onclick='return false;'>Etape 14 <span style='margin-left: 10vw;'></span> <span id='spanAll14'><script>document.write(AvancementEtape14+'/'+AvancementMaxEtape14+' soit en pourcentage : '+AvancementPourcentageEtape14+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape14'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape14' onclick='checkAllEtape(14);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount14[0]; $i++) {
                        if($isCapture14[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape14Mob$i' id='Etape14Mob$i' onclick='ActuEtape14Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape14/".$nomMob14[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob14[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob14[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape14Mob$i' id='Etape14Mob$i' onclick='ActuEtape14Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape14/".$nomMob14[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob14[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob14[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees15[0] == 20) {
                    echo "<button id='Etape15' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 15 <span style='margin-left: 10vw;'></span> <span id='spanAll15'><script>document.write(AvancementEtape15+'/'+AvancementMaxEtape15+' soit en pourcentage : '+AvancementPourcentageEtape15+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape15'></progress></button>";
                }
                else {
                    echo "<button id='Etape15' class='accordion' style='width: 50%;' onclick='return false;'>Etape 15 <span style='margin-left: 10vw;'></span> <span id='spanAll15'><script>document.write(AvancementEtape15+'/'+AvancementMaxEtape15+' soit en pourcentage : '+AvancementPourcentageEtape15+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape15'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape15' onclick='checkAllEtape(15);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount15[0]; $i++) {
                        if($isCapture15[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape15Mob$i' id='Etape15Mob$i' onclick='ActuEtape15Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape15/".$nomMob15[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob15[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob15[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape15Mob$i' id='Etape15Mob$i' onclick='ActuEtape15Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape15/".$nomMob15[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob15[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob15[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees16[0] == 2) {
                    echo "<button id='Etape16' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 16 <span style='margin-left: 10vw;'></span> <span id='spanAll16'><script>document.write(AvancementEtape16+'/'+AvancementMaxEtape16+' soit en pourcentage : '+AvancementPourcentageEtape16+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape16'></progress></button>";
                }
                else {
                    echo "<button id='Etape16' class='accordion' style='width: 50%;' onclick='return false;'>Etape 16 <span style='margin-left: 10vw;'></span> <span id='spanAll16'><script>document.write(AvancementEtape16+'/'+AvancementMaxEtape16+' soit en pourcentage : '+AvancementPourcentageEtape16+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape16'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape16' onclick='checkAllEtape(16);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount16[0]; $i++) {
                        if($isCapture16[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape16Mob$i' id='Etape16Mob$i' onclick='ActuEtape16Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape16/".$nomMob16[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob16[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob16[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape16Mob$i' id='Etape16Mob$i' onclick='ActuEtape16Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                 echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape16/".$nomMob16[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob16[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob16[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees17[0] == 20) {
                    echo "<button id='Etape17' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 17 <span style='margin-left: 10vw;'></span> <span id='spanAll17'><script>document.write(AvancementEtape17+'/'+AvancementMaxEtape17+' soit en pourcentage : '+AvancementPourcentageEtape17+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape17'></progress></button>";
                }
                else {
                    echo "<button id='Etape17' class='accordion' style='width: 50%;' onclick='return false;'>Etape 17 <span style='margin-left: 10vw;'></span> <span id='spanAll17'><script>document.write(AvancementEtape17+'/'+AvancementMaxEtape17+' soit en pourcentage : '+AvancementPourcentageEtape17+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape17'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape17' onclick='checkAllEtape(17);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount17[0]; $i++) {
                        if($isCapture17[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape17Mob$i' id='Etape17Mob$i' onclick='ActuEtape17Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape17/".$nomMob17[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob17[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob17[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape17Mob$i' id='Etape17Mob$i' onclick='ActuEtape17Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape17/".$nomMob17[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob17[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob17[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees18[0] == 17) {
                    echo "<button id='Etape18' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 18 <span style='margin-left: 10vw;'></span> <span id='spanAll18'><script>document.write(AvancementEtape18+'/'+AvancementMaxEtape18+' soit en pourcentage : '+AvancementPourcentageEtape18+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape18'></progress></button>";
                }
                else {
                    echo "<button id='Etape18' class='accordion' style='width: 50%;' onclick='return false;'>Etape 18 <span style='margin-left: 10vw;'></span> <span id='spanAll18'><script>document.write(AvancementEtape18+'/'+AvancementMaxEtape18+' soit en pourcentage : '+AvancementPourcentageEtape18+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape18'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape18' onclick='checkAllEtape(18);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount18[0]; $i++) {
                        if($isCapture18[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape18Mob$i' id='Etape18Mob$i' onclick='ActuEtape18Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape18/".$nomMob18[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob18[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob18[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape18Mob$i' id='Etape18Mob$i' onclick='ActuEtape18Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape18/".$nomMob18[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob18[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob18[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees19[0] == 11) {
                    echo "<button id='Etape19' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 19 <span style='margin-left: 10vw;'></span> <span id='spanAll19'><script>document.write(AvancementEtape19+'/'+AvancementMaxEtape19+' soit en pourcentage : '+AvancementPourcentageEtape19+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape19'></progress></button>";
                }
                else {
                    echo "<button id='Etape19' class='accordion' style='width: 50%;' onclick='return false;'>Etape 19 <span style='margin-left: 10vw;'></span> <span id='spanAll19'><script>document.write(AvancementEtape19+'/'+AvancementMaxEtape19+' soit en pourcentage : '+AvancementPourcentageEtape19+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape19'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape19' onclick='checkAllEtape(19);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount19[0]; $i++) {
                        if($isCapture19[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape19Mob$i' id='Etape19Mob$i' onclick='ActuEtape19Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape19/".$nomMob19[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob19[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob19[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape19Mob$i' id='Etape19Mob$i' onclick='ActuEtape19Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape19/".$nomMob19[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob19[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob19[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees20[0] == 20) {
                    echo "<button id='Etape20' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 20 <span style='margin-left: 10vw;'></span> <span id='spanAll20'><script>document.write(AvancementEtape20+'/'+AvancementMaxEtape20+' soit en pourcentage : '+AvancementPourcentageEtape20+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape20'></progress></button>";
                }
                else {
                    echo "<button id='Etape20' class='accordion' style='width: 50%;' onclick='return false;'>Etape 20 <span style='margin-left: 10vw;'></span> <span id='spanAll20'><script>document.write(AvancementEtape20+'/'+AvancementMaxEtape20+' soit en pourcentage : '+AvancementPourcentageEtape20+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape20'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape20' onclick='checkAllEtape(20);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount20[0]; $i++) {
                        if($isCapture20[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape20Mob$i' id='Etape20Mob$i' onclick='ActuEtape20Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape20/".$lieuMob20[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob20[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob20[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape20Mob$i' id='Etape20Mob$i' onclick='ActuEtape20Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape20/".$lieuMob20[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob20[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob20[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees21[0] == 20) {
                    echo "<button id='Etape21' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 21 <span style='margin-left: 10vw;'></span> <span id='spanAll21'><script>document.write(AvancementEtape21+'/'+AvancementMaxEtape21+' soit en pourcentage : '+AvancementPourcentageEtape21+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape21'></progress></button>";
                }
                else {
                    echo "<button id='Etape21' class='accordion' style='width: 50%;' onclick='return false;'>Etape 21 <span style='margin-left: 10vw;'></span> <span id='spanAll21'><script>document.write(AvancementEtape21+'/'+AvancementMaxEtape21+' soit en pourcentage : '+AvancementPourcentageEtape21+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape21'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape21' onclick='checkAllEtape(21);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount21[0]; $i++) {
                        if($isCapture21[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape21Mob$i' id='Etape21Mob$i' onclick='ActuEtape21Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape21/".$lieuMob21[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob21[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob21[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape21Mob$i' id='Etape21Mob$i' onclick='ActuEtape21Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape21/".$lieuMob21[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob21[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob21[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees22[0] == 20) {
                    echo "<button id='Etape22' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 22 <span style='margin-left: 10vw;'></span> <span id='spanAll22'><script>document.write(AvancementEtape22+'/'+AvancementMaxEtape22+' soit en pourcentage : '+AvancementPourcentageEtape22+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape22'></progress></button>";
                }
                else {
                    echo "<button id='Etape22' class='accordion' style='width: 50%;' onclick='return false;'>Etape 22 <span style='margin-left: 10vw;'></span> <span id='spanAll22'><script>document.write(AvancementEtape22+'/'+AvancementMaxEtape22+' soit en pourcentage : '+AvancementPourcentageEtape22+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape22'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape22' onclick='checkAllEtape(22);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount22[0]; $i++) {
                        if($isCapture22[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape22Mob$i' id='Etape22Mob$i' onclick='ActuEtape22Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape22/".$lieuMob22[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob22[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob22[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape22Mob$i' id='Etape22Mob$i' onclick='ActuEtape22Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape22/".$lieuMob22[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob22[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob22[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees23[0] == 20) {
                    echo "<button id='Etape23' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 23 <span style='margin-left: 10vw;'></span> <span id='spanAll23'><script>document.write(AvancementEtape23+'/'+AvancementMaxEtape23+' soit en pourcentage : '+AvancementPourcentageEtape23+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape23'></progress></button>";
                }
                else {
                    echo "<button id='Etape23' class='accordion' style='width: 50%;' onclick='return false;'>Etape 23 <span style='margin-left: 10vw;'></span> <span id='spanAll23'><script>document.write(AvancementEtape23+'/'+AvancementMaxEtape23+' soit en pourcentage : '+AvancementPourcentageEtape23+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape23'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape23' onclick='checkAllEtape(23);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount23[0]; $i++) {
                        if($isCapture23[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape23Mob$i' id='Etape23Mob$i' onclick='ActuEtape23Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape23/".$lieuMob23[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob23[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob23[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape23Mob$i' id='Etape23Mob$i' onclick='ActuEtape23Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape23/".$lieuMob23[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob23[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob23[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees24[0] == 20) {
                    echo "<button id='Etape24' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 24 <span style='margin-left: 10vw;'></span> <span id='spanAll24'><script>document.write(AvancementEtape24+'/'+AvancementMaxEtape24+' soit en pourcentage : '+AvancementPourcentageEtape24+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape24'></progress></button>";
                }
                else {
                    echo "<button id='Etape24' class='accordion' style='width: 50%;' onclick='return false;'>Etape 24 <span style='margin-left: 10vw;'></span> <span id='spanAll24'><script>document.write(AvancementEtape24+'/'+AvancementMaxEtape24+' soit en pourcentage : '+AvancementPourcentageEtape24+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape24'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape24' onclick='checkAllEtape(24);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount24[0]; $i++) {
                        if($isCapture24[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape24Mob$i' id='Etape24Mob$i' onclick='ActuEtape24Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape24/".$lieuMob24[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob24[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob24[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape24Mob$i' id='Etape24Mob$i' onclick='ActuEtape24Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape24/".$lieuMob24[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob24[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob24[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees25[0] == 20) {
                    echo "<button id='Etape25' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 25 <span style='margin-left: 10vw;'></span> <span id='spanAll25'><script>document.write(AvancementEtape25+'/'+AvancementMaxEtape25+' soit en pourcentage : '+AvancementPourcentageEtape25+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape25'></progress></button>";
                }
                else {
                    echo "<button id='Etape25' class='accordion' style='width: 50%;' onclick='return false;'>Etape 25 <span style='margin-left: 10vw;'></span> <span id='spanAll25'><script>document.write(AvancementEtape25+'/'+AvancementMaxEtape25+' soit en pourcentage : '+AvancementPourcentageEtape25+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape25'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape25' onclick='checkAllEtape(25);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount25[0]; $i++) {
                        if($isCapture25[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape25Mob$i' id='Etape25Mob$i' onclick='ActuEtape25Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape25/".$lieuMob25[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob25[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob25[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape25Mob$i' id='Etape25Mob$i' onclick='ActuEtape25Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape25/".$lieuMob25[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob25[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob25[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees26[0] == 20) {
                    echo "<button id='Etape26' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 26 <span style='margin-left: 10vw;'></span> <span id='spanAll26'><script>document.write(AvancementEtape26+'/'+AvancementMaxEtape26+' soit en pourcentage : '+AvancementPourcentageEtape26+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape26'></progress></button>";
                }
                else {
                    echo "<button id='Etape26' class='accordion' style='width: 50%;' onclick='return false;'>Etape 26 <span style='margin-left: 10vw;'></span> <span id='spanAll26'><script>document.write(AvancementEtape26+'/'+AvancementMaxEtape26+' soit en pourcentage : '+AvancementPourcentageEtape26+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape26'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape26' onclick='checkAllEtape(26);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount26[0]; $i++) {
                        if($isCapture26[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape26Mob$i' id='Etape26Mob$i' onclick='ActuEtape26Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape26/".$lieuMob26[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob26[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob26[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape26Mob$i' id='Etape26Mob$i' onclick='ActuEtape26Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape26/".$lieuMob26[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob26[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob26[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees27[0] == 20) {
                    echo "<button id='Etape27' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 27 <span style='margin-left: 10vw;'></span> <span id='spanAll27'><script>document.write(AvancementEtape27+'/'+AvancementMaxEtape27+' soit en pourcentage : '+AvancementPourcentageEtape27+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape27'></progress></button>";
                }
                else {
                    echo "<button id='Etape27' class='accordion' style='width: 50%;' onclick='return false;'>Etape 27 <span style='margin-left: 10vw;'></span> <span id='spanAll27'><script>document.write(AvancementEtape27+'/'+AvancementMaxEtape27+' soit en pourcentage : '+AvancementPourcentageEtape27+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape27'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape27' onclick='checkAllEtape(27);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount27[0]; $i++) {
                        if($isCapture27[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape27Mob$i' id='Etape27Mob$i' onclick='ActuEtape27Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape27/".$lieuMob27[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob27[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob27[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape27Mob$i' id='Etape27Mob$i' onclick='ActuEtape27Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape27/".$lieuMob27[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob27[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob27[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees28[0] == 20) {
                    echo "<button id='Etape28' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 28 <span style='margin-left: 10vw;'></span> <span id='spanAll28'><script>document.write(AvancementEtape28+'/'+AvancementMaxEtape28+' soit en pourcentage : '+AvancementPourcentageEtape28+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape28'></progress></button>";
                }
                else {
                    echo "<button id='Etape28' class='accordion' style='width: 50%;' onclick='return false;'>Etape 28 <span style='margin-left: 10vw;'></span> <span id='spanAll28'><script>document.write(AvancementEtape28+'/'+AvancementMaxEtape28+' soit en pourcentage : '+AvancementPourcentageEtape28+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape28'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape28' onclick='checkAllEtape(28);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount28[0]; $i++) {
                        if($isCapture28[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape28Mob$i' id='Etape28Mob$i' onclick='ActuEtape28Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape28/".$lieuMob28[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob28[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob28[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape28Mob$i' id='Etape28Mob$i' onclick='ActuEtape28Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape28/".$lieuMob28[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob28[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob28[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees29[0] == 20) {
                    echo "<button id='Etape29' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 29 <span style='margin-left: 10vw;'></span> <span id='spanAll29'><script>document.write(AvancementEtape29+'/'+AvancementMaxEtape29+' soit en pourcentage : '+AvancementPourcentageEtape29+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape29'></progress></button>";
                }
                else {
                    echo "<button id='Etape29' class='accordion' style='width: 50%;' onclick='return false;'>Etape 29 <span style='margin-left: 10vw;'></span> <span id='spanAll29'><script>document.write(AvancementEtape29+'/'+AvancementMaxEtape29+' soit en pourcentage : '+AvancementPourcentageEtape29+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape29'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape29' onclick='checkAllEtape(29);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount29[0]; $i++) {
                        if($isCapture29[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape29Mob$i' id='Etape29Mob$i' onclick='ActuEtape29Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape29/".$lieuMob29[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob29[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob29[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape29Mob$i' id='Etape29Mob$i' onclick='ActuEtape29Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape29/".$lieuMob29[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob29[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob29[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees30[0] == 20) {
                    echo "<button id='Etape30' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 30 <span style='margin-left: 10vw;'></span> <span id='spanAll30'><script>document.write(AvancementEtape30+'/'+AvancementMaxEtape30+' soit en pourcentage : '+AvancementPourcentageEtape30+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape30'></progress></button>";
                }
                else {
                    echo "<button id='Etape30' class='accordion' style='width: 50%;' onclick='return false;'>Etape 30 <span style='margin-left: 10vw;'></span> <span id='spanAll30'><script>document.write(AvancementEtape30+'/'+AvancementMaxEtape30+' soit en pourcentage : '+AvancementPourcentageEtape30+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape30'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape30' onclick='checkAllEtape(30);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount30[0]; $i++) {
                        if($isCapture30[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape30Mob$i' id='Etape30Mob$i' onclick='ActuEtape30Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape30/".$lieuMob30[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob30[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob30[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape30Mob$i' id='Etape30Mob$i' onclick='ActuEtape30Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape30/".$lieuMob30[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob30[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob30[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees31[0] == 20) {
                    echo "<button id='Etape31' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 31 <span style='margin-left: 10vw;'></span> <span id='spanAll31'><script>document.write(AvancementEtape31+'/'+AvancementMaxEtape31+' soit en pourcentage : '+AvancementPourcentageEtape31+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape31'></progress></button>";
                }
                else {
                    echo "<button id='Etape31' class='accordion' style='width: 50%;' onclick='return false;'>Etape 31 <span style='margin-left: 10vw;'></span> <span id='spanAll31'><script>document.write(AvancementEtape31+'/'+AvancementMaxEtape31+' soit en pourcentage : '+AvancementPourcentageEtape31+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape31'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape31' onclick='checkAllEtape(31);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount31[0]; $i++) {
                        if($isCapture31[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape31Mob$i' id='Etape31Mob$i' onclick='ActuEtape31Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape31/".$lieuMob31[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob31[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob31[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape31Mob$i' id='Etape31Mob$i' onclick='ActuEtape31Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape31/".$lieuMob31[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob31[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob31[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees32[0] == 20) {
                    echo "<button id='Etape32' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 32 <span style='margin-left: 10vw;'></span> <span id='spanAll32'><script>document.write(AvancementEtape32+'/'+AvancementMaxEtape32+' soit en pourcentage : '+AvancementPourcentageEtape32+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape32'></progress></button>";
                }
                else {
                    echo "<button id='Etape32' class='accordion' style='width: 50%;' onclick='return false;'>Etape 32 <span style='margin-left: 10vw;'></span> <span id='spanAll32'><script>document.write(AvancementEtape32+'/'+AvancementMaxEtape32+' soit en pourcentage : '+AvancementPourcentageEtape32+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape32'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape32' onclick='checkAllEtape(32);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount32[0]; $i++) {
                        if($isCapture32[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape32Mob$i' id='Etape32Mob$i' onclick='ActuEtape32Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape32/".$lieuMob32[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob32[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob32[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape32Mob$i' id='Etape32Mob$i' onclick='ActuEtape32Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape32/".$lieuMob32[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob32[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob32[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>
                <?php
                if($nombreDonnees33[0] == 20) {
                    echo "<button id='Etape33' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 33 <span style='margin-left: 10vw;'></span> <span id='spanAll33'><script>document.write(AvancementEtape33+'/'+AvancementMaxEtape33+' soit en pourcentage : '+AvancementPourcentageEtape33+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape33'></progress></button>";
                }
                else {
                    echo "<button id='Etape33' class='accordion' style='width: 50%;' onclick='return false;'>Etape 33 <span style='margin-left: 10vw;'></span> <span id='spanAll33'><script>document.write(AvancementEtape33+'/'+AvancementMaxEtape33+' soit en pourcentage : '+AvancementPourcentageEtape33+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape33'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape33' onclick='checkAllEtape(33);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount33[0]; $i++) {
                        if($isCapture33[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape33Mob$i' id='Etape33Mob$i' onclick='ActuEtape33Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape33/".$lieuMob33[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob33[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob33[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape33Mob$i' id='Etape33Mob$i' onclick='ActuEtape33Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape33/".$lieuMob33[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob33[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob33[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees34[0] == 6) {
                    echo "<button id='Etape34' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 34 <span style='margin-left: 10vw;'></span> <span id='spanAll34'><script>document.write(AvancementEtape34+'/'+AvancementMaxEtape34+' soit en pourcentage : '+AvancementPourcentageEtape34+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape34'></progress></button>";
                }
                else {
                    echo "<button id='Etape34' class='accordion' style='width: 50%;' onclick='return false;'>Etape 34 <span style='margin-left: 10vw;'></span> <span id='spanAll34'><script>document.write(AvancementEtape34+'/'+AvancementMaxEtape34+' soit en pourcentage : '+AvancementPourcentageEtape34+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape34'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape34' onclick='checkAllEtape(34);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount34[0]; $i++) {
                        if($isCapture34[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape34Mob$i' id='Etape34Mob$i' onclick='ActuEtape34Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape34/".$lieuMob34[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob34[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob34[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape34Mob$i' id='Etape34Mob$i' onclick='ActuEtape34Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape34/".$lieuMob34[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob34[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob34[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

                <?php
                if($nombreDonnees35[0] == 1) {
                    echo "<button id='Etape35' class='accordion' style='width: 50%; background-color: #6EB8FF;' onclick='return false;'>Etape 35 <span style='margin-left: 10vw;'></span> <span id='spanAll35'><script>document.write(AvancementEtape35+'/'+AvancementMaxEtape35+' soit en pourcentage : '+AvancementPourcentageEtape35+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape35'></progress></button>";
                }
                else {
                    echo "<button id='Etape35' class='accordion' style='width: 50%;' onclick='return false;'>Etape 35 <span style='margin-left: 10vw;'></span> <span id='spanAll35'><script>document.write(AvancementEtape35+'/'+AvancementMaxEtape35+' soit en pourcentage : '+AvancementPourcentageEtape35+'%')</script></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<progress id='progressEtape35'></progress></button>";
                }
                ?>
                <div class="panel" style="width: 50%;">
                    <?php
                    echo "<span class='labelConnexion'>Valider toute l'étape</span>";
                    echo "<label class='container' style='margin-left: 49%; margin-bottom: 5vh;'><input type='checkbox' id='allEtape35' onclick='checkAllEtape(35);'> <span class='checkmark'></span></label>";
                    for($i = 0; $i < $nombreDonneesCount35[0]; $i++) {
                        if($isCapture35[$i] == 0) {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape35Mob$i' id='Etape35Mob$i' onclick='ActuEtape35Mob($i);'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape35/".$nomMob35[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob35[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob35[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                        else {
                            echo '<div>';
                                echo '<p style="margin: 0 auto;">';
                                    echo "<label class='container' style='margin-top: 2vh;'><input type='checkbox' style='margin-top: 3vh;' name='Etape35Mob$i' id='Etape35Mob$i' onclick='ActuEtape35Mob($i);' checked='checked'> <span class='checkmark''></span></label>";
                                echo '</p>';
                                echo "<img style='max-width: 150px; max-height: 100px;' src='assets/img/Bestiaire/Etape35/".$nomMob35[$i].".svg'>";
                                echo '<p style="margin-right: auto; ">';
                                    echo $nomMob35[$i] . '<br /> <span style="font-style: italic;">'. $lieuMob35[$i].'</span>';
                                echo '</p>';
                            echo '</div> <br />';
                        }
                    }
                    ?>
                </div>

            </center>
        </form>

        <!-- FOOTER -->

        <footer class="footer" style="margin-top: 5vh;">
            <div class="content has-text-centered">
                <p>Liste "Eternelle Moisson" par Traumatologue.</p>
                <p><a href="https://github.com/Zmeypp/EternelleMoissonHelper">Code de l'application web disponible ici</a></p>
                <p>Si un bug est rencontré, merci de m'en informer afin d'avoir une application toujours moins buguée, ce qui n'est pas mon point fort. Incapable avant tout toi-même tu sais.</p>
            </div>
        </footer>
        <script src="assets/js/main.js"></script>
    </body>
</html>