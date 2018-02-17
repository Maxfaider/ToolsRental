<?php

require '../model/RegisterClient.class.php';

require '../model/rent/Account.class.php';
require '../model/rent/Category.class.php';
require '../model/rent/Person.class.php';
require '../model/rent/Client.class.php';
require '../model/rent/Employee.class.php';
require '../model/rent/Tool.class.php';

require '../security/Injection/ContentValues.class.php';
require '../security/Injection/Filter.class.php';
require '../security/Injection/FilterSQL.class.php';
require '../security/Injection/FilterXSS.class.php';
require '../security/Injection/Pipe.class.php';

require '../dao/connect/Connection.class.php';
require '../dao/connect/MySQLi_connect.class.php';
require '../dao/Dao.class.php';
require '../dao/AccountDao.class.php';
require '../dao/AdminDao.class.php';
require '../dao/ClientDao.class.php';
require '../dao/ToolDao.class.php';
require '../dao/DaoFactory.class.php';