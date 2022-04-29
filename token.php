<?php
//Including database information
include('db.php');
header('Content-Type:application/json');

//Checking if apikey/Token is passed along with the request
if (isset($_GET['token'])) {
    //This syntax prevents db hacking by converting any executable script passed as input into plain string
    $token = mysqli_real_escape_string($con, $_GET['token']);

    //Check if the token exits and store the rows as an object
    $checkTokenRes = mysqli_query($con, "select * from api_token where token='$token'");
    //Basically telling get all the rows which has the value of token column as the one obtained from the get request

    //If token was found ie number of rows are more than one
    if (mysqli_num_rows($checkTokenRes) > 0) {
        //Fetch the data in the row of token
        $checkTokenRow = mysqli_fetch_assoc($checkTokenRes); //All the rows that have the required token value in the token column present in the CheckTokenRes object are converted to an associative array

        // If the status colum is 1 then api is activated and correct
        if($checkTokenRow['status']==1)
        {
         // The token was found, and it's status is active
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
