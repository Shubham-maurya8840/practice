<?php
$a='red';
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
//in extract() function has 3 parameter Suchas: 1.array_name 2.array_rules 3. prefix 
extract($my_array,EXTR_PREFIX_SAME,"test");
echo "value of a : $a </br>";
echo "value of a : $test_a </br>";
echo "value of b : $b </br>";
echo "value of c : $c </br>";