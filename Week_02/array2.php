<?php
// 2 Dimensional Arrays in PHP
$sales_2023= [
    "Jan" => 123,
    "Feb" => 123,
    "Jan" => 123,
    "March" => 123,
];

$sales_2024= [
    "Jan" => 23,
    "Feb" => null,
    "Jan" => null,
    "March" => null,

];
// 2D Array
// $sales = [$sales_2023,$sales_2024];
//3D Array
$sales = [2023 => $sales_2023,2024 =>$sales_2024];
var_dump($sales);

$gameboard =[['','',''],['','',''],['','','']];
$gameboard [0][0]='x';
$gameboard [0][1]='o';