<?php

class Client extends Person {

    private $_company;
    private $_patrimony;

    public function __construct() {

    }

    public function setCompany(string $company) {
        $this->_company = $company;
    }

    public function setPatrimony(string $patrimony) {
        $this->_patrimony = $patrimony;
    }

    public function getCompany(): string {
        return $this->_company;
    }

    public function getPatrimony(): string {
        return $this->_patrimony;
    }
    
}