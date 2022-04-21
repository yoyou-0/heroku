<?php

class Connexion {

    private $connexion;

    public function __construct() {
        $host = 'remotemysql.com';
        $dbname = '1xUW9ATMAK';
        $login = '1xUW9ATMAK';
        $password = 'surCRgjxjN';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function getConnexion() {
        return $this->connexion;
    }

}
