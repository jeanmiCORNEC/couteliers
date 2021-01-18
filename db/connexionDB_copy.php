<?php
// new Class
class ConnexionDB
{
    private $host = 'hostname'; // host name
    private $name = 'BDDName'; // BD name
    private $user = 'UserName'; // user name
    private $pass = 'PASSWORD'; // user password
    private $connexion;

    public function __construct($host = null, $name = null, $user = null, $pass = null)
    {
        if ($host != null) {
            $this->host = $host;
            $this->name = $name;
            $this->user = $user;
            $this->pass = $pass;
        }

        try {
            $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8MB4', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        } catch (PDOExecption $e) {
            echo'Erreur : impossible de se connecter à la base de données';
            die();
        }
    }
    public function connexion()
    {
        return $this->connexion;
    }
}
$DB = new ConnexionDB;
$BDD = $DB->connexion();
