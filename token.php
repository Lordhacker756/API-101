<?php
//Including database information
include('db.php');
header('Content-Type:application/json');

//Checking if apikey/Token is passed along with the request
if (isset($_GET['token'])) {
    $token = mysqli_real_escape_string($con, $_GET['token']);

    //Check if the token exits
    $checkTokenRes = mysqli_query($con, "select * from api_token where token='$token'");

    //If token was found
    if (mysqli_num_rows($checkTokenRes) > 0) {
        //Fetch the data in the row of token
        $checkTokenRow = mysqli_fetch_assoc($checkTokenRes);
        //If the status colum is 1 then api is activated and correct
        if($checkTokenRow['status']==1)
        {
         
        }

        //If the api is deactivated then return this
        else
        {
            $status = "true";
            $data = "API token provided is deactivated, contact Admin";
            $code = '3';
        }
    }

    //Token was not found
    else {
        $status = "true";
        $data = "Please provide a Valid API token";
        $code = '2';
    }
}
//Token was not passed
else {
    $status = "true";
    $data = "Please provide an API token";
    $code = '1';
}
