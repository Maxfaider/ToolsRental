<?php

class MySQLi_connect implements Connection {

    private $_dataBase;
    private $_mysql;

    public function __construct(Database $dataBase) {
        $this->_dataBase = $dataBase;
    }

    public function open(): bool {
        try {
            $this->_mysql = new PDO('mysql:host='. $this->_dataBase->host.
                ';dbname='. $this->_dataBase->schema, 
                $this->_dataBase->username, $this->_dataBase->password);

        } catch(PDOException $e) {
            return false;
        }
        return true;
    }

    public function prepare(string $sql): PDOStatement {
        return $this->_mysql->prepare($sql);
    } 

    public function close() {
        $this->_mysql = null;
    }

}