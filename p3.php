<?php
// $json='{"name":"shubham","lname":"maurya","email":"shubham@gmail.com"}';
// var_dump(json_decode($json,true));

// $arr=['name'=>'shubham','lname'=>'maurya','email'=>'shubham@gmail'];
// echo json_encode($arr,1);

$arr='{"name":"shubham","lname":"maurya","email":"shubham@gmail"}';
var_dump(json_decode($arr,0));