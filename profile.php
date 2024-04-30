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
    <div class="container nav_bar">
        <div class="row">
            <div class="col-2 nav_logo">  </div>
            <div class="col-10">
                <div class="nav_text">Информация обо мне!</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6"> 
                <h1>Цитата скажет обо мне больше чем я сам.</h1>
                <h3>Я <b>Климов Роман Александрович</b> и моя любимая цитата - "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum." </h2>
            </div>
            <div class="col-6"> 
                <!-- <div class="row"><img class="img_size" src="image/profileIMG.jpg" alt="The profile image"></div> -->
                <div style="margin-left: 80px;">
                    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <div class="profileIMG"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="item2"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="item3"></div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="title_photo"><p>Климов Р.А.</p></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="center-text">
                <button id="myButton">Click me!</button>
                <p id="demo" class="demoIMG"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1> Привет <?php echo $_COOKIE['User']?> </h1>
            </div>
            <div class="col-12">
            <form method="POST" class="login-page" action="profile.php">
                <p class="text-left">Пост</p>
                <div class="row form__post"><input class="form" type="text" name="title" placeholder="Title"></div>
                <textarea name="text" cols="30" rows="10" placeholder="Введите текст поста"></textarea>
                <p></p>
                <button type="submit" class="btn__reg" name="thebutton">Продолжить</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>
<?php
require_once('bd.php');
$link = mysqli_connect('127.0.0.1', 'root', '0512', 'first');
if (isset($_POST['thebutton'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text) die ("Заполните все поля");
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}
?>