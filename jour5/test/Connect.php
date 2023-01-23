<?php
class Connect
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=runtrack3', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            exit;
        }
    }

    public function checkLogin()
    {
        $query = $this->pdo->prepare('SELECT `login` FROM `users`');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return json_encode($result, JSON_PRETTY_PRINT);
    }
    public function register()
    {
        /* if (isset($_POST['username'])) {
            $query = $this->pdo->prepare('SELECT `login` FROM `users` WHERE `login` = :login');
            $query->execute([
                'login' => $_POST['username']
            ]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                echo 'Ce login est déjà utilisé';
                exit;
            }
        } */
        if (isset($_POST['username'])) {
            $query = $this->pdo->prepare('INSERT INTO `users` (`login`, `password`) VALUES (:login, :password)');
            $result = $query->execute([
                'login' => $_POST['login'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
            ]);
            if ($result) {
                header('HTTP/1.1 201 OK');
            }
            die();
        }
    }
}
