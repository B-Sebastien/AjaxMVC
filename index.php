<?php

require_once ("modele/class.pdo.inc.php");

$pdo = PdoEtablissement::getPdoEtablissement();
$lesLignes = $pdo->getLesEtablissements();

$lesLignesArrondissements = $pdo->getLesArrondissements();

if (!isset($_REQUEST['action'])) {
    $action = 'demo1';
} else {
    $action = $_REQUEST['action'];
}

include("vues/v_entete.php");

switch ($action) {
    case 'demo1':
        include("vues/v_demo1.php");
        break;

    case 'demo2':
        include("vues/v_demo2.php");
        break;

    case 'demo3':
        include("vues/v_demo3.php");
        break;

    case 'demo4':
        include("vues/v_demo4.php");
        break;

    case 'etablissement':
        include("vues/v_etablissement.php");
        break;
}