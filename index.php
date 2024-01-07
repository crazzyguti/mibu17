<?php


$randomArray = range("a", "z");

$data = "";


echo json_encode($randomArray);


header("Content-Type: application/json");
