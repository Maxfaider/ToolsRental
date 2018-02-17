<?php
session_start();
$account = null;
/**
 * Main
*/
require 'app/global/Application.class.php';
require 'app/useful/util.functions.php';
require 'app/controller/viewcontroller/MannagerView.class.php';
if(isset($_SESSION['account'])) {

    require 'app/model/tools_rental/Person.class.php';
    require 'app/model/tools_rental/Client.class.php';
    require 'app/model/tools_rental/Employee.class.php';
    require 'app/model/tools_rental/Account.class.php';
    require 'app/model/tools_rental/TypePerson.class.php';

    $account = unserialize($_SESSION['account']);
}
/* ----*/
/*require 'app/dao/Database.class.php';
require 'app/dao/connect/connection.class.php';
require 'app/dao/connect/MySQLi_connect.class.php';
require 'app/dao/Dao.class.php';
require 'app/dao/ClientDao.class.php';
require 'app/dao/AdminDao.class.php';
require 'app/dao/ToolDao.class.php';
require 'app/dao/AccountDao.class.php';*/

$application = Application::getInstance();

$url = isset($_GET['url']) ? $_GET['url']:"home";

$arguments = explode("/", $url);
$managerView = new MannagerView();

if(count($arguments) == 1) {
    $arguments[1] = '';
}

$managerView->loadView($arguments[0], $arguments[1]);


/*$clientBase = new DataBase('Mysql', 'app/config/databases.ini');
$connection = new MySQLi_connect($clientBase);

$accountDao = new AccountDao();
$accountDao->setConnection($connection);
echo $accountDao->find(0, 'Maxfaider', 'fallout4');*/


/*$array_client = array($client->getDocument(),
$client->getName(), $client->getLastName(), 
$client->getAddress(), $client->getEmail(),
$client->getCompany(), $client->getPatrimony());*/

/*$connection->open();
$stmt = $connection->prepare('select id from category');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$connection->close();
var_dump($result);

$client = new Client();
$client->setDocument('123456');
$client->setName('Soto');
$client->setLastName('Moto');
$client->setAddress('bertp');
$client->setEmail('');
$client->setCompany('');
$client->setPatrimony('');

$em = new Employee();
$em->setDocument('123456');
$em->setName('Soto');
$em->setLastName('Moto');
$em->setAddress('bertp');
$em->setEmail('');
$em->setCode('02565891');

$account = new Account();
$account->setUser('Mortal');
$account->setPassword('thofin');
$account->setPerson($em);
*/








