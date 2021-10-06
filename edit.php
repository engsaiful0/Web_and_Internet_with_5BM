<?php
include 'connection.php';
$id=$_POST['id'];
$studentName = $_POST['studentName'];
$roll = $_POST['roll'];
$gender = $_POST['gender'];

$update_query="UPDATE WEB set studentName='$studentName',roll='$roll',gender='$gender' WHERE id='$id'";

$result=mysqli_query($connection,$update_query);

if($result)
{
    echo 'Data has been updated successfully';
}else{
    echo 'Update faiiled!!';
}
header('Location:registration.php');