<?php
$server="localhost";
$uname="root";
$pwd="";
$db="uk2";
try
{
$name=$_POST['sname'];
$password=$_POST['pwd'];
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
$query="insert into login(name,password) values(?,?)";
$stmt=$con->prepare($query);
if($stmt->execute([$name,
                   $password]))
{
	
	echo"inserted successfully";
}
else
{
	echo"error";

}
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

?>

