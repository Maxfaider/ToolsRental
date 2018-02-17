<?php

class ContentValues {

    private $_contents; 
    private $_size;

    public function __construct() {
        $_contents = array();
    } 

    public function put(string $key, $values) {
        $this->_contents[$key] = $values;
        $this->_size ++;
    }

    public function getValue(string $key) {
        $this->__construct[$key];
    }

    public function size(): int {
        return $this->_size;
    }

}


?>