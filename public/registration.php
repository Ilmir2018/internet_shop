<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';

$success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['login'];
    $password = $_POST['password'];
    getConnection();
    $bd = "INSERT INTO users (login, password) VALUES ('$username', '$password')";
    execute($bd);
    $success = true;
    if ($success) {
        session_start();
        $_SESSION['name'] = $_POST['login'];
        redirect("/congratulation.php");
    }
    $message = 'Неправильная пара логин/пароль.';
}
render("registration", ['message' => $message]);