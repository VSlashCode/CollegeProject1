<?php
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
// include 'database_conn.php';
if(isset($_POST['submit']))
{
    $model=$_POST['model'];
    $type=$_POST['type'];
    $purchaseprice=$_POST['purchaseprice'];
    $finalprice=$_POST['finalprice'];
    $chessisno=$_POST['chessisno'];
    $purchasedate=$_POST['purchasedate'];
    $sql="insert into addstock(model,type,purchaseprice,finalprice,chessisno,purchasedata) values ('$model','$type','$purchaseprice','$finalprice','$chessisno','$purchasedate')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('recorded')</script>";
    }
    mysqli_close($conn);
}
?>