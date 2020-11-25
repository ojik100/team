<?php

$desa = $_POST["desa"];



$result = $this->db->query("SELECT *FROM device where desa='$desa'");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        # code...
        $token[] = $row["token"];
    }

}



    //API URL of FCM
    $url = 'https://fcm.googleapis.com/fcm/send';

    /*api_key available in:
    Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key*/    
    $serverKey = 'AAAAISs7cl0:APA91bG5AxfAA7D7LtC6epPTq6n8e0fne-yMzj4Ba-vsbFgHIubeHNu2fqJfQi3IZL2p1cR3sJbMN3Cw08xavFeaFEaMex4rRzZJJ_u_CftjUbIsgL_Nr0_HzY5He-mnorLHT3xKjHw7';
                
 

for ($i=0; $i <2 ; $i++) { 
    # code...
    $title = "Notification title";
    $body = "Hello I am from Your php server";
    $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
    $arrayToSend = array('to' => $token[$i], 'notification' => $notification,'priority'=>'high');
    $json = json_encode($arrayToSend);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    //Send the request
    $response = curl_exec($ch);
    //Close request
    if ($response === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
}


?>