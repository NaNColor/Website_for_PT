<?php
$servername = "127.0.0.1";
$username = "root";
$password = "0512";
$dbName = "first";
$link = mysqli_connect($servername, $username, $password);
if (!$link) {
	die('Error:' . mysqli_error());
}
echo 'Goood!';

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";


if (!mysqli_query($link, $sql)) {
	echo 'Щас че-то не получилось';
}

echo "Че-то создалось";
mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbName);
echo 'Goood!';

$sql = "CREATE TABLE IF NOT EXISTS users(
  id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(15) NOT NULL,
  email VARCHAR(50) NOT NULL,
  pass  VARCHAR(20) NOT NULL
)";

if(!mysqli_query($link, $sql)) {
  echo "Не удалось создать таблицу Users";
}

echo "Какая-то таблица создалась";

$sql = "CREATE TABLE IF NOT EXISTS posts(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(20) NOT NULL,
    main_text VARCHAR(400) NOT NULL
  )";
  
if(!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу posts";
  }
echo "Какая-то таблица создалась 2";
mysqli_close($link);
echo "Ok";
?>
