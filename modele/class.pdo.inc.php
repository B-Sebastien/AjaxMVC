<?php

/**
 * Classe d'accès aux données. 

 * Utilise les services de la classe PDO
 * pour le tp ajax
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoEtablissement qui contiendra l'unique instance de la classe

 * @package default
 * @author Sébastien BORG
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
class PdoEtablissement {

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=tpajax';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoEtablissement = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        self::$monPdo = new PDO(self::$serveur . ';' . self::$bdd, self::$user, self::$mdp);
        self::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct() {
        self::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : PdoEtablissement::getPdoEtablissement();
     * @return l'unique objet de la classe PdoEtablissement
     */
    public static function getPdoEtablissement() {
        if (self::$monPdoEtablissement == null) {
            self::$monPdoEtablissement = new PdoEtablissement();
        }
        return self::$monPdoEtablissement;
    }

    /**
     * Fonction qui retourne tous les établissements
     * @return type
     */
    public function getLesEtablissements() {
        $req = "SELECT DISTINCT * FROM etablissement";
        $res = self::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Fonction qui retourne chaque arrondissement par groupe d'arrondissement
     * @return type
     */
    public function getLesArrondissements() {
        $req = "SELECT DISTINCT arrondissement "
                . "FROM etablissement "
                . "GROUP BY arrondissement";
        $res = self::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Fonction qui retourne chaque nom d'école par arrondissement
     * @param type $arrondissement
     * @return type
     */
    public function getLesEcoles($arrondissement) {
        $req = "SELECT DISTINCT nom "
                . "FROM etablissement "
                . "WHERE arrondissement=$arrondissement";
        $res = self::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }
}
?>