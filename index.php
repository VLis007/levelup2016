<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function __autoload($class_name){
                $file='./library/'.$class_name.'.php';
                if(file_exists($file)){
                    include_once $file;
                }
            }
//            $obj=new B('test','admin');
//            $obj->showDescription();
//            echo 'кол-во обьектов '.$obj->cntObj().'<br/>';
            if(array_key_exists('admin', $_GET)){
                $page=new AdminPage($head, $siteName, $content);
            }
        ?>
    </body>
</html>
