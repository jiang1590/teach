<?php
    function httpGet($url,$postBody)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    function httpPost($url,$postBody)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURL_POSTFIELDS, $postBody);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


 ?>
