<?php
ini_set('display_errors', '0');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$request_method=$_SERVER["REQUEST_METHOD"];


$allData = json_decode(file_get_contents('php://input'), true);
 $name = $allData['name'];
 $number = $allData['number'];
 $dob = $allData['dob'];
$country = $allData['country'];
$state = $allData['state'];
$city = $allData['city'];
$isworkshop = $allData['isworkshop'];
$volunteer = $allData['volunteer'];
$duration = $allData['duration'];
$otherhelp = $allData['otherhelp'];


?>