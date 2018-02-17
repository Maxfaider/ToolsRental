<?php

class Person {

    private $_document;
    private $_name;
    private $_lastName;
    private $_address;
    private $_email;

    public function __construct() {

    }

    public function setDocument(string $document) {
        $this->_document = $document;
    }

    public function setName(string $name) {
        $this->_name = $name;
    }

    public function setLastName(string $lastName) {
        $this->_lastName = $lastName;
    }

    public function setAddress(string $address) {
        $this->_address = $address;
    }

    public function setEmail(string $email) {
        $this->_email = $email;
    }

    public function getDocument(): string {
        return $this->_document;
    }

    public function getName(): string {
        return $this->_name;
    }

    public function getLastName(): string {
        return $this->_lastName;
    }

    public function getAddress(): string {
        return $this->_address;
    }

    public function getEmail(): string {
        return $this->_email;
    }

}

