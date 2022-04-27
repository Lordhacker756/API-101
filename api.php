<?php

include('token.php');
//If there would have been error, token would set the status, or else if there is no error, the status will be null
if(!isset($status)){
    $sqlRes = mysqli_query($con,"SELECT * FROM `Booking Form`");
         
    //If database has data
    if(mysqli_num_rows($sqlRes)>0)
    {  $data=[];
       while($row=mysqli_fetch_assoc($sqlRes))
       {
           $data[]=$row;
       }
       $status="true";
       $code="5";
    }
    
    else
    {
       $status = "true";
       $data = "No data in the database to display";
       $code = '4';
    }
}



echo json_encode(["status" => $status, "data" => $data, "code" => $code]);
