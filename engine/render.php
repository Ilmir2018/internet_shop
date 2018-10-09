<?php
function render($template, $params=[], $uselayout = true){
    $content = renderTemplate($template, $params);
    if (!empty($_SESSION['user_name']) || !empty($_SESSION['name'])){
        $content = renderTemplate("layout/main", ['content' => $content]);
    }
    else{
        $content = renderTemplate("layout/main2", ['content' => $content]);
    }
    echo $content;
}
function renderTemplate($template, $params=[]){
    extract($params);
    ob_start(); //Включаем буфер
    include TEMPLATES_DIR . "{$template}.php";
    return ob_get_clean(); //Возвращает содержимое буфера и очищает его.
}