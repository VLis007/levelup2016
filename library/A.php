<?php
class A {
    protected $_name;
    protected static $_countObjects=0;
    
    public static function cntObj(){
        return self::$_countObjects;
    }
    
    public function __construct($name){
        $this->_name=$name;
        self::$_countObjects++;
    }
    
    public function showDescription(){
        echo 'NAME - '.$this->_name.'<br/>';
    }
    
    public function destruct(){
        self::$_countObjects--;
    }
    
    
}