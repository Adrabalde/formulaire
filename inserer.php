<?php

function filtrer_input($champ){

  return htmlspecialchars(stripcslashes(strip_tags($champ)));

  // htmlspecialchars : éviter l'exécution de code HTML 
  // stripcslashes : supprimer les "/"
  // strip_tags : éliminer les balises HTML 
}

$nom = filtrer_input($_POST["nom"]);
$prenom = filtrer_input($_POST["prenom"]);
$email = filtrer_input($_POST["email"]);
$login = filtrer_input($_POST["login"]);
$motdepasse = filtrer_input($_POST["password"]);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire";

try {
  // connecter à la la base des données  
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // spour afficher s'il y a des problèmes
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO compte VALUES ('$nom', '$prenom', '$email', '$login' , '$motdepasse')";
  // Executer la requte 
  $conn->exec($sql);
  echo "Votre compte est bien crée";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>