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

if ( isLogged() )
{ exit; }

  if ( (isset($_POST["action"]) && $_POST["action"] == "loginCompany") && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["login_token"]) )
  {
    $email = strtolower(trim(mysqli_real_escape_string($Q, $_POST["email"])));
    $password = $_POST["password"];
    $login_token = $_POST["login_token"];

    if ( $login_token !== $_SESSION["_TOKEN"] )
    {
      $type = "error";
      $message = "Login token was not found.";
    }else{

      $check_email = $Q->query("SELECT * FROM `company` WHERE `account_email`='$email' ");

      if ( $check_email->num_rows > 0 )
      {
        $fetch = $check_email->fetch_assoc();

        if ( password_verify($password, $fetch["account_password"]) )
        {
          if ( approveLogin($email) )
          {
            $type = "success";
            $message = "login_success";
          }else{
            $type = "error";
            $message = __("login_error", TRUE);
          }
        }else{
          $type = "error";
          $message = __("password_not_correct", TRUE);
        }

      }else{
        $type = "error";
        $message = __("account_email_not_found", TRUE);
      }

    }
  }else{
    $type = "error";
    $message = "No informations received";
  }


  $response = [
    "type" => $type,
    "message" => $message,
  ];

  $json_response = json_encode($response);
  echo $json_response;
?>
