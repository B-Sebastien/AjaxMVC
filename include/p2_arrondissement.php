<?php
require_once ("../modele/class.pdo.inc.php"); 
$pdo = PdoEtablissement::getPdoEtablissement(); //Appel PDO
  
$arrondissement = $_REQUEST['arrondissement']; // Récupération des arrondissements
$lesLignesEcoles = $pdo->getLesEcoles($arrondissement); //Appel la fonction

echo json_encode($lesLignesEcoles); //Affichage par json