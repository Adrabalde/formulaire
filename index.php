<?php 
require "header.html"
?>

<?php

session_start();
// générer le token = jeton pour le CSRF 
$_SESSION["token"] = bin2hex(random_bytes(32));

?>

    <form action="verifier.php" method="post">
     <label for="login">Login</label>
     <input type="text" name="login" id="" required> <br><br>
     <label for="password">Password</label>
     <input type="password" name="password" id="" required> <br><br>
     <!--  insérer le token dans un input de type hidden-->
     <input type="hidden" name="token" value=<?php echo $_SESSION["token"]?>>
     <input type="reset" value="Effacer">
     <input type="submit" value="Connecter">
       
    </form>
    
    <?php  
    
    if(isset($_SESSION["message"]))
    {
        echo "<span style=\"color:red\"> " . $_SESSION["message"] ."</span>" ; 
    }
    
    ?>

    <br>
    <br>
    <br>
    <a href="inscription.php" > Créer un compte </a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
    <?php 
require "footer.html";
die()
?>
