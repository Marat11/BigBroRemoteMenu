<?php
  require_once('inc/config.php');

  class LikeBroAPIRequest {

    public static function getBar($username) {
      global $settings;
      $ch = curl_init($settings['api_path'] . '/bars/' . $username);
      curl_setopt($ch, CURLOPT_POST, FALSE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

      $result =  curl_exec($ch);

      $data = json_decode($result);
      $data = $data->data;
      $path = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
      include 'views/bar.php';
    }

  }