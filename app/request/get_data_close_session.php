<?php
session_start();

unset($_SESSION['account']);

require '../global/Application.class.php';
require '../useful/util.functions.php';

Application::$_file = '../config/application.json';
$application = Application::getInstance();
$response = $application->getURIBase();


echo $response;

