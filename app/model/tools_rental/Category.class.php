<?php

class Category {
    
    private $_id;
    private $_name;
    private $_description;

    public function __construct() {

    }

    public function setId(string $id) {
        $this->_id = $id;
    }

    public function setName(string $name) {
        $this->_name = $name;
    }

    public function description(string $description) {
        $this->_description = $description;
    }

    public function getId(): string {
        return $this->_id;
    }

    public function getName(): string {
        return $this->_name;
    }

    public function getDescription(): string {
        return $this->_description;
    }

}


?>