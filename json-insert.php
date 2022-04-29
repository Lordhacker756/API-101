<?php

include("token.php");

//Accepting POST Data As JSON
$json = file_get_contents('php://input');

//Checking if the API token is valid or not
if(!isset($status)){
//Check If the data is sent as json, the value of the $json will be 1 if the data was passed
    if(isset($json))
    {
        $data = json_decode($json,true);

        //Assigning them into variables
        $Name = $data['Name'];
        $Email = $data['Email'];
        $Phone = $data['Phone'];
        $Date = $data['Date'];
        $Choice = $data['Choice'];

        //Insert the data into the database
        mysqli_query($con, "INSERT INTO `Booking Form`( `Name`, `Email`, `Phone`, `Date`, `Choice`) VALUES ('$Name','$Email','$Phone','$Date','$Choice')");
        $status='true';
        $data="Data Inserted";
        $code="200";
    }

    else
    {
       $status="true";
       $data="Provide Some Data to be inserted";
       $code="7";
    }
}

else
{
    $status="true";
    $data="Please provide a valid API Key";
    $code="-1";
}


echo json_encode(["status" => $status, "data" => $data, "code" => $code]);
