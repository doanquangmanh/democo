<?php
$host = "localhost";
$userName = "root";
$passWord = "";
$database = "sql";

$conn = mysql_connect($host,$userName,$passWord,$database);

if(!$conn){
	echo "ket noi that bai";
}else{
	echo "Ket noi thanh cong";
}





