<?php
try{$dbuser = 'postgres';
$dbpass = 'abc123';
$host = 'localhost';
$dbname='postgres';
$connec = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);
}
catch (PDOException $e)
{
echo "Error : " . $e->getMessage() . "<br/>";
die();
} 
$query = "SELECT * FROM user_details where genderr='M'";
$connec->query($query);
echo $connec->errorCode();
?>