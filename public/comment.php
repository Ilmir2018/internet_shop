<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';
$config = include CONFIG_DIR . "db.php";

$con = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbName']);
$sql = "SELECT * FROM comment;";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_all($res, MYSQLI_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    $name = $_POST['name'];
    if (!empty($content) && !empty($name)) {
        $con = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbName']);
        $sql = "INSERT INTO comment (name, content) VALUES ('$name', '$content');";
        $res = mysqli_query($con, $sql);
    }
    redirect('/comment.php'); //Делаем редирект на эту же страницу, чтобы не происходило повторной отправки данных.
}

include TEMPLATES_DIR . 'comment.php'; //Подключаем шаблон для вывода комментариев