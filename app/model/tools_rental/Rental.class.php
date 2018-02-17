<?php

class Rental {
    
    private $_id;
    private $_date;
    private $_client;
    private $_tools;

    private $_cachetotal;

    public function __construct() {
        $this->_date = date('h-i-s');
        $this->_tools = array();
        $this->_cacheTotal = 0;
    }

    public function getTotal(): double {
        $total = 0;
        foreach ($this->tools as $index) {
            $total += $index->getPrice() * $index->getQuantity();
        }
        $this->_cacheTotal = $total;
        return $total;
    }

    public function setId(string $id) {
        $this->_id = $id;
    }

    public function setTools(array $tools) {
        $this->_tools = $tools;
    }

    public function setClient(Client $client) {
        $this->_client = $client;
    }

    public function getTotal(): double {
        return $this->_cacheTotal;
    }

    public function getDate(): string {
        return $this->_date;
    }

    public function getClient(): Client {
        return $this->_client;
    }

    public function getTools(): array {
        return $this->_tools;
    }

    public function getId(): string {
        return $this->_id; 
    }
    
}