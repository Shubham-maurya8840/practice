<?php 

$cookie_name="user";
$cookie_value="shubham maurya";

setcookie($cookie_name,$cookie_value,time()+(3600*24),"/");
?>

<html>
<body>
<?php echo $_COOKIE[$cookie_name]; 

?>
</body>
</html>