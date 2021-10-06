<?php
$id=$_REQUEST['id'];
include 'connection.php';
$delete_query="DELETE FROM web WHERE id='$id'";
if(mysqli_query($connection,$delete_query))
{
    echo 'Data has been deleted successfully';
}else
{
    echo 'Failed!';
}
header('Location:registration.php');

//print_r($id);
