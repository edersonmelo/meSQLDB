<?php
/**
 * meSQLDB Open Source Project - http://www.edersonmelo.com/ 
 *
 * @filesource  connPDO.php
 * @package     meSQLDB
 * @copyright   2014, meSQLDB 
 * @link        http://www.edersonmelo.com
 *
 * @internal revisions
 * @since 1.0.0
 * 
 */
class connPDO{
    static $conn;
    public function __construct() {}

    public static function open()
    {
		if(!isset($conn)){
			
			DEFINE('USER', 'user');
			DEFINE('PASS', 'password');
			DEFINE('DATA', 'db');
			DEFINE('HOST', 'localhost');
			DEFINE('TYPE', 'mysql');
			
			$user  = USER;
			$pass  = PASS;
			$name  = DATA;
			$host  = HOST;
			$type  = TYPE;

			// descobre qual o tipo (driver)
			// de banco de dados a ser utilizado
			switch ($type)
			{
				case 'mysql':
					$conn = new PDO("mysql:host=$host;dbname=$name;charset=latin1", $user, $pass);
					break;
				case 'pgsql':
					$conn = new PDO("pgsql:dbname={$name};user={$user}; password={$pass};host=$host");
					break;
				case 'sqlite':
					$conn = new PDO("sqlite:{$name}");
					break;
				case 'ibase':
					$conn = new PDO("firebird:dbname={$name}", $user, $pass);
					break;
				case 'oci8':
					$conn = new PDO("oci:dbname={$name}", $user, $pass);
					break;
				case 'mssql':
					$conn = new PDO("mssql:host={$host},1433;dbname={$name}", $user, $pass);
				break;
			}

		}

		return $conn;
    }
}
?>