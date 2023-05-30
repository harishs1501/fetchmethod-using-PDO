<?php
$server="localhost";
$uname="root";
$pwd="";
$db="uk2";

$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
$query="select * from log";
$stmt=$con->prepare($query);
$stmt->execute();
$row=$stmt->fetchAll();
echo"<table><tr><th>id</th>
                <th>name</th>
                <th>password</th></tr>";
	foreach ($row as $value)
	{
		$id=$value[0];
		$name=$value[1];
		$password=$value[2];
		echo"<tr><td>".$id."</td>";
		echo"<td>".$name."</td>";
		echo"<td>".$password."</td>";
		echo"</tr>";
	}
	echo"</table>";
	?>