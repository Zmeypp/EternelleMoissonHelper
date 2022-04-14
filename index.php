<?php
session_start();

/* PAGE DE CONNEXION */

include('./Connection_BDD.php');
$conn = getBdd('*****', '*****', '*****');

if(isset($_POST['connectAccount'])) {
    if(!empty($_POST['connectLogin']) && !empty($_POST['connectPassword'])) {
        $requser = $conn->prepare("select * from *****.utilisateur where Login = ? and Password = ?");
        $requser->execute(array($_POST['connectLogin'], md5($_POST['connectPassword'])));
        $userExist = $requser->rowCount();
        if($userExist == 1) {
            $userInfo = $requser->fetch();
            $reqRecupIdUser = $conn->query("SELECT * FROM *****.utilisateur WHERE Login='".$_POST['connectLogin']."' && Password='".md5($_POST['connectPassword'])."'");
            while($RecupIdUser=$reqRecupIdUser->fetch()) {
                $_SESSION['ID'] = $RecupIdUser['ID'];
                $_SESSION['nbConnexion'] = $RecupIdUser['nbConnexion'];
                $_SESSION['login'] = $RecupIdUser['Login'];
            }
            $nbConnexion = $_SESSION['nbConnexion'];
            $nbConnexion += 1;
            $upDateVisits=$conn->query("UPDATE *****.utilisateur SET nbConnexion='".$nbConnexion."' WHERE ID='".$_SESSION['ID']."';");
            if($nbConnexion == 1) {
                header("Location: initializeMonsters.php");
            }
            else {
                header("Location: profil.php");
            }
        }
    }
}
?>

<html class="htmlConnexion" style="">
<head>
    <title>L'éternelle Moisson</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <center>
        <div>
            <form method="post" class="formConnexion">
                <div class="divFormConnexion">
                    <label class="labelConnexion">Login</label>
                    <div class="control">
                        <input type="text" name="connectLogin" placeholder="Jean-Michel Castagne" autocomplete="off">
                    </div>
                    <label class="labelConnexion">Password</label>
                    <div class="control">
                        <input class="passwordConnexion" type="password" name="connectPassword" placeholder="LeCastagneurFou" autocomplete="off">
                    </div>
                    <button class="buttonConnexion"  name="connectAccount"></button>
                    <a href="createAccount.php" class="createAccountConnexion"> Créer un compte </a>
                </div>
            </form>
        </div>
    </center>
</body>
</html>