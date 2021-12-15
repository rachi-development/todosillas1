<?php
$db_host="127.0.0.1:3306"; //localhost server 
$db_user="debianDB";	//database username
$db_password="debianDB";	//database password   
$db_name="todosillas";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



