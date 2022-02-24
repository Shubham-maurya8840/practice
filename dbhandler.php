<?php
include 'conn.php';
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	//echo $name;
	//echo $email;
	//$query="insert into student(name,email) values('$name','$email');";
	//$query="update student set name='amit' where id=1";
	$query="delete from student where id=5";
	if(mysqli_query($conn,$query)){
		echo "data inserted";
	}
	else{
		echo "data not inserted".mysqli_error($conn);
	}
	
