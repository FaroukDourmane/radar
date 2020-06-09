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

if ( isset($_POST["action"]) && $_POST["action"] == "nextStep" && !isLogged() )
{
  $type = "success";
  $content = "";
  $current = 0;
  $next = 0;
  $errors = 0;
  $title = "";

  if ( $_SESSION["signup_step"] == 1 )
  {
    $company_category = ( isset($_POST["company_category"]) && intval($_POST["company_category"]) > 0 ) ? intval($_POST["company_category"]) : 0;
    $company_name = mysqli_real_escape_string($Q, $_POST["company_name"]);
    $account_email = trim(strtolower(mysqli_real_escape_string($Q, $_POST["account_email"])));
    $password = $_POST["password"];

    $check_email = $Q->query("SELECT * FROM `company` WHERE `account_email`='$account_email' ");

    if ( $check_email->num_rows > 0 ) {
      $type = "error";
      $title = " Error ";
      $content = " The account email is already used ";
      $errors = "email";
    }else if ( $company_category == 0 ) {
      $type = "error";
      $title = " Error ";
      $content = " Please select the company's category ";
      $errors = "category";
    }


    if ( $errors == 0 )
    {
      save_input("company_category", $company_category);
      save_input("company_name", $company_name);
      save_input("account_email", $account_email);
      save_input("password", $password);

      $title = "CEO informations";
      $current = 1;
      $next = 2;
    }

  }
  else if ( $_SESSION["signup_step"] == 2 )
  {
    $ceo_firstname = $_POST["ceo_firstname"];
    $ceo_lastname = $_POST["ceo_lastname"];
    $ceo_job = $_POST["ceo_job"];
    $ceo_email = $_POST["ceo_email"];

    save_input("ceo_firstname", $ceo_firstname);
    save_input("ceo_lastname", $ceo_lastname);
    save_input("ceo_job", $ceo_job);
    save_input("ceo_email", $ceo_email);

    $title = "Further details";
    $current = 2;
    $next = 3;
  }

  $response = [
    "type" => $type,
    "errors" => $errors,
    "title" => $title,
    "current" => $current,
    "next" => $next,
    "content" => $content
  ];

  if ( $type == "success" )
  {
    $_SESSION["signup_step"] = $next;
  }

  $json_response = json_encode($response);
  echo $json_response;
}

if ( isset($_POST["action"]) && $_POST["action"] == "prevStep" && !isLogged() )
{
  if ( $_SESSION["signup_step"] > 1 )
  {
    if ( $_SESSION["signup_step"] == 3 )
    {
      $title = "CEO informations";
      $current = 3;
      $previous = 2;
    }else if ( $_SESSION["signup_step"] == 2 )
    {
      $title = "Account informations";
      $current = 2;
      $previous = 1;
    }

    $response = [
      "type" => "success",
      "title" => $title,
      "current" => $current,
      "previous" => $previous
    ];

    $_SESSION["signup_step"] = $previous;
  }else{
    $response = [
      "type" => "error",
      "title" => "Error",
      "content" => "Operation couldn't be done",
    ];
  }

  $json_response = json_encode($response);
  echo $json_response;
}


// Finalize signup
if ( isset($_POST["action"]) && $_POST["action"] == "finalizeSignup" && !isLogged() )
{
  $errors = 0;

  // Account Informations
  $company_category = intval(fill_input("company_category"));
  $company_name = mysqli_real_escape_string($Q, fill_input("company_name"));
  $account_email = trim(strtolower(mysqli_real_escape_string($Q,fill_input("account_email"))));
  $password = fill_input("password");
  $hash_password = password_hash($password, PASSWORD_DEFAULT);

  // CEO Informations
  $ceo_firstname = mysqli_real_escape_string($Q, fill_input("ceo_firstname"));
  $ceo_lastname = mysqli_real_escape_string($Q, fill_input("ceo_lastname"));
  $ceo_job = mysqli_real_escape_string($Q, fill_input("ceo_job"));
  $ceo_email = trim(strtolower(mysqli_real_escape_string($Q, fill_input("ceo_email"))));

  // Company Informations
  $work_description = mysqli_real_escape_string($Q, $_POST["work_description"]);
  $facebook_link = mysqli_real_escape_string($Q, $_POST["facebook_link"]);
  $twitter_link = mysqli_real_escape_string($Q, $_POST["twitter_link"]);
  $instagram_link = mysqli_real_escape_string($Q, $_POST["instagram_link"]);
  $linkedin_link = mysqli_real_escape_string($Q, $_POST["linkedin_link"]);
  $company_email = mysqli_real_escape_string($Q, $_POST["company_email"]);
  $company_phone = mysqli_real_escape_string($Q, $_POST["company_phone"]);
  $company_whatsapp = mysqli_real_escape_string($Q, $_POST["company_whatsapp"]);
  $company_address = mysqli_real_escape_string($Q, $_POST["company_address"]);
  $google_position = mysqli_real_escape_string($Q, $_POST["google_position"]);

  save_input("work_description", $work_description);
  save_input("facebook_link", $facebook_link);
  save_input("twitter_link", $twitter_link);
  save_input("instagram_link", $instagram_link);
  save_input("linkedin_link", $linkedin_link);
  save_input("company_email", $company_email);
  save_input("company_phone", $company_phone);
  save_input("company_whatsapp", $company_whatsapp);
  save_input("company_address", $company_address);
  save_input("google_position", $google_position);

  // Photos
  $ceo_avatar = mysqli_real_escape_string($Q, fill_input("ceo_avatar"));
  $company_gallery = fill_gallery();
  $company_logo = mysqli_real_escape_string($Q, fill_input("company_logo"));

  $time = time();

  // Check account informations
  if ( empty($company_category) || $company_category == 0 || empty($company_name) || empty($account_email) || empty($password) )
  {
    $missed_inputs = array();

    if ( empty($company_category) || $company_category == 0 )
    {
      $missed_inputs[] = __("company_category", TRUE);
    }

    if ( empty($company_name) )
    {
      $missed_inputs[] = __("company_name", TRUE);
    }

    if ( empty($account_email) )
    {
      $missed_inputs[] = __("account_email", TRUE);
    }

    if (empty(empty($password)))
    {
      $missed_inputs[] = __("account_password", TRUE);
    }

    $errors = " Please make sure to fill all the informations in : Step 1 ";
  }
  else if ( empty($work_description) || empty($company_email) || empty($company_phone) || empty($company_address) || empty($company_whatsapp) )
  {
    // Check company informations
    $errors = " Please make sure to fill all the informations in : Step 2 ";
  }
  else if ( empty($ceo_avatar) || !$company_gallery || empty($company_logo) )
  {
    // Check Photos
    $errors = " Please make sure to upload all the required pictures (CEO avatar, Company logo, Company slideshow) ";
  }

  if ( !$errors )
  {
    $insert = $Q->query("INSERT INTO `company`
      (`name`,`category`,`account_email`,`account_password`,`ceo_firstname`,`ceo_lastname`,`ceo_job_description`,`ceo_email`,`company_email`,`company_phone`,`company_address`,`company_facebook`,`company_instagram`,`company_twitter`,`company_linkedin`,`company_whatsapp`,`work_description`,`map_code`,`added_date`)
      VALUES
      ('$company_name','$company_category','$account_email','$hash_password','$ceo_firstname','$ceo_lastname','$ceo_job','$ceo_email','$company_email','$company_phone','$company_address','$facebook_link','$instagram_link','$twitter_link','$linkedin_link','$company_whatsapp','$work_description','$google_position',
        '$time') ");

    if ( $insert )
    {
      $last_id = $Q->insert_id;
      $path = "../assets/company/$last_id/";

      if (!file_exists($path)) {
        mkdir($path, 0777, true);
      }

      if ( rename("../assets/temp/$ceo_avatar", "$path$ceo_avatar") )
      {
        $ceo_avatar_sql = "assets/company/$last_id/$ceo_avatar";
      }

      if ( rename("../assets/temp/$company_logo", "$path$company_logo") )
      {
        $company_logo_sql = "assets/company/$last_id/$company_logo";
      }

      // Update company To add logo and ceo avatar
      $UPDATE = $Q->query("UPDATE `company` SET `company_logo`='$company_logo_sql',`ceo_avatar`='$ceo_avatar_sql' WHERE `id`='$last_id' ");


      // Insert company gallery pictures
      if ( count($company_gallery) > 0 )
      {
        foreach ($company_gallery as $key => $value) {

          $gallery_sql_path = "assets/company/$last_id/".$value;
          if ( rename("../assets/temp/$value", "../$gallery_sql_path") )
          {
            $INSERT_GALLERY = $Q->query("INSERT INTO `company_images` (`company_id`,`image_path`) VALUES ('$last_id','$gallery_sql_path') ");
          }

        }
      }

      // Insert login session
      approveLogin($account_email);

      reset_inputs();
      if (isset($_SESSION['signup_step']))
      {
        unset($_SESSION['signup_step']);
      }

      $response = [
        "type" => "success",
        "title" => "Congratulations",
        "content" => "Your account was created successfully",
      ];
    }else{
      $response = [
        "type" => "error",
        "title" => "Error",
        "content" => mysqli_error($Q)
        //"content" => "An error has occured while trying to register you, please try again and if this error shows again please call our support.",
      ];
    }

  }else{
    $response = [
      "type" => "error",
      "title" => "Error",
      "content" => $errors,
    ];
  }

    $json_response = json_encode($response);
    echo $json_response;
}
?>
