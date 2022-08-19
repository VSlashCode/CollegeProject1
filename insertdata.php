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
else
{
    echo"COnnection was successfulllll";
}
$sql="INSERT INTO `try1` ( `name`, `college`, `section`) VALUES ( 'Rutu1', 'Sangola1', 'Pandharpur1')";

$result=mysqli_query($conn,$sql);

if($result)
{
    echo " saccessfully done ";
}
else
{
    echo "HAVE A ERROR ";
}



?>