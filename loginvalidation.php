<?php  

	require 'connection.php';

	$srn=$_POST['srn'];
	$password=$_POST['password'];
	$admin="admin";
	$student="student";
	$query="SELECT * FROM login where srn =$srn ";
	$result=mysqli_query($conn,$query) or die(mysql_error());
	
	$row=mysqli_fetch_array($result);
	if ($srn == $row[0] && $password == $row[3] && $row[1] == $admin) {
		header('location:admin.php');
		echo "sucess";
	}
	else if ($srn == $row[0] && $password == $row[3] && $row[1] == $student) {
		header('location:student.php');
		echo "student";
	}
	else if ($srn != $row[0] || $password !=$row[3] || $row[1] != $admin || $row[1] != $student) {
		header('location:home.php');

	}
?>