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

if ( isset($_POST["action"]) && $_POST["action"] == "deleteCeoAvatar" )
{
  if ( !empty(trim(fill_input("ceo_avatar"))) )
  {
    $file = "../assets/temp/".fill_input("ceo_avatar");

    if ( delete_file($file) )
    {
        destroy_input("ceo_avatar");
        $title = "";
        $type = "success";
        $message = "تم حذف الصورة بنجاح";
    }else{
      $title = "خطأ";
      $type = "error";
      $message = "حدث خطأ أثناء حذف الصورة";
    }
  }

  $response = [
    "title" => $title,
    "type" => $type,
    "message" => $message,
  ];

  $json_response = json_encode($response);
  echo $json_response;
}

?>
