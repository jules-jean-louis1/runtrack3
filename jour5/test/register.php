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
    <input type="text" name="username" id="username" placeholder="Username" class="bg-slate-200 border-1 border-slate-300 px-2 py-2 mx-2 rounded">
    <input type="password" name="password" id="password" placeholder="Password" class="bg-slate-200 border-1 border-slate-300 hover:border-slate-500 px-2 py-2 mx-2 rounded">
    <input type="password" name="password2" id="password2" placeholder="Confirm password" class="bg-slate-200 border-1 border-slate-300 hover:border-slate-500 px-2 py-2 mx-2 rounded">
    <button type="submit" class="px-4 py-2 mx-2 rounded bg-purple-400 hover:bg-purple-600 font-semibold text-slate-100">Register</button>
</form>