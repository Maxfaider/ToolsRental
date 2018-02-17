<?php 

class Application {

    public static $_file = "app/config/application.json";
    private static $_application;

    private $_info;
    private $_uriBase;
    private $_uriPages;
    private $_uriHtml;

    private function __construct() {
        $this->loadinfo();
    }
    
    public static function getInstance() {
        if(self::$_application == null) {
           self::$_application = new Application();
        }
        return self::$_application; 
    }

    private function loadinfo() {
        $this->_info = loadFile(self::$_file);
        if($this->_info) {
            $this->_uriBase = $this->_info['protocol']."://".$this->_info['domain'].
            "/"; 
            $this->_uriPages = $this->_uriBase."app/view/";
            $this->_uriHtml = "app/view/html/";
        }
    }

    public function getURIPages() {
        return $this->_uriPages;
    }

    public function getURIBase() {
        return $this->_uriBase;
    }

    public function getURIHtml() {
        return $this->_uriHtml;
    }

    public function getInfo(string $key) {
        return $this->_info[$key];
    }

}
