<?php
require_once("../config/config.php");

/*
      /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
      |         DESIGNED & DEVELOPED        |
      |                                     |
      |                 BY                  |
      |                                     |
      |   F A R O U K _ D O  U R  M A  N E  |
      |                                     |
      |       dourmanefarouk@gmail.com      |
      |                                     |
      \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/
*/

if ( !isset($_POST["token"]) || $_POST["token"] !== $_SESSION["signup_token"] )
{
  $response = [
    "type" => "error",
    "message" => "Token was not found",
  ];

  $json_response = json_encode($response);
  echo $json_response;
  exit;
}

  $TOKEN = $_POST["token"];

  $title = "";
  $max_image_size_byte = 5*1000000; // Max size in MegaBytes

  $path = "../assets/temp/";
  $upload = upload("avatar", $path, "images", $max_image_size_byte);

  if ( $upload )
    {
      if ( !empty(trim(fill_input("ceo_avatar"))) )
      {
        $file = $path.fill_input("ceo_avatar");

        if ( delete_file($file) )
        {
            destroy_input("ceo_avatar");
        }
      }

      save_input("ceo_avatar",$upload);

      $type = "success";
      $message = $upload;
    }else{
      $title = "حدث خطأ";
      $type = "error";
      $message = "حدث خطأ أثناء رفع الملف";
    }


    $response = [
      "type" => $type,
      "title" => $title,
      "message" => $message,
    ];

    $json_response = json_encode($response);
    echo $json_response;
?>
