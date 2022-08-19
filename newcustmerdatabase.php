<?php

// include 'database_conn.php';
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['submit']))
{
    $name=$_POST['cname'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $sql="insert into newcustmer(NAME,ADDRESS,CONTACT) values ('$name','$address','$contact')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Saved')</script>";
    } 
    mysqli_close($conn);
}

?>