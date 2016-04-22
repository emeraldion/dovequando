<?php
	/**
	 *	Project EmeRails - Codename Ocarina
	 *
	 *	Copyright (c) 2008, 2015 Claudio Procida
	 *	http://www.emeraldion.it
	 *
	 */

switch ($_ENV['php_env'])
{
	case 'test':
		define("DB_ADAPTER", "mysqli");
		define("DB_USER", "root");
		define("DB_PASS", "root");
		define("DB_NAME", "dovequando_test");
		define("DB_HOST", "localhost");
		break;
	case 'travisci':
		define("DB_ADAPTER", "mysqli");
		define("DB_USER", "root");
		define("DB_PASS", "");
		define("DB_NAME", "dovequando_test");
		define("DB_HOST", "127.0.0.1");
		break;
	case 'prod':
  default:
    define("DB_ADAPTER", $_ENV['dovequando_db_adapter']);
    define("DB_USER", $_ENV['dovequando_db_user']);
    define("DB_PASS", $_ENV['dovequando_db_pass']);
    define("DB_NAME", $_ENV['dovequando_db_name']);
    define("DB_HOST", $_ENV['dovequando_db_host']);
}
define("DB_DEBUG", FALSE);

?>
