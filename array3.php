<?php
$firstname="shubham";
$lname="maurya";
$email="shubham@gmail.com";
$newarray=compact("firstname","lname","email");
echo "<pre>";
print_r($newarray);

//extract:yah array ke andar di gayi key ko variable me change kerta hai jisko hum echo ke saath print kara 
//sakte hai .
//compact(): yah diye gaye variable ko array ke andar key ke formate me orint kara hai.