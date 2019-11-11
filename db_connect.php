<?php
$host="localhost";
$user="root";
$pass="";
$db="bharat";
$conn=new mysqli($host,$user,$pass,$db);
if(!$conn)
{
    die($conn->error);
 }
?>