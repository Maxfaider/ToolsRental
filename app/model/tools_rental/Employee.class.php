<?php

class Employee extends Person {
    
    private $_code;

    public function __construct() {

    }

    public function setCode(string $code) {
        $this->_code = $code;
    }

    public function getCode() {
        return $this->_code;
    }

}

?>