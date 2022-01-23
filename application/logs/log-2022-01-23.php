<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-23 21:55:33 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\application\migrations\045_alter_core_taskmail.php(37): ActiveRecord\Model::table()
#8 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(306): Migration_Alter_core_taskmail->up()
#9 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(344): CI_Migration->version('061')
#10 C:\xampp\htdocs\dtsys\application\controllers\Migrate.php(18): CI_Migration->latest()
#11 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(532): migrate->now('install', 'effe0163-5b82-4...')
#12 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#13 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 21:55:33 --> 404 Page Not Found: Assets/blueline
ERROR - 2022-01-23 21:55:33 --> 404 Page Not Found: Assets/blueline
ERROR - 2022-01-23 21:56:02 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\application\migrations\045_alter_core_taskmail.php(37): ActiveRecord\Model::table()
#8 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(306): Migration_Alter_core_taskmail->up()
#9 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(344): CI_Migration->version('061')
#10 C:\xampp\htdocs\dtsys\application\controllers\Migrate.php(18): CI_Migration->latest()
#11 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(532): migrate->now('install', 'effe0163-5b82-4...')
#12 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#13 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 21:56:33 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\application\migrations\045_alter_core_taskmail.php(37): ActiveRecord\Model::table()
#8 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(306): Migration_Alter_core_taskmail->up()
#9 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(344): CI_Migration->version('061')
#10 C:\xampp\htdocs\dtsys\application\controllers\Migrate.php(18): CI_Migration->latest()
#11 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(532): migrate->now('install', 'effe0163-5b82-4...')
#12 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#13 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 21:56:44 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\application\migrations\045_alter_core_taskmail.php(37): ActiveRecord\Model::table()
#8 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(306): Migration_Alter_core_taskmail->up()
#9 C:\xampp\htdocs\dtsys\system\libraries\Migration.php(344): CI_Migration->version('061')
#10 C:\xampp\htdocs\dtsys\application\controllers\Migrate.php(18): CI_Migration->latest()
#11 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(532): migrate->now('install', 'effe0163-5b82-4...', 'redirect')
#12 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#13 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 21:56:50 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#14 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 21:58:06 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#14 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 21:58:29 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#14 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 23:02:58 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#14 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 23:03:00 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#14 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 23:03:01 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#14 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 23:03:24 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#14 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 23:03:29 --> Severity: error --> Exception: PDOException: could not find driver in C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 C:\xampp\htdocs\dtsys\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 C:\xampp\htdocs\dtsys\system\core\CodeIgniter.php(518): My_Controller->__construct()
#12 C:\xampp\htdocs\dtsys\index.php(310): require_once('C:\\xampp\\htdocs...')
#13 {main} C:\xampp\htdocs\dtsys\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2022-01-23 23:17:57 --> 404 Page Not Found: Install/index
ERROR - 2022-01-23 23:27:08 --> Installation script has been started!
