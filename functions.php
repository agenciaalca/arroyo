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
    $result = fetchData("https://api.instagram.com/v1/users/3056016000/media/recent/?access_token=612477294.1677ed0.7d9711ca4aa241a883cdb8c2d76b6d77");
    $result = json_decode($result);
    $count = 0;
    if ($result->data) {
        return $result->data;
    }
    else{
    	return null;
    }
}