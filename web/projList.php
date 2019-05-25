<?php
session_start();
try
{
$user = 'angelopablo';
$password = 'pablo014';
$db = new PDO('pgsql:host=localhost;dbname=mydb', $user, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
echo 'Error!: ' . $ex->getMessage();
die();
}
?>