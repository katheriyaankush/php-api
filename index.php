<?php 

include_once './config/config.php';
include_once './request.php';



$token = date("YmdHis").rand(11111,99999);
$cData=date("Y-m-d h:m:s");

$query = "INSERT INTO swa_dharm_table (id, phone, name, city, state,country,is_attend,is_help,is_volunteer,time_duration, dob , date_added) VALUES ('".$token."',".$number.",'".$name."', '".$city."', '".$state."','".$country."','".$isworkshop."','".$otherhelp."','".$volunteer."','".$duration."', '".$dob."', now())";


$result=$conn->query($query);


if ($result)
    {
        $data["message"] = "Successfully Registered ";
        $data["status"] = "Ok";
        }
    else
    {
    $data ='{  "error": {    "code": 400,     "message": "Already Exist" }}';
        $data = json_decode($data);
    }



   echo json_encode($data);

?>