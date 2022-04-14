// INITIALISATION DE TOUTES LES VARIABLES D'ETAPES

for(var i = 1; i < 36; i++) {
    if(i < 5 || i > 5 && i < 14 || i == 15 || i == 17 || i > 19 && i < 34) {
        window["AvancementMaxEtape"+i] = 20;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }
    if(i == 5) {
        window["AvancementMaxEtape"+i] = 19;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }

    if(i == 14) {
        window["AvancementMaxEtape"+i] = 18;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }

    if(i == 16) {
        window["AvancementMaxEtape"+i] = 2;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }

    if(i == 18) {
        window["AvancementMaxEtape"+i] = 17;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }

    if(i == 19) {
        window["AvancementMaxEtape"+i] = 11;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }

    if(i == 34) {
        window["AvancementMaxEtape"+i] = 6;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }

    if(i == 35) {
        window["AvancementMaxEtape"+i] = 1;
        window["AvancementEtape"+i] = 0;
        window["AvancementPourcentageEtape"+i] = 0;
    }
}

// INITIALISATION DES VARIABLES "GLOBAL"

var AvancementMaxGlobal = 0;
var AvancementGlobal = 0;
var AvancementPourcentageGlobal = 0;


// INITIALISATION DE L'AVANCEMENT MAX GLOBAL SELON CE QUI EST DEJA COCHE AU CHARGEMENT DE LA PAGE

for(var i = 1; i < 36; i++) {
    AvancementMaxGlobal += window["AvancementMaxEtape"+i];
}

// MISE EN PLACE DU CSS POUR LES TEXTES

for(var i = 1; i < 36; i++) {
    document.getElementById("spanAll"+i).style.fontSize = "15px";
    document.getElementById("spanAll"+i).style.fontWeight = "bold";
}
for(var i = 1; i < 36; i++) {
    document.getElementById("Etape"+i).style.fontSize = "15px";
    document.getElementById("Etape"+i).style.fontWeight = "bold";
}

// INITIALISATION DES VARIABLES UTILES AUX MENUS ACCORDEONS

var acc = document.getElementsByClassName("accordion");
var i;



// INITIALISATION DES CHECKBOX ET DES TEXTES SELON CE QUI EST DEJA COCHE AU CHARGEMENT DE LA PAGE


///////////////////// ETAPE 1

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape1Mob"+i).checked == true) {
        AvancementEtape1 += 1;
        AvancementPourcentageEtape1 = Math.round(100 + ((AvancementEtape1-AvancementMaxEtape1)/AvancementMaxEtape1)*100);
        document.getElementById("spanAll1").innerHTML = AvancementEtape1+"/"+AvancementMaxEtape1+' soit en pourcentage : '+AvancementPourcentageEtape1+'%';
        document.getElementById("progressEtape1").setAttribute("value", AvancementPourcentageEtape1);
        if(AvancementPourcentageEtape1 != 100) {
            document.getElementById("allEtape1").checked = false;
        }
        else {
            document.getElementById("allEtape1").checked = true;
        }
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 1



//////////////// ETAPE 2

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape2Mob"+i).checked == true) {
        AvancementEtape2 += 1;
        AvancementPourcentageEtape2 = Math.round(100 + ((AvancementEtape2-AvancementMaxEtape2)/AvancementMaxEtape2)*100);
        document.getElementById("spanAll2").innerHTML = AvancementEtape2+"/"+AvancementMaxEtape2+' soit en pourcentage : '+AvancementPourcentageEtape2+'%';
        document.getElementById("progressEtape2").setAttribute("value", AvancementPourcentageEtape2);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 2


//////////////// ETAPE 3

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape3Mob"+i).checked == true) {
        AvancementEtape3 += 1;
        AvancementPourcentageEtape3 = Math.round(100 + ((AvancementEtape3-AvancementMaxEtape3)/AvancementMaxEtape3)*100);
        document.getElementById("spanAll3").innerHTML = AvancementEtape3+"/"+AvancementMaxEtape3+' soit en pourcentage : '+AvancementPourcentageEtape3+'%';
        document.getElementById("progressEtape3").setAttribute("value", AvancementPourcentageEtape3);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 3


///////////////////// ETAPE 4

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape4Mob"+i).checked == true) {
        AvancementEtape4 += 1;
        AvancementPourcentageEtape4 = Math.round(100 + ((AvancementEtape4-AvancementMaxEtape4)/AvancementMaxEtape4)*100);
        document.getElementById("spanAll4").innerHTML = AvancementEtape4+"/"+AvancementMaxEtape4+' soit en pourcentage : '+AvancementPourcentageEtape4+'%';
        document.getElementById("progressEtape4").setAttribute("value", AvancementPourcentageEtape4);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 4


///////////////////// ETAPE 5

for(var i = 0; i < 19; i++) {
    if(document.getElementById("Etape5Mob"+i).checked == true) {
        AvancementEtape5 += 1;
        AvancementPourcentageEtape5 = Math.round(100 + ((AvancementEtape5-AvancementMaxEtape5)/AvancementMaxEtape5)*100);
        document.getElementById("spanAll5").innerHTML = AvancementEtape5+"/"+AvancementMaxEtape5+' soit en pourcentage : '+AvancementPourcentageEtape5+'%';
        document.getElementById("progressEtape5").setAttribute("value", AvancementPourcentageEtape5);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 5


///////////////////// ETAPE 6

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape6Mob"+i).checked == true) {
        AvancementEtape6 += 1;
        AvancementPourcentageEtape6 = Math.round(100 + ((AvancementEtape6-AvancementMaxEtape6)/AvancementMaxEtape6)*100);
        document.getElementById("spanAll6").innerHTML = AvancementEtape6+"/"+AvancementMaxEtape6+' soit en pourcentage : '+AvancementPourcentageEtape6+'%';
        document.getElementById("progressEtape6").setAttribute("value", AvancementPourcentageEtape6);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 6


///////////////////// ETAPE 7

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape7Mob"+i).checked == true) {
        AvancementEtape7 += 1;
        AvancementPourcentageEtape7 = Math.round(100 + ((AvancementEtape7-AvancementMaxEtape7)/AvancementMaxEtape7)*100);
        document.getElementById("spanAll7").innerHTML = AvancementEtape7+"/"+AvancementMaxEtape7+' soit en pourcentage : '+AvancementPourcentageEtape7+'%';
        document.getElementById("progressEtape7").setAttribute("value", AvancementPourcentageEtape7);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 7

///////////////////// ETAPE 8

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape8Mob"+i).checked == true) {
        AvancementEtape8 += 1;
        AvancementPourcentageEtape8 = Math.round(100 + ((AvancementEtape8-AvancementMaxEtape8)/AvancementMaxEtape8)*100);
        document.getElementById("spanAll8").innerHTML = AvancementEtape8+"/"+AvancementMaxEtape8+' soit en pourcentage : '+AvancementPourcentageEtape8+'%';
        document.getElementById("progressEtape8").setAttribute("value", AvancementPourcentageEtape8);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 8


///////////////////// ETAPE 9

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape9Mob"+i).checked == true) {
        AvancementEtape9 += 1;
        AvancementPourcentageEtape9 = Math.round(100 + ((AvancementEtape9-AvancementMaxEtape9)/AvancementMaxEtape9)*100);
        document.getElementById("spanAll9").innerHTML = AvancementEtape9+"/"+AvancementMaxEtape9+' soit en pourcentage : '+AvancementPourcentageEtape9+'%';
        document.getElementById("progressEtape9").setAttribute("value", AvancementPourcentageEtape9);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 9


///////////////////// ETAPE 10

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape10Mob"+i).checked == true) {
        AvancementEtape10 += 1;
        AvancementPourcentageEtape10 = Math.round(100 + ((AvancementEtape10-AvancementMaxEtape10)/AvancementMaxEtape10)*100);
        document.getElementById("spanAll10").innerHTML = AvancementEtape10+"/"+AvancementMaxEtape10+' soit en pourcentage : '+AvancementPourcentageEtape10+'%';
        document.getElementById("progressEtape10").setAttribute("value", AvancementPourcentageEtape10);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 10


///////////////////// ETAPE 11

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape11Mob"+i).checked == true) {
        AvancementEtape11 += 1;
        AvancementPourcentageEtape11 = Math.round(100 + ((AvancementEtape11-AvancementMaxEtape11)/AvancementMaxEtape11)*100);
        document.getElementById("spanAll11").innerHTML = AvancementEtape11+"/"+AvancementMaxEtape11+' soit en pourcentage : '+AvancementPourcentageEtape11+'%';
        document.getElementById("progressEtape11").setAttribute("value", AvancementPourcentageEtape11);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 11


///////////////////// ETAPE 12

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape12Mob"+i).checked == true) {
        AvancementEtape12 += 1;
        AvancementPourcentageEtape12 = Math.round(100 + ((AvancementEtape12-AvancementMaxEtape12)/AvancementMaxEtape12)*100);
        document.getElementById("spanAll12").innerHTML = AvancementEtape12+"/"+AvancementMaxEtape12+' soit en pourcentage : '+AvancementPourcentageEtape12+'%';
        document.getElementById("progressEtape12").setAttribute("value", AvancementPourcentageEtape12);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 12


///////////////////// ETAPE 13

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape13Mob"+i).checked == true) {
        AvancementEtape13 += 1;
        AvancementPourcentageEtape13 = Math.round(100 + ((AvancementEtape13-AvancementMaxEtape13)/AvancementMaxEtape13)*100);
        document.getElementById("spanAll13").innerHTML = AvancementEtape13+"/"+AvancementMaxEtape13+' soit en pourcentage : '+AvancementPourcentageEtape13+'%';
        document.getElementById("progressEtape13").setAttribute("value", AvancementPourcentageEtape13);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 13


///////////////////// ETAPE 14

for(var i = 0; i < 18; i++) {
    if(document.getElementById("Etape14Mob"+i).checked == true) {
        AvancementEtape14 += 1;
        AvancementPourcentageEtape14 = Math.round(100 + ((AvancementEtape14-AvancementMaxEtape14)/AvancementMaxEtape14)*100);
        document.getElementById("spanAll14").innerHTML = AvancementEtape14+"/"+AvancementMaxEtape14+' soit en pourcentage : '+AvancementPourcentageEtape14+'%';
        document.getElementById("progressEtape14").setAttribute("value", AvancementPourcentageEtape14);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 14


///////////////////// ETAPE 15

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape15Mob"+i).checked == true) {
        AvancementEtape15 += 1;
        AvancementPourcentageEtape15 = Math.round(100 + ((AvancementEtape15-AvancementMaxEtape15)/AvancementMaxEtape15)*100);
        document.getElementById("spanAll15").innerHTML = AvancementEtape15+"/"+AvancementMaxEtape15+' soit en pourcentage : '+AvancementPourcentageEtape15+'%';
        document.getElementById("progressEtape15").setAttribute("value", AvancementPourcentageEtape15);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 15


///////////////////// ETAPE 16

for(var i = 0; i < 2; i++) {
    if(document.getElementById("Etape16Mob"+i).checked == true) {
        AvancementEtape16 += 1;
        AvancementPourcentageEtape16 = Math.round(100 + ((AvancementEtape16-AvancementMaxEtape16)/AvancementMaxEtape16)*100);
        document.getElementById("spanAll16").innerHTML = AvancementEtape16+"/"+AvancementMaxEtape16+' soit en pourcentage : '+AvancementPourcentageEtape16+'%';
        document.getElementById("progressEtape16").setAttribute("value", AvancementPourcentageEtape16);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 16


///////////////////// ETAPE 17

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape17Mob"+i).checked == true) {
        AvancementEtape17 += 1;
        AvancementPourcentageEtape17 = Math.round(100 + ((AvancementEtape17-AvancementMaxEtape17)/AvancementMaxEtape17)*100);
        document.getElementById("spanAll17").innerHTML = AvancementEtape17+"/"+AvancementMaxEtape17+' soit en pourcentage : '+AvancementPourcentageEtape17+'%';
        document.getElementById("progressEtape17").setAttribute("value", AvancementPourcentageEtape17);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 17


///////////////////// ETAPE 18

for(var i = 0; i < 17; i++) {
    if(document.getElementById("Etape18Mob"+i).checked == true) {
        AvancementEtape18 += 1;
        AvancementPourcentageEtape18 = Math.round(100 + ((AvancementEtape18-AvancementMaxEtape18)/AvancementMaxEtape18)*100);
        document.getElementById("spanAll18").innerHTML = AvancementEtape18+"/"+AvancementMaxEtape18+' soit en pourcentage : '+AvancementPourcentageEtape18+'%';
        document.getElementById("progressEtape18").setAttribute("value", AvancementPourcentageEtape18);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 18


///////////////////// ETAPE 19

for(var i = 0; i < 11; i++) {
    if(document.getElementById("Etape19Mob"+i).checked == true) {
        AvancementEtape19 += 1;
        AvancementPourcentageEtape19 = Math.round(100 + ((AvancementEtape19-AvancementMaxEtape19)/AvancementMaxEtape19)*100);
        document.getElementById("spanAll19").innerHTML = AvancementEtape19+"/"+AvancementMaxEtape19+' soit en pourcentage : '+AvancementPourcentageEtape19+'%';
        document.getElementById("progressEtape19").setAttribute("value", AvancementPourcentageEtape19);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 19


//////////////// ETAPE 20

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape20Mob"+i).checked == true) {
        AvancementEtape20 += 1;
        AvancementPourcentageEtape20 = Math.round(100 + ((AvancementEtape20-AvancementMaxEtape20)/AvancementMaxEtape20)*100);
        document.getElementById("spanAll20").innerHTML = AvancementEtape20+"/"+AvancementMaxEtape20+' soit en pourcentage : '+AvancementPourcentageEtape20+'%';
        document.getElementById("progressEtape20").setAttribute("value", AvancementPourcentageEtape20);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 20


//////////////// ETAPE 21

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape21Mob"+i).checked == true) {
        AvancementEtape21 += 1;
        AvancementPourcentageEtape21 = Math.round(100 + ((AvancementEtape21-AvancementMaxEtape21)/AvancementMaxEtape21)*100);
        document.getElementById("spanAll21").innerHTML = AvancementEtape21+"/"+AvancementMaxEtape21+' soit en pourcentage : '+AvancementPourcentageEtape21+'%';
        document.getElementById("progressEtape21").setAttribute("value", AvancementPourcentageEtape21);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 21


//////////////// ETAPE 22

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape22Mob"+i).checked == true) {
        AvancementEtape22 += 1;
        AvancementPourcentageEtape22 = Math.round(100 + ((AvancementEtape22-AvancementMaxEtape22)/AvancementMaxEtape22)*100);
        document.getElementById("spanAll22").innerHTML = AvancementEtape22+"/"+AvancementMaxEtape22+' soit en pourcentage : '+AvancementPourcentageEtape22+'%';
        document.getElementById("progressEtape22").setAttribute("value", AvancementPourcentageEtape22);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 22


//////////////// ETAPE 23

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape23Mob"+i).checked == true) {
        AvancementEtape23 += 1;
        AvancementPourcentageEtape23 = Math.round(100 + ((AvancementEtape23-AvancementMaxEtape23)/AvancementMaxEtape23)*100);
        document.getElementById("spanAll23").innerHTML = AvancementEtape23+"/"+AvancementMaxEtape23+' soit en pourcentage : '+AvancementPourcentageEtape23+'%';
        document.getElementById("progressEtape23").setAttribute("value", AvancementPourcentageEtape23);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 23


//////////////// ETAPE 24

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape24Mob"+i).checked == true) {
        AvancementEtape24 += 1;
        AvancementPourcentageEtape24 = Math.round(100 + ((AvancementEtape24-AvancementMaxEtape24)/AvancementMaxEtape24)*100);
        document.getElementById("spanAll24").innerHTML = AvancementEtape24+"/"+AvancementMaxEtape24+' soit en pourcentage : '+AvancementPourcentageEtape24+'%';
        document.getElementById("progressEtape24").setAttribute("value", AvancementPourcentageEtape24);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 24


//////////////// ETAPE 25

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape25Mob"+i).checked == true) {
        AvancementEtape25 += 1;
        AvancementPourcentageEtape25 = Math.round(100 + ((AvancementEtape25-AvancementMaxEtape25)/AvancementMaxEtape25)*100);
        document.getElementById("spanAll25").innerHTML = AvancementEtape25+"/"+AvancementMaxEtape25+' soit en pourcentage : '+AvancementPourcentageEtape25+'%';
        document.getElementById("progressEtape25").setAttribute("value", AvancementPourcentageEtape25);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 25


//////////////// ETAPE 26

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape26Mob"+i).checked == true) {
        AvancementEtape26 += 1;
        AvancementPourcentageEtape26 = Math.round(100 + ((AvancementEtape26-AvancementMaxEtape26)/AvancementMaxEtape26)*100);
        document.getElementById("spanAll26").innerHTML = AvancementEtape26+"/"+AvancementMaxEtape26+' soit en pourcentage : '+AvancementPourcentageEtape26+'%';
        document.getElementById("progressEtape26").setAttribute("value", AvancementPourcentageEtape26);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 26


//////////////// ETAPE 27

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape27Mob"+i).checked == true) {
        AvancementEtape27 += 1;
        AvancementPourcentageEtape27 = Math.round(100 + ((AvancementEtape27-AvancementMaxEtape27)/AvancementMaxEtape27)*100);
        document.getElementById("spanAll27").innerHTML = AvancementEtape27+"/"+AvancementMaxEtape27+' soit en pourcentage : '+AvancementPourcentageEtape27+'%';
        document.getElementById("progressEtape27").setAttribute("value", AvancementPourcentageEtape27);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 27


//////////////// ETAPE 28

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape28Mob"+i).checked == true) {
        AvancementEtape28 += 1;
        AvancementPourcentageEtape28 = Math.round(100 + ((AvancementEtape28-AvancementMaxEtape28)/AvancementMaxEtape28)*100);
        document.getElementById("spanAll28").innerHTML = AvancementEtape28+"/"+AvancementMaxEtape28+' soit en pourcentage : '+AvancementPourcentageEtape28+'%';
        document.getElementById("progressEtape28").setAttribute("value", AvancementPourcentageEtape28);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 28


//////////////// ETAPE 29

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape29Mob"+i).checked == true) {
        AvancementEtape29 += 1;
        AvancementPourcentageEtape29 = Math.round(100 + ((AvancementEtape29-AvancementMaxEtape29)/AvancementMaxEtape29)*100);
        document.getElementById("spanAll29").innerHTML = AvancementEtape29+"/"+AvancementMaxEtape29+' soit en pourcentage : '+AvancementPourcentageEtape29+'%';
        document.getElementById("progressEtape29").setAttribute("value", AvancementPourcentageEtape29);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 29


//////////////// ETAPE 30

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape30Mob"+i).checked == true) {
        AvancementEtape30 += 1;
        AvancementPourcentageEtape30 = Math.round(100 + ((AvancementEtape30-AvancementMaxEtape30)/AvancementMaxEtape30)*100);
        document.getElementById("spanAll30").innerHTML = AvancementEtape30+"/"+AvancementMaxEtape30+' soit en pourcentage : '+AvancementPourcentageEtape30+'%';
        document.getElementById("progressEtape30").setAttribute("value", AvancementPourcentageEtape30);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 30


//////////////// ETAPE 31

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape31Mob"+i).checked == true) {
        AvancementEtape31 += 1;
        AvancementPourcentageEtape31 = Math.round(100 + ((AvancementEtape31-AvancementMaxEtape31)/AvancementMaxEtape31)*100);
        document.getElementById("spanAll31").innerHTML = AvancementEtape31+"/"+AvancementMaxEtape31+' soit en pourcentage : '+AvancementPourcentageEtape31+'%';
        document.getElementById("progressEtape31").setAttribute("value", AvancementPourcentageEtape31);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 31


//////////////// ETAPE 32

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape32Mob"+i).checked == true) {
        AvancementEtape32 += 1;
        AvancementPourcentageEtape32 = Math.round(100 + ((AvancementEtape32-AvancementMaxEtape32)/AvancementMaxEtape32)*100);
        document.getElementById("spanAll32").innerHTML = AvancementEtape32+"/"+AvancementMaxEtape32+' soit en pourcentage : '+AvancementPourcentageEtape32+'%';
        document.getElementById("progressEtape32").setAttribute("value", AvancementPourcentageEtape32);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 32


//////////////// ETAPE 33

for(var i = 0; i < 20; i++) {
    if(document.getElementById("Etape33Mob"+i).checked == true) {
        AvancementEtape33 += 1;
        AvancementPourcentageEtape33 = Math.round(100 + ((AvancementEtape33-AvancementMaxEtape33)/AvancementMaxEtape33)*100);
        document.getElementById("spanAll33").innerHTML = AvancementEtape33+"/"+AvancementMaxEtape33+' soit en pourcentage : '+AvancementPourcentageEtape33+'%';
        document.getElementById("progressEtape33").setAttribute("value", AvancementPourcentageEtape33);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 33


//////////////// ETAPE 34

for(var i = 0; i < 6; i++) {
    if(document.getElementById("Etape34Mob"+i).checked == true) {
        AvancementEtape34 += 1;
        AvancementPourcentageEtape34 = Math.round(100 + ((AvancementEtape34-AvancementMaxEtape34)/AvancementMaxEtape34)*100);
        document.getElementById("spanAll34").innerHTML = AvancementEtape34+"/"+AvancementMaxEtape34+' soit en pourcentage : '+AvancementPourcentageEtape34+'%';
        document.getElementById("progressEtape34").setAttribute("value", AvancementPourcentageEtape34);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 34


//////////////// ETAPE 35

for(var i = 0; i < 1; i++) {
    if(document.getElementById("Etape35Mob"+i).checked == true) {
        AvancementEtape35 += 1;
        AvancementPourcentageEtape35 = Math.round(100 + ((AvancementEtape35-AvancementMaxEtape35)/AvancementMaxEtape35)*100);
        document.getElementById("spanAll35").innerHTML = AvancementEtape35+"/"+AvancementMaxEtape35+' soit en pourcentage : '+AvancementPourcentageEtape35+'%';
        document.getElementById("progressEtape35").setAttribute("value", AvancementPourcentageEtape35);
        AvancementGlobal += 1;
        AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
        document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal'></progress>";
        document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
    }
}

//////////////// FIN ETAPE 35

// INITIALISATION DES CHECKBOX DE VALIDATION DE TOUTE UNE ETAPE --> SI L'AVANCEMENT D'UN ETAPE = 100% ALORS LA CHECKBOX SERA COCHEE, SINON NON

for(var i = 1; i < 36; i++) {
    if(window["AvancementPourcentageEtape"+i] != 100) {
        document.getElementById("allEtape"+i).checked = false;
    }
    else {
        document.getElementById("allEtape"+i).checked = true;
    }
}


// ACTUALISATION DES TEXTES ET DES BARRES DE PROGRESSION AU CLIC DES BOUTONS DE CHECK "TOUTES LES ETAPES"

for(var j = 1; j < 36; j++) {
    function checkAllEtape(j) {
        if (j == 5) {
            for (var i = 0; i < 19; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
        if (j == 14) {
            for (var i = 0; i < 18; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
        if (j == 16) {
            for (var i = 0; i < 2; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
        if (j == 18) {
            for (var i = 0; i < 17; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
        if (j == 19) {
            for (var i = 0; i < 11; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
        if (j == 34) {
            for (var i = 0; i < 6; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
        if (j == 35) {
            for (var i = 0; i < 1; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
        if (j < 5 || j > 5 && j < 14 || j == 15 || j == 17 || j > 19 && j < 34) {
            for (var i = 0; i < 20; i++) {
                if (document.getElementById("allEtape" + j).checked == false) {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == true) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                } else {
                    if (document.getElementById("Etape" + j + "Mob" + i).checked == false) {
                        document.getElementById("Etape" + j + "Mob" + i).click();
                    }
                }
            }
        }
    }
}

// INITIALISATION DU MAX DE TOUTES LES BARRES DE PROGRESSION --> 100%

for(var i = 1; i < 36; i++) {
    document.getElementById("progressEtape"+i).setAttribute("max", 100);
}
document.getElementById("progressGlobal").setAttribute("max", 100);



// INITIALISATION DES MENUS ACCORDEONS


for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}





// ACTUALISATION DES BARRES DE PROGRESSION ET DES TEXTES SELON LES CHECKBOX DE CHAQUE ETAPES



for(var i = 0; i < 20; i++) {
    function ActuEtape1Mob(i) {
        if(document.getElementById("Etape1Mob"+i).checked == true) {
            AvancementEtape1 += 1;
            AvancementPourcentageEtape1 = Math.round(100 + ((AvancementEtape1-AvancementMaxEtape1)/AvancementMaxEtape1)*100);
            document.getElementById("spanAll1").innerHTML = AvancementEtape1+"/"+AvancementMaxEtape1+' soit en pourcentage : '+AvancementPourcentageEtape1+'%';
            document.getElementById("progressEtape1").setAttribute("value", AvancementPourcentageEtape1);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape1 == 100) {
                document.getElementById("Etape1").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape1").checked = true;
            }
            else {
                document.getElementById("Etape1").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape1 -= 1;
            AvancementPourcentageEtape1 = Math.round(100 + ((AvancementEtape1-AvancementMaxEtape1)/AvancementMaxEtape1)*100);
            document.getElementById("spanAll1").innerHTML = AvancementEtape1+"/"+AvancementMaxEtape1+' soit en pourcentage : '+AvancementPourcentageEtape1+'%';
            document.getElementById("progressEtape1").setAttribute("value", AvancementPourcentageEtape1);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape1 == 100) {
                document.getElementById("Etape1").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape1").style.backgroundColor = "#eee";
                document.getElementById("allEtape1").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape2Mob(i) {
        if(document.getElementById("Etape2Mob"+i).checked == true) {
            AvancementEtape2 += 1;
            AvancementPourcentageEtape2 = Math.round(100 + ((AvancementEtape2-AvancementMaxEtape2)/AvancementMaxEtape2)*100);
            document.getElementById("spanAll2").innerHTML = AvancementEtape2+"/"+AvancementMaxEtape2+' soit en pourcentage : '+AvancementPourcentageEtape2+'%';
            document.getElementById("progressEtape2").setAttribute("value", AvancementPourcentageEtape2);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape2 == 100) {
                document.getElementById("Etape2").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape2").checked = true;
            }
            else {
                document.getElementById("Etape2").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape2 -= 1;
            AvancementPourcentageEtape2 = Math.round(100 + ((AvancementEtape2-AvancementMaxEtape2)/AvancementMaxEtape2)*100);
            document.getElementById("spanAll2").innerHTML = AvancementEtape2+"/"+AvancementMaxEtape2+' soit en pourcentage : '+AvancementPourcentageEtape2+'%';
            document.getElementById("progressEtape2").setAttribute("value", AvancementPourcentageEtape2);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape2 == 100) {
                document.getElementById("Etape2").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape2").style.backgroundColor = "#eee";
                document.getElementById("allEtape2").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape3Mob(i) {
        if(document.getElementById("Etape3Mob"+i).checked == true) {
            AvancementEtape3 += 1;
            AvancementPourcentageEtape3 = Math.round(100 + ((AvancementEtape3-AvancementMaxEtape3)/AvancementMaxEtape3)*100);
            document.getElementById("spanAll3").innerHTML = AvancementEtape3+"/"+AvancementMaxEtape3+' soit en pourcentage : '+AvancementPourcentageEtape3+'%';
            document.getElementById("progressEtape3").setAttribute("value", AvancementPourcentageEtape3);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape3 == 100) {
                document.getElementById("Etape3").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape3").checked = true;
            }
            else {
                document.getElementById("Etape3").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape3 -= 1;
            AvancementPourcentageEtape3 = Math.round(100 + ((AvancementEtape3-AvancementMaxEtape3)/AvancementMaxEtape3)*100);
            document.getElementById("spanAll3").innerHTML = AvancementEtape3+"/"+AvancementMaxEtape3+' soit en pourcentage : '+AvancementPourcentageEtape3+'%';
            document.getElementById("progressEtape3").setAttribute("value", AvancementPourcentageEtape3);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape3 == 100) {
                document.getElementById("Etape3").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape3").style.backgroundColor = "#eee";
                document.getElementById("allEtape3").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape4Mob(i) {
        if(document.getElementById("Etape4Mob"+i).checked == true) {
            AvancementEtape4 += 1;
            AvancementPourcentageEtape4 = Math.round(100 + ((AvancementEtape4-AvancementMaxEtape4)/AvancementMaxEtape4)*100);
            document.getElementById("spanAll4").innerHTML = AvancementEtape4+"/"+AvancementMaxEtape4+' soit en pourcentage : '+AvancementPourcentageEtape4+'%';
            document.getElementById("progressEtape4").setAttribute("value", AvancementPourcentageEtape4);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape4 == 100) {
                document.getElementById("Etape4").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape4").checked = true;
            }
            else {
                document.getElementById("Etape4").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape4 -= 1;
            AvancementPourcentageEtape4 = Math.round(100 + ((AvancementEtape4-AvancementMaxEtape4)/AvancementMaxEtape4)*100);
            document.getElementById("spanAll4").innerHTML = AvancementEtape4+"/"+AvancementMaxEtape4+' soit en pourcentage : '+AvancementPourcentageEtape4+'%';
            document.getElementById("progressEtape4").setAttribute("value", AvancementPourcentageEtape4);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape4 == 100) {
                document.getElementById("Etape4").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape4").style.backgroundColor = "#eee";
                document.getElementById("allEtape4").checked = false;
            }
        }
    }
}

for(var i = 0; i < 19; i++) {
    function ActuEtape5Mob(i) {
        if(document.getElementById("Etape5Mob"+i).checked == true) {
            AvancementEtape5 += 1;
            AvancementPourcentageEtape5 = Math.round(100 + ((AvancementEtape5-AvancementMaxEtape5)/AvancementMaxEtape5)*100);
            document.getElementById("spanAll5").innerHTML = AvancementEtape5+"/"+AvancementMaxEtape5+' soit en pourcentage : '+AvancementPourcentageEtape5+'%';
            document.getElementById("progressEtape5").setAttribute("value", AvancementPourcentageEtape5);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape5 == 100) {
                document.getElementById("Etape5").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape5").checked = true;
            }
            else {
                document.getElementById("Etape5").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape5 -= 1;
            AvancementPourcentageEtape5 = Math.round(100 + ((AvancementEtape5-AvancementMaxEtape5)/AvancementMaxEtape5)*100);
            document.getElementById("spanAll5").innerHTML = AvancementEtape5+"/"+AvancementMaxEtape5+' soit en pourcentage : '+AvancementPourcentageEtape5+'%';
            document.getElementById("progressEtape5").setAttribute("value", AvancementPourcentageEtape5);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape5 == 100) {
                document.getElementById("Etape5").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape5").style.backgroundColor = "#eee";
                document.getElementById("allEtape5").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape6Mob(i) {
        if(document.getElementById("Etape6Mob"+i).checked == true) {
            AvancementEtape6 += 1;
            AvancementPourcentageEtape6 = Math.round(100 + ((AvancementEtape6-AvancementMaxEtape6)/AvancementMaxEtape6)*100);
            document.getElementById("spanAll6").innerHTML = AvancementEtape6+"/"+AvancementMaxEtape6+' soit en pourcentage : '+AvancementPourcentageEtape6+'%';
            document.getElementById("progressEtape6").setAttribute("value", AvancementPourcentageEtape6);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape6 == 100) {
                document.getElementById("Etape6").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape6").checked = true;
            }
            else {
                document.getElementById("Etape6").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape6 -= 1;
            AvancementPourcentageEtape6 = Math.round(100 + ((AvancementEtape6-AvancementMaxEtape6)/AvancementMaxEtape6)*100);
            document.getElementById("spanAll6").innerHTML = AvancementEtape6+"/"+AvancementMaxEtape6+' soit en pourcentage : '+AvancementPourcentageEtape6+'%';
            document.getElementById("progressEtape6").setAttribute("value", AvancementPourcentageEtape6);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape6 == 100) {
                document.getElementById("Etape6").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape6").style.backgroundColor = "#eee";
                document.getElementById("allEtape6").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape7Mob(i) {
        if(document.getElementById("Etape7Mob"+i).checked == true) {
            AvancementEtape7 += 1;
            AvancementPourcentageEtape7 = Math.round(100 + ((AvancementEtape7-AvancementMaxEtape7)/AvancementMaxEtape7)*100);
            document.getElementById("spanAll7").innerHTML = AvancementEtape7+"/"+AvancementMaxEtape7+' soit en pourcentage : '+AvancementPourcentageEtape7+'%';
            document.getElementById("progressEtape7").setAttribute("value", AvancementPourcentageEtape7);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape7 == 100) {
                document.getElementById("Etape7").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape7").checked = true;
            }
            else {
                document.getElementById("Etape7").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape7 -= 1;
            AvancementPourcentageEtape7 = Math.round(100 + ((AvancementEtape7-AvancementMaxEtape7)/AvancementMaxEtape7)*100);
            document.getElementById("spanAll7").innerHTML = AvancementEtape7+"/"+AvancementMaxEtape7+' soit en pourcentage : '+AvancementPourcentageEtape7+'%';
            document.getElementById("progressEtape7").setAttribute("value", AvancementPourcentageEtape7);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape7 == 100) {
                document.getElementById("Etape7").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape7").style.backgroundColor = "#eee";
                document.getElementById("allEtape7").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape8Mob(i) {
        if(document.getElementById("Etape8Mob"+i).checked == true) {
            AvancementEtape8 += 1;
            AvancementPourcentageEtape8 = Math.round(100 + ((AvancementEtape8-AvancementMaxEtape8)/AvancementMaxEtape8)*100);
            document.getElementById("spanAll8").innerHTML = AvancementEtape8+"/"+AvancementMaxEtape8+' soit en pourcentage : '+AvancementPourcentageEtape8+'%';
            document.getElementById("progressEtape8").setAttribute("value", AvancementPourcentageEtape8);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape8 == 100) {
                document.getElementById("Etape8").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape8").checked = true;
            }
            else {
                document.getElementById("Etape8").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape8 -= 1;
            AvancementPourcentageEtape8 = Math.round(100 + ((AvancementEtape8-AvancementMaxEtape8)/AvancementMaxEtape8)*100);
            document.getElementById("spanAll8").innerHTML = AvancementEtape8+"/"+AvancementMaxEtape8+' soit en pourcentage : '+AvancementPourcentageEtape8+'%';
            document.getElementById("progressEtape8").setAttribute("value", AvancementPourcentageEtape8);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape8 == 100) {
                document.getElementById("Etape8").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape8").style.backgroundColor = "#eee";
                document.getElementById("allEtape8").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape9Mob(i) {
        if(document.getElementById("Etape9Mob"+i).checked == true) {
            AvancementEtape9 += 1;
            AvancementPourcentageEtape9 = Math.round(100 + ((AvancementEtape9-AvancementMaxEtape9)/AvancementMaxEtape9)*100);
            document.getElementById("spanAll9").innerHTML = AvancementEtape9+"/"+AvancementMaxEtape9+' soit en pourcentage : '+AvancementPourcentageEtape9+'%';
            document.getElementById("progressEtape9").setAttribute("value", AvancementPourcentageEtape9);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape9 == 100) {
                document.getElementById("Etape9").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape9").checked = true;
            }
            else {
                document.getElementById("Etape9").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape9 -= 1;
            AvancementPourcentageEtape9 = Math.round(100 + ((AvancementEtape9-AvancementMaxEtape9)/AvancementMaxEtape9)*100);
            document.getElementById("spanAll9").innerHTML = AvancementEtape9+"/"+AvancementMaxEtape9+' soit en pourcentage : '+AvancementPourcentageEtape9+'%';
            document.getElementById("progressEtape9").setAttribute("value", AvancementPourcentageEtape9);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape9 == 100) {
                document.getElementById("Etape9").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape9").style.backgroundColor = "#eee";
                document.getElementById("allEtape9").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape10Mob(i) {
        if(document.getElementById("Etape10Mob"+i).checked == true) {
            AvancementEtape10 += 1;
            AvancementPourcentageEtape10 = Math.round(100 + ((AvancementEtape10-AvancementMaxEtape10)/AvancementMaxEtape10)*100);
            document.getElementById("spanAll10").innerHTML = AvancementEtape10+"/"+AvancementMaxEtape10+' soit en pourcentage : '+AvancementPourcentageEtape10+'%';
            document.getElementById("progressEtape10").setAttribute("value", AvancementPourcentageEtape10);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape10 == 100) {
                document.getElementById("Etape10").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape10").checked = true;
            }
            else {
                document.getElementById("Etape10").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape10 -= 1;
            AvancementPourcentageEtape10 = Math.round(100 + ((AvancementEtape10-AvancementMaxEtape10)/AvancementMaxEtape10)*100);
            document.getElementById("spanAll10").innerHTML = AvancementEtape10+"/"+AvancementMaxEtape10+' soit en pourcentage : '+AvancementPourcentageEtape10+'%';
            document.getElementById("progressEtape10").setAttribute("value", AvancementPourcentageEtape10);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape10 == 100) {
                document.getElementById("Etape10").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape10").style.backgroundColor = "#eee";
                document.getElementById("allEtape10").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape11Mob(i) {
        if(document.getElementById("Etape11Mob"+i).checked == true) {
            AvancementEtape11 += 1;
            AvancementPourcentageEtape11 = Math.round(100 + ((AvancementEtape11-AvancementMaxEtape11)/AvancementMaxEtape11)*100);
            document.getElementById("spanAll11").innerHTML = AvancementEtape11+"/"+AvancementMaxEtape11+' soit en pourcentage : '+AvancementPourcentageEtape11+'%';
            document.getElementById("progressEtape11").setAttribute("value", AvancementPourcentageEtape11);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape11 == 100) {
                document.getElementById("Etape11").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape11").checked = true;
            }
            else {
                document.getElementById("Etape11").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape11 -= 1;
            AvancementPourcentageEtape11 = Math.round(100 + ((AvancementEtape11-AvancementMaxEtape11)/AvancementMaxEtape11)*100);
            document.getElementById("spanAll11").innerHTML = AvancementEtape11+"/"+AvancementMaxEtape11+' soit en pourcentage : '+AvancementPourcentageEtape11+'%';
            document.getElementById("progressEtape11").setAttribute("value", AvancementPourcentageEtape11);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape11 == 100) {
                document.getElementById("Etape11").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape11").style.backgroundColor = "#eee";
                document.getElementById("allEtape11").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape12Mob(i) {
        if(document.getElementById("Etape12Mob"+i).checked == true) {
            AvancementEtape12 += 1;
            AvancementPourcentageEtape12 = Math.round(100 + ((AvancementEtape12-AvancementMaxEtape12)/AvancementMaxEtape12)*100);
            document.getElementById("spanAll12").innerHTML = AvancementEtape12+"/"+AvancementMaxEtape12+' soit en pourcentage : '+AvancementPourcentageEtape12+'%';
            document.getElementById("progressEtape12").setAttribute("value", AvancementPourcentageEtape12);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape12 == 100) {
                document.getElementById("Etape12").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape12").checked = true;
            }
            else {
                document.getElementById("Etape12").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape12 -= 1;
            AvancementPourcentageEtape12 = Math.round(100 + ((AvancementEtape12-AvancementMaxEtape12)/AvancementMaxEtape12)*100);
            document.getElementById("spanAll12").innerHTML = AvancementEtape12+"/"+AvancementMaxEtape12+' soit en pourcentage : '+AvancementPourcentageEtape12+'%';
            document.getElementById("progressEtape12").setAttribute("value", AvancementPourcentageEtape12);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape12 == 100) {
                document.getElementById("Etape12").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape12").style.backgroundColor = "#eee";
                document.getElementById("allEtape12").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape13Mob(i) {
        if(document.getElementById("Etape13Mob"+i).checked == true) {
            AvancementEtape13 += 1;
            AvancementPourcentageEtape13 = Math.round(100 + ((AvancementEtape13-AvancementMaxEtape13)/AvancementMaxEtape13)*100);
            document.getElementById("spanAll13").innerHTML = AvancementEtape13+"/"+AvancementMaxEtape13+' soit en pourcentage : '+AvancementPourcentageEtape13+'%';
            document.getElementById("progressEtape13").setAttribute("value", AvancementPourcentageEtape13);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape13 == 100) {
                document.getElementById("Etape13").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape13").checked = true;
            }
            else {
                document.getElementById("Etape13").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape13 -= 1;
            AvancementPourcentageEtape13 = Math.round(100 + ((AvancementEtape13-AvancementMaxEtape13)/AvancementMaxEtape13)*100);
            document.getElementById("spanAll13").innerHTML = AvancementEtape13+"/"+AvancementMaxEtape13+' soit en pourcentage : '+AvancementPourcentageEtape13+'%';
            document.getElementById("progressEtape13").setAttribute("value", AvancementPourcentageEtape13);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape13 == 100) {
                document.getElementById("Etape13").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape13").style.backgroundColor = "#eee";
                document.getElementById("allEtape13").checked = false;
            }
        }
    }
}

for(var i = 0; i < 18; i++) {
    function ActuEtape14Mob(i) {
        if(document.getElementById("Etape14Mob"+i).checked == true) {
            AvancementEtape14 += 1;
            AvancementPourcentageEtape14 = Math.round(100 + ((AvancementEtape14-AvancementMaxEtape14)/AvancementMaxEtape14)*100);
            document.getElementById("spanAll14").innerHTML = AvancementEtape14+"/"+AvancementMaxEtape14+' soit en pourcentage : '+AvancementPourcentageEtape14+'%';
            document.getElementById("progressEtape14").setAttribute("value", AvancementPourcentageEtape14);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape14 == 100) {
                document.getElementById("Etape14").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape14").checked = true;
            }
            else {
                document.getElementById("Etape14").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape14 -= 1;
            AvancementPourcentageEtape14 = Math.round(100 + ((AvancementEtape14-AvancementMaxEtape14)/AvancementMaxEtape14)*100);
            document.getElementById("spanAll14").innerHTML = AvancementEtape14+"/"+AvancementMaxEtape14+' soit en pourcentage : '+AvancementPourcentageEtape14+'%';
            document.getElementById("progressEtape14").setAttribute("value", AvancementPourcentageEtape14);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape14 == 100) {
                document.getElementById("Etape14").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape14").style.backgroundColor = "#eee";
                document.getElementById("allEtape14").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape15Mob(i) {
        if(document.getElementById("Etape15Mob"+i).checked == true) {
            AvancementEtape15 += 1;
            AvancementPourcentageEtape15 = Math.round(100 + ((AvancementEtape15-AvancementMaxEtape15)/AvancementMaxEtape15)*100);
            document.getElementById("spanAll15").innerHTML = AvancementEtape15+"/"+AvancementMaxEtape15+' soit en pourcentage : '+AvancementPourcentageEtape15+'%';
            document.getElementById("progressEtape15").setAttribute("value", AvancementPourcentageEtape15);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape15 == 100) {
                document.getElementById("Etape15").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape15").checked = true;
            }
            else {
                document.getElementById("Etape15").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape15 -= 1;
            AvancementPourcentageEtape15 = Math.round(100 + ((AvancementEtape15-AvancementMaxEtape15)/AvancementMaxEtape15)*100);
            document.getElementById("spanAll15").innerHTML = AvancementEtape15+"/"+AvancementMaxEtape15+' soit en pourcentage : '+AvancementPourcentageEtape15+'%';
            document.getElementById("progressEtape15").setAttribute("value", AvancementPourcentageEtape15);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape15 == 100) {
                document.getElementById("Etape15").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape15").style.backgroundColor = "#eee";
                document.getElementById("allEtape15").checked = false;
            }
        }
    }
}

for(var i = 0; i < 2; i++) {
    function ActuEtape16Mob(i) {
        if(document.getElementById("Etape16Mob"+i).checked == true) {
            AvancementEtape16 += 1;
            AvancementPourcentageEtape16 = Math.round(100 + ((AvancementEtape16-AvancementMaxEtape16)/AvancementMaxEtape16)*100);
            document.getElementById("spanAll16").innerHTML = AvancementEtape16+"/"+AvancementMaxEtape16+' soit en pourcentage : '+AvancementPourcentageEtape16+'%';
            document.getElementById("progressEtape16").setAttribute("value", AvancementPourcentageEtape16);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape16 == 100) {
                document.getElementById("Etape16").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape16").checked = true;
            }
            else {
                document.getElementById("Etape16").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape16 -= 1;
            AvancementPourcentageEtape16 = Math.round(100 + ((AvancementEtape16-AvancementMaxEtape16)/AvancementMaxEtape16)*100);
            document.getElementById("spanAll16").innerHTML = AvancementEtape16+"/"+AvancementMaxEtape16+' soit en pourcentage : '+AvancementPourcentageEtape16+'%';
            document.getElementById("progressEtape16").setAttribute("value", AvancementPourcentageEtape16);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape16 == 100) {
                document.getElementById("Etape16").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape16").style.backgroundColor = "#eee";
                document.getElementById("allEtape16").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape17Mob(i) {
        if(document.getElementById("Etape17Mob"+i).checked == true) {
            AvancementEtape17 += 1;
            AvancementPourcentageEtape17 = Math.round(100 + ((AvancementEtape17-AvancementMaxEtape17)/AvancementMaxEtape17)*100);
            document.getElementById("spanAll17").innerHTML = AvancementEtape17+"/"+AvancementMaxEtape17+' soit en pourcentage : '+AvancementPourcentageEtape17+'%';
            document.getElementById("progressEtape17").setAttribute("value", AvancementPourcentageEtape17);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape17 == 100) {
                document.getElementById("Etape17").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape17").checked = true;
            }
            else {
                document.getElementById("Etape17").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape17 -= 1;
            AvancementPourcentageEtape17 = Math.round(100 + ((AvancementEtape17-AvancementMaxEtape17)/AvancementMaxEtape17)*100);
            document.getElementById("spanAll17").innerHTML = AvancementEtape17+"/"+AvancementMaxEtape17+' soit en pourcentage : '+AvancementPourcentageEtape17+'%';
            document.getElementById("progressEtape17").setAttribute("value", AvancementPourcentageEtape17);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape17 == 100) {
                document.getElementById("Etape17").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape17").style.backgroundColor = "#eee";
                document.getElementById("allEtape17").checked = false;
            }
        }
    }
}

for(var i = 0; i < 17; i++) {
    function ActuEtape18Mob(i) {
        if(document.getElementById("Etape18Mob"+i).checked == true) {
            AvancementEtape18 += 1;
            AvancementPourcentageEtape18 = Math.round(100 + ((AvancementEtape18-AvancementMaxEtape18)/AvancementMaxEtape18)*100);
            document.getElementById("spanAll18").innerHTML = AvancementEtape18+"/"+AvancementMaxEtape18+' soit en pourcentage : '+AvancementPourcentageEtape18+'%';
            document.getElementById("progressEtape18").setAttribute("value", AvancementPourcentageEtape18);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape18 == 100) {
                document.getElementById("Etape18").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape18").checked = true;
            }
            else {
                document.getElementById("Etape18").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape18 -= 1;
            AvancementPourcentageEtape18 = Math.round(100 + ((AvancementEtape18-AvancementMaxEtape18)/AvancementMaxEtape18)*100);
            document.getElementById("spanAll18").innerHTML = AvancementEtape18+"/"+AvancementMaxEtape18+' soit en pourcentage : '+AvancementPourcentageEtape18+'%';
            document.getElementById("progressEtape18").setAttribute("value", AvancementPourcentageEtape18);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape18 == 100) {
                document.getElementById("Etape18").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape18").style.backgroundColor = "#eee";
                document.getElementById("allEtape18").checked = false;
            }
        }
    }
}

for(var i = 0; i < 11; i++) {
    function ActuEtape19Mob(i) {
        if(document.getElementById("Etape19Mob"+i).checked == true) {
            AvancementEtape19 += 1;
            AvancementPourcentageEtape19 = Math.round(100 + ((AvancementEtape19-AvancementMaxEtape19)/AvancementMaxEtape19)*100);
            document.getElementById("spanAll19").innerHTML = AvancementEtape19+"/"+AvancementMaxEtape19+' soit en pourcentage : '+AvancementPourcentageEtape19+'%';
            document.getElementById("progressEtape19").setAttribute("value", AvancementPourcentageEtape19);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape19 == 100) {
                document.getElementById("Etape19").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape19").checked = true;
            }
            else {
                document.getElementById("Etape19").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape19 -= 1;
            AvancementPourcentageEtape19 = Math.round(100 + ((AvancementEtape19-AvancementMaxEtape19)/AvancementMaxEtape19)*100);
            document.getElementById("spanAll19").innerHTML = AvancementEtape19+"/"+AvancementMaxEtape19+' soit en pourcentage : '+AvancementPourcentageEtape19+'%';
            document.getElementById("progressEtape19").setAttribute("value", AvancementPourcentageEtape19);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape19 == 100) {
                document.getElementById("Etape19").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape19").style.backgroundColor = "#eee";
                document.getElementById("allEtape19").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape20Mob(i) {
        if(document.getElementById("Etape20Mob"+i).checked == true) {
            AvancementEtape20 += 1;
            AvancementPourcentageEtape20 = Math.round(100 + ((AvancementEtape20-AvancementMaxEtape20)/AvancementMaxEtape20)*100);
            document.getElementById("spanAll20").innerHTML = AvancementEtape20+"/"+AvancementMaxEtape20+' soit en pourcentage : '+AvancementPourcentageEtape20+'%';
            document.getElementById("progressEtape20").setAttribute("value", AvancementPourcentageEtape20);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape20 == 100) {
                document.getElementById("Etape20").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape20").checked = true;
            }
            else {
                document.getElementById("Etape20").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape20 -= 1;
            AvancementPourcentageEtape20 = Math.round(100 + ((AvancementEtape20-AvancementMaxEtape20)/AvancementMaxEtape20)*100);
            document.getElementById("spanAll20").innerHTML = AvancementEtape20+"/"+AvancementMaxEtape20+' soit en pourcentage : '+AvancementPourcentageEtape20+'%';
            document.getElementById("progressEtape20").setAttribute("value", AvancementPourcentageEtape20);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape20 == 100) {
                document.getElementById("Etape20").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape20").style.backgroundColor = "#eee";
                document.getElementById("allEtape20").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape21Mob(i) {
        if(document.getElementById("Etape21Mob"+i).checked == true) {
            AvancementEtape21 += 1;
            AvancementPourcentageEtape21 = Math.round(100 + ((AvancementEtape21-AvancementMaxEtape21)/AvancementMaxEtape21)*100);
            document.getElementById("spanAll21").innerHTML = AvancementEtape21+"/"+AvancementMaxEtape21+' soit en pourcentage : '+AvancementPourcentageEtape21+'%';
            document.getElementById("progressEtape21").setAttribute("value", AvancementPourcentageEtape21);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape21 == 100) {
                document.getElementById("Etape21").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape21").checked = true;
            }
            else {
                document.getElementById("Etape21").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape21 -= 1;
            AvancementPourcentageEtape21 = Math.round(100 + ((AvancementEtape21-AvancementMaxEtape21)/AvancementMaxEtape21)*100);
            document.getElementById("spanAll21").innerHTML = AvancementEtape21+"/"+AvancementMaxEtape21+' soit en pourcentage : '+AvancementPourcentageEtape21+'%';
            document.getElementById("progressEtape21").setAttribute("value", AvancementPourcentageEtape21);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape21 == 100) {
                document.getElementById("Etape21").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape21").style.backgroundColor = "#eee";
                document.getElementById("allEtape21").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape22Mob(i) {
        if(document.getElementById("Etape22Mob"+i).checked == true) {
            AvancementEtape22 += 1;
            AvancementPourcentageEtape22 = Math.round(100 + ((AvancementEtape22-AvancementMaxEtape22)/AvancementMaxEtape22)*100);
            document.getElementById("spanAll22").innerHTML = AvancementEtape22+"/"+AvancementMaxEtape22+' soit en pourcentage : '+AvancementPourcentageEtape22+'%';
            document.getElementById("progressEtape22").setAttribute("value", AvancementPourcentageEtape22);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape22 == 100) {
                document.getElementById("Etape22").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape22").checked = true;
            }
            else {
                document.getElementById("Etape22").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape22 -= 1;
            AvancementPourcentageEtape22 = Math.round(100 + ((AvancementEtape22-AvancementMaxEtape22)/AvancementMaxEtape22)*100);
            document.getElementById("spanAll22").innerHTML = AvancementEtape22+"/"+AvancementMaxEtape22+' soit en pourcentage : '+AvancementPourcentageEtape22+'%';
            document.getElementById("progressEtape22").setAttribute("value", AvancementPourcentageEtape22);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape22 == 100) {
                document.getElementById("Etape22").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape22").style.backgroundColor = "#eee";
                document.getElementById("allEtape22").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape23Mob(i) {
        if(document.getElementById("Etape23Mob"+i).checked == true) {
            AvancementEtape23 += 1;
            AvancementPourcentageEtape23 = Math.round(100 + ((AvancementEtape23-AvancementMaxEtape23)/AvancementMaxEtape23)*100);
            document.getElementById("spanAll23").innerHTML = AvancementEtape23+"/"+AvancementMaxEtape23+' soit en pourcentage : '+AvancementPourcentageEtape23+'%';
            document.getElementById("progressEtape23").setAttribute("value", AvancementPourcentageEtape23);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape23 == 100) {
                document.getElementById("Etape23").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape23").checked = true;
            }
            else {
                document.getElementById("Etape23").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape23 -= 1;
            AvancementPourcentageEtape23 = Math.round(100 + ((AvancementEtape23-AvancementMaxEtape23)/AvancementMaxEtape23)*100);
            document.getElementById("spanAll23").innerHTML = AvancementEtape23+"/"+AvancementMaxEtape23+' soit en pourcentage : '+AvancementPourcentageEtape23+'%';
            document.getElementById("progressEtape23").setAttribute("value", AvancementPourcentageEtape23);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape23 == 100) {
                document.getElementById("Etape23").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape23").style.backgroundColor = "#eee";
                document.getElementById("allEtape23").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape24Mob(i) {
        if(document.getElementById("Etape24Mob"+i).checked == true) {
            AvancementEtape24 += 1;
            AvancementPourcentageEtape24 = Math.round(100 + ((AvancementEtape24-AvancementMaxEtape24)/AvancementMaxEtape24)*100);
            document.getElementById("spanAll24").innerHTML = AvancementEtape24+"/"+AvancementMaxEtape24+' soit en pourcentage : '+AvancementPourcentageEtape24+'%';
            document.getElementById("progressEtape24").setAttribute("value", AvancementPourcentageEtape24);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape24 == 100) {
                document.getElementById("Etape24").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape24").checked = true;
            }
            else {
                document.getElementById("Etape24").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape24 -= 1;
            AvancementPourcentageEtape24 = Math.round(100 + ((AvancementEtape24-AvancementMaxEtape24)/AvancementMaxEtape24)*100);
            document.getElementById("spanAll24").innerHTML = AvancementEtape24+"/"+AvancementMaxEtape24+' soit en pourcentage : '+AvancementPourcentageEtape24+'%';
            document.getElementById("progressEtape24").setAttribute("value", AvancementPourcentageEtape24);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape24 == 100) {
                document.getElementById("Etape24").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape24").style.backgroundColor = "#eee";
                document.getElementById("allEtape24").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape25Mob(i) {
        if(document.getElementById("Etape25Mob"+i).checked == true) {
            AvancementEtape25 += 1;
            AvancementPourcentageEtape25 = Math.round(100 + ((AvancementEtape25-AvancementMaxEtape25)/AvancementMaxEtape25)*100);
            document.getElementById("spanAll25").innerHTML = AvancementEtape25+"/"+AvancementMaxEtape25+' soit en pourcentage : '+AvancementPourcentageEtape25+'%';
            document.getElementById("progressEtape25").setAttribute("value", AvancementPourcentageEtape25);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape25 == 100) {
                document.getElementById("Etape25").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape25").checked = true;
            }
            else {
                document.getElementById("Etape25").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape25 -= 1;
            AvancementPourcentageEtape25 = Math.round(100 + ((AvancementEtape25-AvancementMaxEtape25)/AvancementMaxEtape25)*100);
            document.getElementById("spanAll25").innerHTML = AvancementEtape25+"/"+AvancementMaxEtape25+' soit en pourcentage : '+AvancementPourcentageEtape25+'%';
            document.getElementById("progressEtape25").setAttribute("value", AvancementPourcentageEtape25);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape25 == 100) {
                document.getElementById("Etape25").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape25").style.backgroundColor = "#eee";
                document.getElementById("allEtape25").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape26Mob(i) {
        if(document.getElementById("Etape26Mob"+i).checked == true) {
            AvancementEtape26 += 1;
            AvancementPourcentageEtape26 = Math.round(100 + ((AvancementEtape26-AvancementMaxEtape26)/AvancementMaxEtape26)*100);
            document.getElementById("spanAll26").innerHTML = AvancementEtape26+"/"+AvancementMaxEtape26+' soit en pourcentage : '+AvancementPourcentageEtape26+'%';
            document.getElementById("progressEtape26").setAttribute("value", AvancementPourcentageEtape26);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape26 == 100) {
                document.getElementById("Etape26").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape26").checked = true;
            }
            else {
                document.getElementById("Etape26").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape26 -= 1;
            AvancementPourcentageEtape26 = Math.round(100 + ((AvancementEtape26-AvancementMaxEtape26)/AvancementMaxEtape26)*100);
            document.getElementById("spanAll26").innerHTML = AvancementEtape26+"/"+AvancementMaxEtape26+' soit en pourcentage : '+AvancementPourcentageEtape26+'%';
            document.getElementById("progressEtape26").setAttribute("value", AvancementPourcentageEtape26);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape26 == 100) {
                document.getElementById("Etape26").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape26").style.backgroundColor = "#eee";
                document.getElementById("allEtape26").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape27Mob(i) {
        if(document.getElementById("Etape27Mob"+i).checked == true) {
            AvancementEtape27 += 1;
            AvancementPourcentageEtape27 = Math.round(100 + ((AvancementEtape27-AvancementMaxEtape27)/AvancementMaxEtape27)*100);
            document.getElementById("spanAll27").innerHTML = AvancementEtape27+"/"+AvancementMaxEtape27+' soit en pourcentage : '+AvancementPourcentageEtape27+'%';
            document.getElementById("progressEtape27").setAttribute("value", AvancementPourcentageEtape27);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape27 == 100) {
                document.getElementById("Etape27").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape27").checked = true;
            }
            else {
                document.getElementById("Etape27").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape27 -= 1;
            AvancementPourcentageEtape27 = Math.round(100 + ((AvancementEtape27-AvancementMaxEtape27)/AvancementMaxEtape27)*100);
            document.getElementById("spanAll27").innerHTML = AvancementEtape27+"/"+AvancementMaxEtape27+' soit en pourcentage : '+AvancementPourcentageEtape27+'%';
            document.getElementById("progressEtape27").setAttribute("value", AvancementPourcentageEtape27);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape27 == 100) {
                document.getElementById("Etape27").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape27").style.backgroundColor = "#eee";
                document.getElementById("allEtape27").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape28Mob(i) {
        if(document.getElementById("Etape28Mob"+i).checked == true) {
            AvancementEtape28 += 1;
            AvancementPourcentageEtape28 = Math.round(100 + ((AvancementEtape28-AvancementMaxEtape28)/AvancementMaxEtape28)*100);
            document.getElementById("spanAll28").innerHTML = AvancementEtape28+"/"+AvancementMaxEtape28+' soit en pourcentage : '+AvancementPourcentageEtape28+'%';
            document.getElementById("progressEtape28").setAttribute("value", AvancementPourcentageEtape28);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape28 == 100) {
                document.getElementById("Etape28").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape28").checked = true;
            }
            else {
                document.getElementById("Etape28").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape28 -= 1;
            AvancementPourcentageEtape28 = Math.round(100 + ((AvancementEtape28-AvancementMaxEtape28)/AvancementMaxEtape28)*100);
            document.getElementById("spanAll28").innerHTML = AvancementEtape28+"/"+AvancementMaxEtape28+' soit en pourcentage : '+AvancementPourcentageEtape28+'%';
            document.getElementById("progressEtape28").setAttribute("value", AvancementPourcentageEtape28);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape28 == 100) {
                document.getElementById("Etape28").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape28").style.backgroundColor = "#eee";
                document.getElementById("allEtape28").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape29Mob(i) {
        if(document.getElementById("Etape29Mob"+i).checked == true) {
            AvancementEtape29 += 1;
            AvancementPourcentageEtape29 = Math.round(100 + ((AvancementEtape29-AvancementMaxEtape29)/AvancementMaxEtape29)*100);
            document.getElementById("spanAll29").innerHTML = AvancementEtape29+"/"+AvancementMaxEtape29+' soit en pourcentage : '+AvancementPourcentageEtape29+'%';
            document.getElementById("progressEtape29").setAttribute("value", AvancementPourcentageEtape29);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape29 == 100) {
                document.getElementById("Etape29").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape29").checked = true;
            }
            else {
                document.getElementById("Etape29").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape29 -= 1;
            AvancementPourcentageEtape29 = Math.round(100 + ((AvancementEtape29-AvancementMaxEtape29)/AvancementMaxEtape29)*100);
            document.getElementById("spanAll29").innerHTML = AvancementEtape29+"/"+AvancementMaxEtape29+' soit en pourcentage : '+AvancementPourcentageEtape29+'%';
            document.getElementById("progressEtape29").setAttribute("value", AvancementPourcentageEtape29);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape29 == 100) {
                document.getElementById("Etape29").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape29").style.backgroundColor = "#eee";
                document.getElementById("allEtape29").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape30Mob(i) {
        if(document.getElementById("Etape30Mob"+i).checked == true) {
            AvancementEtape30 += 1;
            AvancementPourcentageEtape30 = Math.round(100 + ((AvancementEtape30-AvancementMaxEtape30)/AvancementMaxEtape30)*100);
            document.getElementById("spanAll30").innerHTML = AvancementEtape30+"/"+AvancementMaxEtape30+' soit en pourcentage : '+AvancementPourcentageEtape30+'%';
            document.getElementById("progressEtape30").setAttribute("value", AvancementPourcentageEtape30);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape30 == 100) {
                document.getElementById("Etape30").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape30").checked = true;
            }
            else {
                document.getElementById("Etape30").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape30 -= 1;
            AvancementPourcentageEtape30 = Math.round(100 + ((AvancementEtape30-AvancementMaxEtape30)/AvancementMaxEtape30)*100);
            document.getElementById("spanAll30").innerHTML = AvancementEtape30+"/"+AvancementMaxEtape30+' soit en pourcentage : '+AvancementPourcentageEtape30+'%';
            document.getElementById("progressEtape30").setAttribute("value", AvancementPourcentageEtape30);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape30 == 100) {
                document.getElementById("Etape30").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape30").style.backgroundColor = "#eee";
                document.getElementById("allEtape30").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape31Mob(i) {
        if(document.getElementById("Etape31Mob"+i).checked == true) {
            AvancementEtape31 += 1;
            AvancementPourcentageEtape31 = Math.round(100 + ((AvancementEtape31-AvancementMaxEtape31)/AvancementMaxEtape31)*100);
            document.getElementById("spanAll31").innerHTML = AvancementEtape31+"/"+AvancementMaxEtape31+' soit en pourcentage : '+AvancementPourcentageEtape31+'%';
            document.getElementById("progressEtape31").setAttribute("value", AvancementPourcentageEtape31);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape31 == 100) {
                document.getElementById("Etape31").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape31").checked = true;
            }
            else {
                document.getElementById("Etape31").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape31 -= 1;
            AvancementPourcentageEtape31 = Math.round(100 + ((AvancementEtape31-AvancementMaxEtape31)/AvancementMaxEtape31)*100);
            document.getElementById("spanAll31").innerHTML = AvancementEtape31+"/"+AvancementMaxEtape31+' soit en pourcentage : '+AvancementPourcentageEtape31+'%';
            document.getElementById("progressEtape31").setAttribute("value", AvancementPourcentageEtape31);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape31 == 100) {
                document.getElementById("Etape31").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape31").style.backgroundColor = "#eee";
                document.getElementById("allEtape31").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape32Mob(i) {
        if(document.getElementById("Etape32Mob"+i).checked == true) {
            AvancementEtape32 += 1;
            AvancementPourcentageEtape32 = Math.round(100 + ((AvancementEtape32-AvancementMaxEtape32)/AvancementMaxEtape32)*100);
            document.getElementById("spanAll32").innerHTML = AvancementEtape32+"/"+AvancementMaxEtape32+' soit en pourcentage : '+AvancementPourcentageEtape32+'%';
            document.getElementById("progressEtape32").setAttribute("value", AvancementPourcentageEtape32);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape32 == 100) {
                document.getElementById("Etape32").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape32").checked = true;
            }
            else {
                document.getElementById("Etape32").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape32 -= 1;
            AvancementPourcentageEtape32 = Math.round(100 + ((AvancementEtape32-AvancementMaxEtape32)/AvancementMaxEtape32)*100);
            document.getElementById("spanAll32").innerHTML = AvancementEtape32+"/"+AvancementMaxEtape32+' soit en pourcentage : '+AvancementPourcentageEtape32+'%';
            document.getElementById("progressEtape32").setAttribute("value", AvancementPourcentageEtape32);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape32 == 100) {
                document.getElementById("Etape32").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape32").style.backgroundColor = "#eee";
                document.getElementById("allEtape32").checked = false;
            }
        }
    }
}

for(var i = 0; i < 20; i++) {
    function ActuEtape33Mob(i) {
        if(document.getElementById("Etape33Mob"+i).checked == true) {
            AvancementEtape33 += 1;
            AvancementPourcentageEtape33 = Math.round(100 + ((AvancementEtape33-AvancementMaxEtape33)/AvancementMaxEtape33)*100);
            document.getElementById("spanAll33").innerHTML = AvancementEtape33+"/"+AvancementMaxEtape33+' soit en pourcentage : '+AvancementPourcentageEtape33+'%';
            document.getElementById("progressEtape33").setAttribute("value", AvancementPourcentageEtape33);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape33 == 100) {
                document.getElementById("Etape33").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape33").checked = true;
            }
            else {
                document.getElementById("Etape33").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape33 -= 1;
            AvancementPourcentageEtape33 = Math.round(100 + ((AvancementEtape33-AvancementMaxEtape33)/AvancementMaxEtape33)*100);
            document.getElementById("spanAll33").innerHTML = AvancementEtape33+"/"+AvancementMaxEtape33+' soit en pourcentage : '+AvancementPourcentageEtape33+'%';
            document.getElementById("progressEtape33").setAttribute("value", AvancementPourcentageEtape33);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape33 == 100) {
                document.getElementById("Etape33").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape33").style.backgroundColor = "#eee";
                document.getElementById("allEtape33").checked = false;
            }
        }
    }
}

for(var i = 0; i < 6; i++) {
    function ActuEtape34Mob(i) {
        if(document.getElementById("Etape34Mob"+i).checked == true) {
            AvancementEtape34 += 1;
            AvancementPourcentageEtape34 = Math.round(100 + ((AvancementEtape34-AvancementMaxEtape34)/AvancementMaxEtape34)*100);
            document.getElementById("spanAll34").innerHTML = AvancementEtape34+"/"+AvancementMaxEtape34+' soit en pourcentage : '+AvancementPourcentageEtape34+'%';
            document.getElementById("progressEtape34").setAttribute("value", AvancementPourcentageEtape34);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape34 == 100) {
                document.getElementById("Etape34").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape34").checked = true;
            }
            else {
                document.getElementById("Etape34").style.backgroundColor = "#eee";
            }
        }
        else {
            AvancementEtape34 -= 1;
            AvancementPourcentageEtape34 = Math.round(100 + ((AvancementEtape34-AvancementMaxEtape34)/AvancementMaxEtape34)*100);
            document.getElementById("spanAll34").innerHTML = AvancementEtape34+"/"+AvancementMaxEtape34+' soit en pourcentage : '+AvancementPourcentageEtape34+'%';
            document.getElementById("progressEtape34").setAttribute("value", AvancementPourcentageEtape34);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if(AvancementPourcentageEtape34 == 100) {
                document.getElementById("Etape34").style.backgroundColor = "#6EB8FF";
            }
            else {
                document.getElementById("Etape34").style.backgroundColor = "#eee";
                document.getElementById("allEtape34").checked = false;
            }
        }
    }
}

for(var i = 0; i < 1; i++) {
    function ActuEtape35Mob(i) {
        if (document.getElementById("Etape35Mob" + i).checked == true) {
            AvancementEtape35 += 1;
            AvancementPourcentageEtape35 = Math.round(100 + ((AvancementEtape35 - AvancementMaxEtape35) / AvancementMaxEtape35) * 100);
            document.getElementById("spanAll35").innerHTML = AvancementEtape35 + "/" + AvancementMaxEtape35 + ' soit en pourcentage : ' + AvancementPourcentageEtape35 + '%';
            document.getElementById("progressEtape35").setAttribute("value", AvancementPourcentageEtape35);
            AvancementGlobal += 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if (AvancementPourcentageEtape35 == 100) {
                document.getElementById("Etape35").style.backgroundColor = "#6EB8FF";
                document.getElementById("allEtape35").checked = true;
            } else {
                document.getElementById("Etape35").style.backgroundColor = "#eee";
            }
        } else {
            AvancementEtape35 -= 1;
            AvancementPourcentageEtape35 = Math.round(100 + ((AvancementEtape35 - AvancementMaxEtape35) / AvancementMaxEtape35) * 100);
            document.getElementById("spanAll35").innerHTML = AvancementEtape35 + "/" + AvancementMaxEtape35 + ' soit en pourcentage : ' + AvancementPourcentageEtape35 + '%';
            document.getElementById("progressEtape35").setAttribute("value", AvancementPourcentageEtape35);
            AvancementGlobal -= 1;
            AvancementPourcentageGlobal = Math.round(100 + ((AvancementGlobal-AvancementMaxGlobal)/AvancementMaxGlobal)*100);
            document.getElementById("spanGlobal").innerHTML = "Avancement global : " + AvancementGlobal + "/" + AvancementMaxGlobal + " soit en pourcentage : " + AvancementPourcentageGlobal + "% <progress style='width: 100%' id='progressGlobal' max='100'></progress>";
            document.getElementById("progressGlobal").setAttribute("value", AvancementPourcentageGlobal);
            if (AvancementPourcentageEtape35 == 100) {
                document.getElementById("Etape35").style.backgroundColor = "#6EB8FF";
            } else {
                document.getElementById("Etape35").style.backgroundColor = "#eee";
                document.getElementById("allEtape35").checked = false;
            }
        }
    }
}