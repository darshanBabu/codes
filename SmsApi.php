<?php

function SendSms() {
    $url = "http://smsapi.com/sendsmsapi.php?";
    $parameters = 'username=your-username';
    $parameters .= '&password=your-password';
    $parameters .= '&mobileno=your-mobile-number';
    $parameters .= '&senderid=your-senderid';
    $parameters .= '&message=your-message';
    $parameters .= '&route=your-sms-type'; #transactional or promotional
    $parameters .= '&lang=english';
    $apiurl = $url . $parameters;
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $apiurl
    ));
    $cm = curl_exec($curl);
    if (!$cm) {
        die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
    }
    print_r($cm);
}

?>