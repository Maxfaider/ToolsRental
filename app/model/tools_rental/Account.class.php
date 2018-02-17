<?php

class Account {
    
    private $_id;
    private $_user;
    private $_password;
    private $_state;
    private $_type;
    private $_person;

    public function __construct() {

    }

    public function setId(string $id) {
        $this->_id = $id;
    }

    public function setUser(string $user) {
        $this->_user = $user;
    }

    public function setPassword(string $password) {
        $this->_password = $password;
    }

    public function setState(string $state) {
        $this->_state = $state;
    }

    public function setType(string $type) {
        $this->_type = $type;
    }

    public function setPerson(Person $person) {
        $this->_person = $person;
        $this->_type = TypePerson::getType($person);
    }

    public function getId() {
        return $this->_id;
    }

    public function getUser() {
        return $this->_user;
    }

    public function getPassword() {
        return $this->_password;
    }

    public function getState() {
        return $this->_state;
    }

    public function getType() {
        return $this->_type;
    }

    public function getPerson() {
        return $this->_person;
    }

}