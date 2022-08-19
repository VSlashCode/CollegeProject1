<?php
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("sorry we failed to connect ");
}

?>