<?php 
require "header.html"
?>
<?php
session_start();
echo "Bienvenue sur notre site M: " . $_SESSION["login"] ;
?>
<br>
<br>
<br>
<a href="fermersession.php">Fermer votre session </a>
<div style="padding-top:15%">
<?php 

require "footer.html"
?>
</div>