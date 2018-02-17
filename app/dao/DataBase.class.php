<?php

class DataBase {
     
    public $host;
    public $port;
    public $schema;
    public $username;
    public $password;

    public function __construct(string $database, string $file) {
        if (!$settings = parse_ini_file($file, TRUE)) 
            throw new Exception('error file');
        $this->host = $settings[$database]['host'];
        $this->port = (!empty($settings[$database]['port'])) 
            ? $settings[$database]['port'] : '';
        $this->schema = $settings[$database]['schema'];
        $this->username = $settings[$database]['username'];
        $this->password = $settings[$database]['password'];
    }

    public function toString() {

    }
    
}