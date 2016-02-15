<?php
class B extends A {
    protected $_login;
    
    public function __construct($name, $login) {
        parent::__construct($name);// вызов конструктора базового класса
        $this->_login=$login;
    }
    
    public function showDescription(){
        parent::showDescription();
        echo 'логин - '.$this->_login.'<br/>';
    }
    
}
