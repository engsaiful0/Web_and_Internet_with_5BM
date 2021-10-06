<?php
$serverName='localhost';
$userName='root';
$password='';
$database='5bm';

$connection=new mysqli($serverName,$userName,$password,$database);
//print_r($connection);
if($connection->connect_error)
{
    die("Error is".$connection->connect_error);
    // exit();
}
?>