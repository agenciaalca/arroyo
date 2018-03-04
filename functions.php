<?php 


/* -----------------------------------------------------
            INSTAGRAM
-------------------------------------------------------- */
function fetchData($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function instagram(){
    $result = fetchData("https://api.instagram.com/v1/users/612477294/media/recent/?access_token=612477294.1677ed0.94c09aa0c1274bcebcf7a23043ce7269");
    $result = json_decode($result);
    $count = 0;
    if ($result->data) {
        return $result->data;
    }
    else{
        return null;
    }
}
