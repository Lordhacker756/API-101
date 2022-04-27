<?php

include("token.php");

if(!isset($status)){
//Checking if data to be inserted is sent as post
if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Phone']) && isset($_POST['Date']) && isset($_POST['Choice'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Date = $_POST['Date'];
    $Choice = $_POST['Choice'];

    mysqli_query($con, "INSERT INTO `Booking Form`( `Name`, `Email`, `Phone`, `Date`, `Choice`) VALUES ('$Name','$Email','$Phone','$Date','$Choice')");
    $status='true';
    $data="Data Inserted";
    $code="6";
}

else
{
    $status="true";
    $data="Provide";
    $code="7";
}

}
?>