<?php

class Tool {

    private $_id;
    private $_name;
    private $_price;
    private $_imagePath;    
    private $_category;

    public function __construct() {

    }
 
    public function setId(string $id) {
        $this->_id = $id;
    }

    public function setName(string $name) {
        $this->_name = $name;
    }

    public function setPrice($price) {
        $this->_price = $price;
    }

    public function setImagePath(string $imagePath) {
        $this->_imagePath = $imagePath;
    }

    public function setCategory(string $category) {
        $this->_category = $category;
    }

    public function getId(): string {
        return $this->_id; 
    }

    public function getName(): string {
        return $this->_name;
    }

    public function getPrice() {
        return $this->_price;
    }

    public function getImagePath(): string {
        return $this->_imagePath;
    }

    public function getCategory(): string {
        return $this->_category;
    }

}
