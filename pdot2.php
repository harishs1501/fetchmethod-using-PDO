<?php
$server="localhost";
$uname="root";
$pwd="";
$db="uk2";
$name=$_POST['sname'];
$password=$_POST['pwd'];
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
$query="select*from log where name=:name;";
$stmt=$con->prepare($query);
$res=$stmt->execute([":name"=>$name]);
if($row=$stmt->fetchAll())
{
	foreach ($row as $key => $value)
	{
		$pwd=$value[2];

	}
	if($pwd==$password)
	{
		echo"<script>alert ('login succesful');</script>";
	}
	else
	{
	    echo"<script>alert ('password error');</script>";	
	}
}
else
{
	echo"<script>alert ('name error');</script>";	
	
}
?>