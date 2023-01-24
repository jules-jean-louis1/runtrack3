<?php
if (isset($_POST['username'])) {
    $db = new PDO('mysql:host=localhost;dbname=runtrack3', 'root', '');
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
var_dump($_POST);
?>

<form action="register.php" method="post" id="formLogin">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button type="button" id="submit-log">Login</button>
</form>