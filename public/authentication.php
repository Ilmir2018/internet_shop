<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';
$message = '';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user = getUserByNamePass($login, $password);
    if ($user){
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $_POST['login'];
        redirect("/helloUser.php");
    }
    $message = 'Неправильная пара логин/пароль. Зарегестрируйтесь пожалуйста';
}
render("authentication", ['message' => $message]);