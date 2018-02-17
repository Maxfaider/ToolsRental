<?php

$query = isset($_POST['query']) ? $_POST['query'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';

if($query === '' && $type === '') 
    echo 'failure';
else {

    require '../dao/Database.class.php';
    require '../dao/connect/connection.class.php';
    require '../dao/connect/MySQLi_connect.class.php';
    require '../dao/Dao.class.php';
    require '../dao/ClientDao.class.php';
    require '../dao/AdminDao.class.php';
    require '../dao/AccountDao.class.php';

    require '../model/tools_rental/Person.class.php';
    require '../model/tools_rental/Client.class.php';
    require '../model/tools_rental/Employee.class.php';
    require '../model/tools_rental/Account.class.php';
    require '../model/tools_rental/TypePerson.class.php';

    $clientBase = new DataBase('Mysql', '../config/databases.ini');
    $connection = new MySQLi_connect($clientBase);

    if($type === 'document') {

        $clientDao = new ClientDao();
        $clientDao->setConnection($connection);
        echo $clientDao->find(0, $query);
    } else {

        $accountDao = new AccountDao();
        $accountDao->setConnection($connection);
        echo $accountDao->find(1, $query); 
    }
}