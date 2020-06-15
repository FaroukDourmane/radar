<?php
  require_once(__DIR__."/../config/config.php");
  deny_self(basename(__FILE__));
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>  </title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="assets/images/icons/favicon.png"/> -->
<!--===============================================================================================-->

<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
<!--===============================================================================================-->

<!-- Main style -->
<link rel="stylesheet" href="<?php echo assets; ?>/css/main.css">
</head>
<body>

<!-- Header Container -->
<div class="header-container">

  <!-- Header Menu Slider -->
  <div class="header-menu">
    <div class="wrapper">
      <?php for ($i=0; $i < 12; $i++) { ?>
      <div class="item">
        <h5> محامي </h5>
        <ul>
          <li> <a href="#"> محامي أول </a> </li>
          <li> <a href="#"> محامي ثاني </a> </li>
          <li> <a href="#"> محامي ثالث </a> </li>
        </ul>
      </div>
      <?php } ?>
    </div>
  </div>

  <div class="top-bar">
    <div class="left-side">
      <ul>
        <li>
          <a> <?php echo lang_preview(); ?> </a>
          <ul>
            <li> <a href="?lang=tr"> <img src="<?php echo assets; ?>/svg/tr.svg" /> TR </a> </li>
            <li> <a href="?lang=ar"> <img src="<?php echo assets; ?>/svg/sa.svg" /> AR </a> </li>
            <li> <a href="?lang=en"> <img src="<?php echo assets; ?>/svg/uk.svg" /> EN </a> </li>
          </ul>
        </li>
      </ul>

      <?php if ( isLogged() ) { ?>
        <ul class="user-preview">
          <li>
             <a href="#"> <?php echo file_get_contents(__DIR__."/../assets/svg/user.svg"); ?> <?php echo $_COMPANY["name"]; ?> </a>
             <ul>
               <li> <a href="dashboard.php"> <?php echo file_get_contents(__DIR__."/../assets/svg/settings.svg"); ?> <?php __("dashboard"); ?> </a> </li>
               <li> <a href="company.php"> <?php echo file_get_contents(__DIR__."/../assets/svg/preview.svg"); ?> <?php __("company_page"); ?> </a> </li>
               <li> <a href="?log=out"> <?php echo file_get_contents(__DIR__."/../assets/svg/exit.svg"); ?> <?php __("logout"); ?> </a> </li>
             </ul>
          </li>
        </ul>
      <?php } ?>
    </div>
    <div class="right-side">
      <form class="search-form" action="" method="post">
        <label>
          <?php echo file_get_contents(__DIR__."/../assets/svg/search.svg"); ?>
          <input type="search" name="" value="" placeholder="<?php __("search"); ?>" />
        </label>
      </form>
    </div>
  </div>

  <div class="main-menu">
    <div class="left-side">
      <ul>
        <li> <a href="#" class="open-header-menu">
          <?php echo file_get_contents(__DIR__."/../assets/svg/chevron-down.svg"); ?>
           <?php __("companies"); ?>
        </a> </li>
        <li> <a href="#"> <?php __("who_we_are"); ?> </a> </li>
      </ul>
    </div>

    <div class="center-side">
      <a href="<?php echo pre_home; ?>index.php">
        <img src="<?php echo assets; ?>/svg/logo-white.svg" />
      </a>
    </div>

    <div class="right-side">
      <ul>
        <li> <a href="#"> <?php __("contact_us"); ?> </a> </li>
        <li> <a href="index.php"> <?php __("home"); ?> </a> </li>
      </ul>
    </div>
  </div>

  <?php if ( (!isset($text_container) || $text_container !== "hide") && !isLogged()  ) { ?>
  <div class="text-container">
    <!-- <div class="left-side">
      <img src="<?php //echo assets; ?>/svg/company-building.svg" />
      <b>دليلك لتوسيع عملك</b>
      <p>نساهم في توسيع شركتك أو عملك عن طريق التعريف  و نكون نقطة وصل بينك و بين أصحاب المهن</p>
    </div> -->

    <div class="right-side">
      <h1> <?php __("you_have_company"); ?> </h1>
      <p> <?php __("advertise_company"); ?> </p>
      <div class="buttons-container">
        <a href="login.php"> <?php __("login"); ?> </a>
        <a href="signup.php" class="red">
          <img src="<?php echo assets; ?>/svg/account-plus.svg" />
          <?php __("create_free_account"); ?>
        </a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<!-- END Header Container -->
