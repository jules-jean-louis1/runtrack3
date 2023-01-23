<?php

class Connect
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=jour5', 'root', '');
    }

    public function verifyUser($login) 
    {
        $query = $this->pdo->prepare("SELECT login FROM utilisateurs WHERE login = :login");
        $query->execute([
            'login' => $login
        ]);
        $result = $query->fetch();
        for ($i = 0; $i < count($result); $i++) {
            if ($result[$i] == $login) {
                return true;
            } else {
                return false;
            }
        }
        
    }
    public function verifyLogin()
    {
        $login = array();
        $query = $this->pdo->prepare("SELECT login FORM utilisateurs");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            $login[] = $result;
        }
        return ;

    }
    public function register($login, $password)
    {
        $query = $this->pdo->prepare("INSERT INTO utilisateurs (login, password) VALUES (:login, :password)");
        $query->execute([
            'login' => $login,
            'password' => $password
        ]);
    }
}

?>