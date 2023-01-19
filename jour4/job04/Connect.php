<?php

define("DB_HOST", 'localhost');
define("DB_NAME", 'js_jour4');
define('DB_CHARSET', 'utf8');
define("DB_USER", 'root');
define("DB_PASSWORD", '');


try {
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, DB_USER, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id, nom, prenom, email FROM users");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    json_encode($data);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>