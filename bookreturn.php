<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("project2",$con);
$a=$_POST['reg'];
$b=$_POST['bn'];
$c=$_POST['doi'];

if(isset($_POST['submit']))
		{		
			$in=mysql_query("insert into rtn (regdno,bookname,dortn)values('$a','$b','$c')");
			
			echo "print insert successfull";
			header("location:addbooks.html");
		}
?>