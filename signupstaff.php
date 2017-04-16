<?php
session_start();
$conn=mysqli_connect("localhost","root","","leave");
if(!$conn){
	
	die("Sorry ".mysqli_connect_error());
}
	$n=$_POST['name'];
	$e=$_POST['email'];
	//echo $e;
	$p=$_POST['password'];
	$c=$_POST['contactno'];
	//$h=$_POST['hostelname'];
	$i=$_POST['img'];
	
	//$password=$_POST['password'];
	
	/*$sql="Select * from signuphost where rollno='".$rollno."' and password='".$password."'";
	
	$execute=mysqli_query($conn,$sql);
	
	if(!$execute)
		die(mysqli_error($conn));
	if(mysqli_num_rows($execute)>0){
		die("User Already Registered Please Login To Continue");
	}*/
	
	$zql="insert  into signupstaff (name,email,password,contactno,img) values('".$n."','".$e."','".$p."','".$c."','".$i."')";
	
	$s=mysqli_query($conn,$zql);
	
	if(!$s)
		die(mysqli_error($conn));
	else
	{
		header("Location:welcome.php");
	//echo $e;
	$_SESSION['user']=$e;}
	//echo $_SESSION['user'];
	
	//mkdir('user/'.$email);
	//header("Location: welcome.php");
//}

?>