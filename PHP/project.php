<?php
/*$conn=mysqli_connect("localhost","root","","wtproject");
if($conn)
{
   echo "connection successful";
}
else{
    echo "connection failed";
}
//$query="CREATE DATABASE `wtproject`";
//$query1="CREATE TABLE `ORDER_DETAILS`(`NAME` CHAR(20),`EMAIL` CHAR(20),`PHONENUMBER` CHAR(20),`ADDRESS` CHAR(50),`PINCODE` CHAR(6),`PAYMENT TYPE` CHAR(20))";
mysqli_query($conn,$query1);
?>*/
   $conn=mysqli_connect('localhost','root','','wtproject');
    $query="INSERT INTO `ORDER_DETAILS` VALUES(?,?,?,?,?,?)";
    $stmt=mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($stmt,'ssssss',$name,$email,$phone,$address,$pincode,$payment);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $payment=$_POST['payment'];
    mysqli_stmt_execute($stmt);
?>
<html>
<body>
<center style="color:blue;padding: top 10px;" >
<?php 
session_start();
$_SESSION["name"]=$_POST['name'];
$_SESSION["thank"]="Thank You!";
echo $_SESSION["name"]." " ."THANKS FOR PLACING ORDER";
?>
<br>
<img src="success.gif">
</center>
</body>
</html>

