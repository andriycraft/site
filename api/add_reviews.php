<?php


if($_GET['username'] == ""){
    header('HTTP/1.0 400 Bad Request');
    die('Нікнейм не може бути пустим');
}

if(strlen($_GET['username']) > 16){
    header('HTTP/1.0 400 Bad Request');
    die('Нікнейм занадто довгий');
}

if(strlen($_GET['username']) < 3){
    header('HTTP/1.0 400 Bad Request');
    die('Нікнейм занадто короткий');
}

if($_GET['text'] == ""){
    header('HTTP/1.0 400 Bad Request');
    die('Текст не може бути пустим');
}

if(strlen($_GET['text']) < 20){
    header('HTTP/1.0 400 Bad Request');
    die('Текст занадто короткий');
}

if(strlen($_GET['text']) > 350){
    header('HTTP/1.0 400 Bad Request');
    die('Текст занадто довгий');
}

if($_GET['stars'] < 0){
    header('HTTP/1.0 400 Bad Request');
    die('Неприпустима оцінка');
}

if($_GET['stars'] == 0){
    header('HTTP/1.0 400 Bad Request');
    die('Неприпустима оцінка');
}

if($_GET['stars'] > 5){
    header('HTTP/1.0 400 Bad Request');
    die('Оцінка не може бути більше 5');
}

if(!isset($_GET['stars'])){
    header('HTTP/1.0 400 Bad Request');
    die('Вам треба вказати оцінку');
}

$username = $_GET['username'];
$text = $_GET['text'];
$stars = $_GET['stars'];

$content = "Нікнейм: " . $username . " Текст: " . $text . " Оцінка: " . $stars . " \n";
$file = "serverdata.txt";
$fh = fopen($file, "a");
fwrite($fh, $content);
fclose($fh);

echo 'Відгук був відправлений на модерацію';