<?php
abstract class AbstractPage implements Rendereble{
    protected $_head;
    protected $_siteName;
    protected $_content;
    public function __construct($head,$siteName,$content) {
        $this->_content=$content;
        $this->_head=$head;
        $this->_siteName=$siteName;
    }
    abstract public function render();
}
