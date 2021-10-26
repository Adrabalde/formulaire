<?php

$login = filtrer_input($_POST["login"]); // récuperer le login 
$motdepasse = filtrer_input($_POST["password"]); // récperer le mot de passe



function filtrer_input($champ){

    return htmlspecialchars(stripcslashes(strip_tags($champ)));

    // htmlspecialchars : éviter l'exécution de code HTML 
    // stripcslashes : supprimer les "/"
    // strip_tags : éliminer les balises HTML 
}

function test_compte_exist($login, $motdepasse){


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "formulaire";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("SELECT * FROM compte where login = ? and password = ? ");
        $stmt->execute([$login, $motdepasse]);

        // set the resulting array to associative
        $result = $stmt->rowCount();;

        if($result>=1)
        return true; 
        
       
        } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
        }
        $conn = null;
            
       return false; 
    
}

 

if(test_compte_exist($login, $motdepasse))

{
    // vérifier l'identité de la personne
    session_start();
    if ($_POST["token"] == $_SESSION["token"])
    {
    
    $_SESSION["login"] = $login;
    header("location:accueil.php");
    }
}

else 
{
    session_start();
    $_SESSION["message"] = "Merci de vérifier vos coordonnees !";
    header("location:index.php"); 
}
// pour vérifier que l'utilisteur n'a pas utilisé un autre lien pour connecter
if (!isset($_POST["token"]) || !isset($_SESSION["token"])) { 
   
    header("location:index.php"); 

 }
      
 
 





?>