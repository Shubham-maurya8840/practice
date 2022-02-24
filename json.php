<?php
$conn=mysqli_connect('localhost:3306','root','','app2021');
$resultset=mysqli_query($conn,"select * from student");
$json_array="data.json";
while($row=mysqli_fetch_assoc($resultset)){
	echo json_decode($json_array);
}


