<?php
session_start();
if(isset($_SESSION)){
	if($_SESSION['user']!=true)
	header("Location:index.php");
}
echo "Hello ".$_SESSION['user']."<br>";

//echo "Hello ".$_SESSION['user2']."<br>";
echo session_status();
echo "<a href='logout.php'>Logout</a>";
?>
<!--<a href="edit profile">edit profile</a>-->