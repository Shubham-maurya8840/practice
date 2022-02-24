<?php
?>

<html>
<head>
<style>
#outer
{
	height:150px;
	width:200px;
	background:skyblue;
	margin:50px auto;
	padding:20px;
}
</style>
</head>
<body>
<div id="outer">
<form method="post" action="handler.php">
Username:<input type="text" name="username"/></br></br>
Email:<input type="email" name="email"/></br></br>
<input type="submit" value="submit"/>
</form>
</div>
</body>
</html>