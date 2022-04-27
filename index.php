<?php

$url = "https://3pixelsonline.in/api/index.php?key=dasfasdhfkashdf12312";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);
if (isset($result['status']) && $result['status'] == true){
?>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Date</td>
        <td>Choice</td>
    </tr>
    <?php 

    foreach($result['data'] as $list)
    {
        echo "<tr>
        <td>".$list['id']."</td>
        <td>".$list['Name']."</td>
        <td>".$list['Email']."</td>
        <td>".$list['Phone']."</td>
        <td>".$list['Date']."</td>
        <td>".$list['Choice']."</td>
        </tr>";
    }

}?>
</table>

