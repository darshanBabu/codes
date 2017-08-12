<?php

function sendPushNotificationToGCMSever() {
    $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
    $msg = array
        (
        'body' => 'Darshan',
        'title' => 'Darshan',
        'icon' => 'myicon',
        'sound' => 'mySound'
    );
    $fields = array
        (
        'to' => 'registered fcm id of user',
        'notification' => $msg
    );
    $headers = array
        (
        'Authorization: key=' . 'Server authorization key',
        'Content-Type: application/json'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
}
?>