<?php

/* PAGE DE CREATION DU COMPTE */

include('./Connection_BDD.php');
$conn = getBdd('*****', '*****', '*****');
$erreur = "";
if(isset($_POST['createAccount'])) {
    $userCreate = htmlspecialchars($_POST['createLogin']);
    $passwordCreate = $_POST['createPassword'];
    $reqDoesThisOneExists = $conn->prepare("SELECT * FROM *****.utilisateur WHERE Login='".$userCreate."' AND Password='".md5($passwordCreate)."'");
    $reqDoesThisOneExists->execute();
    $DoesThisOneExists = $reqDoesThisOneExists->rowCount();
    if($DoesThisOneExists > 0) {
        $erreur = "<span class='labelConnexion'>Cet utilisateur existe déjà dans la base de données</span>";
    }
    else {
        if(!empty($userCreate) && !empty($passwordCreate)) {
            $reqCreateUser = $conn->prepare("INSERT INTO *****.utilisateur (Login, Password, nbConnexion) VALUES('".$userCreate."', '".md5($passwordCreate)."', 0);");
            $reqCreateUser->execute();
            header("Location: index.php");
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
                    <input type="text" name="createLogin" placeholder="Nom de Compte" autocomplete="off">
                </div>
                <label class="labelConnexion">Password</label>
                <div class="control">
                    <input class="passwordConnexion" type="password" name="createPassword" placeholder="Mot de passe" autocomplete="off">
                </div>
                <?php echo $erreur; ?>
                <button class="buttonCreateAccount"  name="createAccount"></button>
                <a href="index.php" class="createAccountConnexion"> Revenir à la page de connexion </a>
            </div>
        </form>
    </div>
</center>
</body>
</html>