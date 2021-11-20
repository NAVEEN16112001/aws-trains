<?php
session_start();

$uname=$_POST['name'];
$pass=$_POST['password'];

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"userregister") or die("cannot select db");

$tbl_name="usertable"; // Table name



$sql="SELECT * FROM $tbl_name WHERE name='$uname' and password='$pass'";
echo "$sql";

$result=mysqli_query($con,$sql) ;

//$row=mysql_fetch_array($result);

//echo "\n\n ..nam..".$row['f_name']."\n\n ..pass..".$row['password'];

if(mysqli_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:login.php"); //
}
else
{
	$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header("location:index.php");    //
}

?>

	