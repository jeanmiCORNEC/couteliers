<?php
// New class declaration
class ConnexionDB
{
    private $host = 'localhost'; // host name
    private $name = 'referencement'; // BDD name
    private $user = 'referencement'; // user name
    private $pass = 'referencement'; // password
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

// get all user's informations by id
if ($_SESSION) {
    $userId = htmlspecialchars($_SESSION['id']);
    $reqUser = $BDD->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $reqUser->execute(array($userId));
    $infoUser = $reqUser->fetch();
}
