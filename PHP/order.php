<?php



    $connect=mysqli_connect('localhost','root','','WT_PROJECT');
    $query="INSERT INTO `ORDER_DETAILS` VALUES(?,?,?,?,?)";
    $stmt=mysqli_prepare($connect,$query);
    mysqli_stmt_bind_param($stmt,'sssss',$name,$email,$phone,$address,$pincode);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
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
<img src="order.png">

</center>

</body>

</html> 
