<?php
if (isset($_POST['username'])) {
    $db = new PDO('mysql:host=localhost;dbname=runtrack3', 'root', '');
    $query = $db->prepare('SELECT COUNT(*) FROM `users` WHERE `login` = :login');
    $query->execute([
        'login' => $_POST['username'],
    ]);
    $result = $query->fetch();
    if ($result[0] > 0) {
        header('Content-Type: application/json');
        echo json_encode(['taken' => true]);
        die();
    }
    $query = $db->prepare('INSERT INTO `users` (`login`, `password`) VALUES (:login, :password)');
    $result = $query->execute([
        'login' => $_POST['username'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
    ]);
    if ($result) {
        header('HTTP/1.1 201 OK');
    }
    die();
}

?>
<form action="register.php" id="register-form" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="password" name="password2" id="password2" placeholder="Confirm password">
    <button type="submit">Register</button>
</form>