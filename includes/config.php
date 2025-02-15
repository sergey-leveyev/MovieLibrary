<?php
ob_start();
session_start();

date_default_timezone_set("Asia/Jerusalem");

try{
    $con = new PDO("mysql:dbname=movielibrary;host=localhost", "root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(PDOException $e){
    exit("Connection faild: " . $e->getMessage());
}
?>