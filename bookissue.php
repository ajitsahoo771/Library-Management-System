<?php




$con=mysql_connect("localhost","root","");
mysql_select_db("project2",$con);
$a=$_POST['reg'];
$b=$_POST['bn'];
$c=$_POST['doi'];
$d=$_POST['doe'];
if(isset($_POST['submit']))
		{		
			$in=mysql_query("insert into iss (regdno,bookname,dos,dor)values('$a','$b','$c','$d')");
			if($in)
			header("location:addbooks.html");
			echo "print insert successfull";
		}





?>