<?php
include 'conn.php';

?>
<html>
<head>
<style>
#outer
{
height:300px;
width:400px;
background:white;
margin:50px auto;
}
#header
{

background:black;
//padding-top:5px;
text-align:center;
color:white;
}
input{
width:100%;
font-size:30px;
}
</style>
</head>
<body>
<div id="outer">
<div id="header">
<h1> Insert Operation</h1>
</div>
<div id="inner">
<form method="post" action="dbhandler.php">
&nbsp;&nbsp;&nbsp;<input type="text" name="name"/></br></br>
&nbsp;&nbsp;&nbsp;<input type="email" name="email"/></br></br>
&nbsp;&nbsp;&nbsp;<input type="submit" value="submit" style="color:white; text-align:center; background:green;"/>
</form>
</div>
</div>
</body>
</html>