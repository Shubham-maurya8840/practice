<?php
$conn=mysqli_connect("localhost:3306","root","","app2021");
$res=mysqli_query($conn,"select * from user");
?>

<table border="2">
<tr>
<th>id</th>
<th>username</th>
<th>email</th>
</tr>
<tr>
<?php while($row=mysqli_fetch_assoc($res)){ ?>
<td><?php echo $row["id"];?> </td>
<td><?php echo $row["Username"];?> </td>
<td><?php echo $row["Email"];?> </td>
</tr>
<?php }?>
</table>