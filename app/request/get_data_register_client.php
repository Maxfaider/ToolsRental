<?php

$json = isset($_POST['json']) ? $_POST['json'] : '';

if($json == '') 
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

    $json = json_decode($json, true);

    $clientBase = new DataBase('Mysql', '../config/databases.ini');
    $connection = new MySQLi_connect($clientBase);

    $client = new Client();
    $client->setDocument($json['document']);
    $client->setName($json['name']);
    $client->setLastName($json['lastName']);
    $client->setAddress($json['address']);
    $client->setEmail($json['email']);
    $client->setCompany($json['company']);
    $client->setPatrimony($json['patrimony']);

    $password = md5($json['password']);

    $account = new Account();
    $account->setUser($json['user']);
    $account->setPassword($password);
    $account->setPerson($client);

    $accountDao = new AccountDao();
    $accountDao->setConnection($connection);
    echo $accountDao->create($account); 
}

