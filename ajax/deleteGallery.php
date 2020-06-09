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

if ( isset($_POST["action"]) && $_POST["action"] == "deleteGallery" && isset($_POST["id"]) )
{

  $id = intval($_POST["id"]);

  if ( isset($_SESSION["gallery"][$id]) )
  {
    $path = $_SESSION["gallery"][$id];
    $file = "../assets/temp/".$path;

    if ( delete_file($file) )
    {
      unset($_SESSION["gallery"][$id]);
      $title = "";
      $type = "success";
      $message = "تم حذف الصورة بنجاح";
    }else{
      $title = "خطأ";
      $type = "error";
      $message = "حدث خطأ أثناء حذف الصورة";
    }
  }else{
    $title = "خطأ";
    $type = "error";
    $message = "لم يتم إيجاد الصورة";
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
