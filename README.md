L'application : Formulaire d'inscription / connexion sécurisé. 
S'inscrire : insciption.php -> inserer.php 
Connexion : index.php -> verifier.php 


La mise en place :
a - créer une base de données sur MySql nommée "formulaire"
b - importer le fichier formulaire.sql dans la base de données "formulaire"
c - déplacer le code source dans le dossier htdocs d'XAMMP ou www de wamp 
d - consulter la page localhost/index.php 

Les outils :
Apache : serveur web PHP 
MySQL : SGBD 

Langages : 
HTML 
CSS - bootstrap 
PHP 

Sécurité : 
// htmlspecialchars : éviter l'exécution de code HTML 
// stripcslashes : supprimer les "/"
// strip_tags : éliminer les balises HTML 
// CSRF token 

A 01 : 
- https - ssl 
- Générer une clé nommée formulaire.com.key et un certificat nommé formulaire.com.crt 
- vhost-ssl
- php.ini : allow_url_fopen = off
- Cacher les contenu des dossiers 
.htaccess 
Options -Indexes 
- die() : 
- URL Rewriting :
RewriteEngine on
RewriteRule ^folder/?$ - [F,L]
A 02 :
- if($_POST["nom"])
- Cryptage : 
- htmlentities 
A 03 : 
- Requêtes BDD avec doubles quotes
- addslashes() 
A 04 :
- Données contrôlées et validées 
A 05 :
- .htaccess : Contrôler l'accès 
- Fermer la connexion sur la base de données à la fin de l'utilisation 
- Fermer la session après une période de temps 
session_destroy();
A 06 :
- Extension PDO à jour 
A 07 :
<!-- - <input type="hidden" name="token" value=<?php echo $_SESSION["token"]?>> 
- if ($_POST["token"] == $_SESSION["token"])  --> 
A 08 :
- Serialize :
$person = new Person;
  $s = serialize($person);
- unserialize : 
- $person = unserialize($s);



