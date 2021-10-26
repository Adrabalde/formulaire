<?php 
require "header.html"
?>

  
    <form action="inserer.php" method="post">
        <fieldset>
          <legend>Formulaire d'inscription:</legend>
          <label for="nom">Nom:</label><br>
          <input type="text" id="nom" name="nom" value="" required><br>
          <label for="prenom">Prénom:</label><br>
          <input type="text" id="prenom" name="prenom" value="" required><br>
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" value="" required><br>
          <label for="login">Login:</label><br>
          <input type="text" id="login" name="login" value="" required><br>
          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password" value="" required><br><br>
          <input type="submit" value="S'inscrire">
        </fieldset>
      </form>
    

<?php 
require "footer.html"
?>