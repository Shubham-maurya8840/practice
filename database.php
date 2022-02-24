<?php 

$conn=mysqli_connect('localhost:3306','root','','app2021');
$sql="select * from student";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
echo "<xmp>";
print_r($row);
}