<?php

class LikeBroAPIRequest
{

    public static function getBar($username)
    {
        $ch = curl_init('http://cp.big-bro.pro/bars/' . $username);
        curl_setopt($ch, CURLOPT_TIMEOUT, 2);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        $data = json_decode($result);
        $data = $data->data;

        include 'views/bar.php';
    }

}