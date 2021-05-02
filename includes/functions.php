<?php //functions.php

//$dbhost  = 'localhost';
//$dbname  = 'eoifilms';
//$dbuser  = 'root';
//$dbpass  = '';

//$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//$connection = new PDO('sqlite:eoifilms.db');
//if ($connection->connect_error) die($connection->connect_error);

function queryMysql($query)
{
global $connection;
$result = $connection->query($query);
if (!$result) die($connection->error);
return $result;
}

function destroySession()
{
$_SESSION=array();

if (session_id() != "" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-2592000, '/');

session_destroy();
}

function sanitizeString($var)
{
global $connection;
$var = strip_tags($var);
$var = htmlentities($var);
$var = stripslashes($var);
return $connection->real_escape_string($var);
}
  
?>
