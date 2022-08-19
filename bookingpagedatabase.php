<?php


// include 'database_conn.php';
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['submit']))
{
    // $bookingids=$_POST['booking_id'];
    $custids=$_POST['cust_id'];
    $models=$_POST['model'];
    $types=$_POST['type'];
    $colors=$_POST['color'];
    $finalprices=$_POST['finalprice'];
    $advances=$_POST['advance'];
    $deleverydates=$_POST['deleverydate'];
    $sql="insert into booking_custmer(cust_id,model,type,color,finalprice,advance,deleverydate)values('$cust_ids','$models','$types','$colors','$finalprices','$advances','$deleverydates')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Saved')</script>";
    }
    mysqli_close($conn);
}
?>