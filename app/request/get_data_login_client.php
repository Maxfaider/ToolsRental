<?php 
session_start();

$json = isset($_POST['json']) ? $_POST['json'] : '';

if($json == '') 
    echo '{"state": "none", "uri":"", "code":""}';
else {

    require '../global/Application.class.php';
    require '../useful/util.functions.php';
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

    $user = $json['user'];
    
    $password = md5($json['password']);

    $accountDao = new AccountDao();
    $accountDao->setConnection($connection);
    $accounts_array = $accountDao->toList(array('user', 'password'), array($user, $password));

    if(count($accounts_array) == 1) {

        $account = $accounts_array[0];

        if ($account->getState() == '1') {

            $clientDao = new ClientDao();
            $clientDao->setConnection($connection);
            $clients = $clientDao->toList(array('document'), array($account->getType()));

            $account->setPerson($clients[0]);
            
            $_SESSION['account'] = serialize($account);
            Application::$_file = '../config/application.json';
            $application = Application::getInstance();
            $uri = $application->getURIBase();

            echo '{"state": "Active", "uri":"'. $uri .'"}';

        } else if ($account->getState() == '2')
            echo '{"state": "Review", "uri":""}';
        else
            echo '{"state": "Locked", "uri":""}';
    } else
        echo '{"state": "none", "uri":""}';
}

