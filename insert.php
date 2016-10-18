<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("project3",$con);
$a=$_POST['bn'];
$b=$_POST['bc'];
$c=$_POST['ba'];
$d=$_POST['pr'];
$e=$_POST['rn'];
if(isset($_POST['add']))
		{		
			$in=mysql_query("insert into addbook (bookname,bookcode,author,price,rackno)values('$a','$b','$c','$d','$e')");
			echo "print insert successfull";
			header("location:addbooks.html");
		}
?>
		