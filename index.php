<?php 

include_once './config/config.php';
include_once './request.php';

if($request_method === 'GET'){
$query = "select * from swa_dharm_table order by date_added desc";
$result=$conn->query($query);
$data = mysqli_fetch_all($result);

if($data)
{
$data = $data;
}
else {
$data ='{  "error": {    "code": 400,     "message": "Email and Password Wrong" }}';
$data =$data;
}

}
else{
$id = date("YmdHis").rand(11111,99999);
$query = "INSERT INTO swa_dharm_table (id, phone, name, city, state,country,is_attend,is_help,is_volunteer,time_duration, dob , date_added) VALUES ('".$id."',".$number.",'".$name."', '".$city."', '".$state."','".$country."','".$isworkshop."','".$otherhelp."','".$volunteer."','".$duration."', '".$dob."', now())";
$result=$conn->query($query);
if ($result)
    {
        $data["message"] = "Successfully Registered ";
        $data["status"] = "Ok";
        $data["id"]=$id;
        }
    else
    {
    $data ='{  "error": {    "code": 400,     "message": "Already Exist" }}';
        $data = json_decode($data);
    }
}

echo json_encode($data);


?>