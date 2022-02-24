<?php
$conn=mysqli_connect("localhost:3306","root","","app2021");
$query=mysqli_query($conn,"select * from user");
?>

<table border="2">
<tr>
<th>id</th>
<th>Name</th>
<th>Email</th>
<th>Delete</th>
<th>Edit</th>
</tr>
<tr>
<?php while($row=mysqli_fetch_assoc($query)){ ?>
<td><?php echo $row["id"];?> </td>
<td><?php echo $row["Username"];?> </td>
<td><?php echo $row["Email"];?> </td>
<td><a href="Delete.php">Delete</a>
<td><a href="Edit.php">Edit</a>
</tr>
<?php }?>
</table>