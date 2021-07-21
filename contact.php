<?php
// database connection code
$servername="localhost";
$username="root";
$password="";
$dbname="db_connect";

//create connection
$con = mysqli_connect("$servername","$username","$password","$dbname");

// check connection
if(!$con)
{
	die("Connection failed:".mysqli_connect_error());
}

if(isset($_POST['name'])){
	$txtname=$_POST['name'];
	$txtemail=$_POST['email'];
	$txtsub=$_POST['subject'];
	$txtmsg=$_POST['message'];

	$sql="INSERT INTO tbl_contact(name,email,subject,message) VALUES(`txtname`,`txtemail`,`txtsub`,`txtmsg`)";
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}


?>