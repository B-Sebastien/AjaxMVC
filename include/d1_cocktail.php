<?php
$cocktail = $_REQUEST['cocktail'];
if($cocktail == "citron") 
    $texte = "Vous aimez le Mojito !";
if($cocktail == "curacao")
    $texte = "Vous aimez le Blue Lagoon !";
if($cocktail == "cassis")
    $texte = "Vous aimez le Kir !";
echo "<h1> $texte </h1>";
