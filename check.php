<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("admin2",$con);
if(isset($_POST['send']))
{
$a=$_POST['email'];
$b=$_POST['pass'];
$login=mysql_query("select * from login where username='$a' and password='$b'");
$row=mysql_fetch_array($login);
if(mysql_num_rows($login) !=0)
{
	
	$_SESSION['email']=$_POST['email'];
	header("location:home.html");
}





}


?>