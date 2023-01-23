<?php
include 'Connect.php';
$connect = new Connect();
$login = $connect->checkLogin();
var_dump($login);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script defer src='script.js'></script>
</head>
<body>
    <main>
        <article>
            <section>
                <button id="register">
                Register
                </button>
                <button id="login">
                Login
                </button>
                <div id="display-form">
                </div>
            </section>
        </article>
    </main>
</body>
</html>