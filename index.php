<?php
$conn=mysqli_connect('localhost:3306','root','','app2021');
$res=mysqli_query($conn,"select * from student");

?>
<a href="">Add Record</a>
<table border="1" >
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
</tr>
<?php while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['email']?></td>
<td><a href="">Edit</a>&nbsp;
<td><a href="delete.php?id="<?php echo $row['id']?>">Delete</a>
</tr>
<?php } ?>
</table>