<?php
session_start();
$conn=mysqli_connect("localhost","root","","leave");
if(!$conn){
	
	die("Sorry ".mysqli_connect_error());
}
//if(isset($_POST["submit"]))
//{

	$n=$_POST['name'];
	if($n===''){
		
	echo "enter fill your full form";}
		//header("Location: index.php");}
	//echo $n;
	$f=$_POST['fname'];
	//echo $f;
	$r=$_POST['rollno'];
	//echo $r;
	$e=$_POST['email'];
	//echo $e;
	$p=$_POST['password'];
	$c=$_POST['contactno'];
	$h=$_POST['hostelname'];
	$i=$_POST['img'];
	
	//$password=$_POST['password'];
	
	/*$sql="Select * from signuphost where rollno='".$rollno."' and password='".$password."'";
	
	$execute=mysqli_query($conn,$sql);
	
	if(!$execute)
		die(mysqli_error($conn));
	if(mysqli_num_rows($execute)>0){
		die("User Already Registered Please Login To Continue");
	}*/
	
	$zql="insert  into signuphost (name,fname,rollno,email,password,contactno,hostelname,img) values('".$n."','".$f."','".$r."','".$e."','".$p."','".$c."','".$h."','".$i."')";
	
	$s=mysqli_query($conn,$zql);
	
	if(!$s)
		die(mysqli_error($conn));
	else
	{$_SESSION['user']=$r;
		header("Location: welcome.php");
	}
	//echo $_SESSION['user'];
	
	//mkdir('user/'.$email);
	//header("Location: welcome.php");
//}

?>