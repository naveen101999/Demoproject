<?php 
// DB credentials.
define('DB_HOST','rds14.citsfkgji6tl.us-east-1.rds.amazonaws.com:3306');
define('DB_USER','admin');
define('DB_PASS','Naveen1999');
define('DB_NAME','clientmsdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
