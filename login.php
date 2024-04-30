<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title> Климов Р.А.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1> Войти </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" class="login-page" action="/login.php">
                <p class="text-left">Login</p>
                <div class="row form__reg"><input class="form" type="text" name="login" placeholder="Login"></div>
                <p class="text-left">Password</p>
                <div class="row form__reg"><input class="form" type="password" name="password" placeholder="password"></div>
                <button type="submit" class="btn__reg" name="thebutton">Продолжить</button>
            </div>
        </div>
    </div>

</body>
</html>
<?php
require_once('bd.php');
if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}
$link = mysqli_connect('127.0.0.1', 'root', '0512', 'first');
if (!$link) {
    die("Ошибка подключения: " . mysqli_connection_error());
  }
if (isset($_POST['thebutton'])) {
    $username = $_POST['login'];
    $password = $_POST['password'];
    if (!$username || !$password) die ('Пожалуйста введите все значения!');
    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$password'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: profile.php');
    } else {
        echo "не правильное имя или пароль";
    }
  }
?>
