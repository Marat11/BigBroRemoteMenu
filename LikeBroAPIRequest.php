<?php

  class LikeBroAPIRequest {

    public static function getBar($username) {
        sleep(2);
      $ch = curl_init('http://cp.big-bro.pro/bars/' . $username);
      curl_setopt($ch, CURLOPT_POST, FALSE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

      $result =  curl_exec($ch);

      $data = json_decode($result);
      $data = $data->data;
     
      include 'views/bar.php';
    }

  }