<?php

class DaoFactory {

    private function __construct() {

    }

    public static function createDaoInstance(string $daoName, 
                    string $connectName = 'mysqli'): Dao {
        
        return self::searchInstanceConnection($connectName, 
            self::searchInstanceDao($daoName));
    }

    private static function searchInstanceDao($daoName) {
        switch($daoName) {
            case 'client':  
                return new ClientDao();
            case 'Admin':
                return new AdminDao();
            case 'Tool':
                return new ToolDao();
            case 'rental':
                return new RentalDao();
            default:
                return new AccountDao();
        }
    }

    private static function searchInstanceConnection($connectName, Dao $dao) {
        switch($connectName) {
            case 'mysqli':  
                $dao->setConnection(new MySQLi_connect());
                return $dao;
        }
    }

}