<?php

if(isset($_POST['saveimage'])){
	$dir="upload";
	$filename=basename($_FILES['upload'] ['name']);
}


?>

<form id="frm-test" name="frm_test" method="post" enctype="multipart/form-data">
<input type="file" name="upload"/>
<input type="submit" value="saveimage"/>
</form>