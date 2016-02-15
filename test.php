<?php

function __autoload($class_name) {
    $file = './library/' . $class_name . '.php';
    if (file_exists($file)) {
        include_once $file;
    }
}
$head= <<<HTM
        <head>
    <meta charset="UTF-8">
    <title></title>
</head>
HTM;
if(array_key_exists('admin', $_GET)){
    $page=new AdminPage($head, 'mysite', 'hello');
}else{
    $page=new Page($head, 'megaCool', 'знаете ли вы..');
}
$page->render();