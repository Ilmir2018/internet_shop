<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';
include WENDOR_DIR . 'funcImgResize.php';
unset($_SESSION['user_name']); //При выходе уничтожаем сессию.
session_destroy();
render("index");