<?php
  require_once("../templates/header.php");

  if ( !isLogged() )
  {
    redirect("../index.php");
    exit;
  }
?>
<link rel="stylesheet" href="../assets/css/dashboard.css">

<div class="dashboard-container">
  <div class="left-side">
    <!-- Avatar container -->
    <div class="avatar-container">
      <div class="wrapper">
        <div class="avatar" style="background-image:url('../<?php echo $_COMPANY['company_logo']; ?>')"></div>
        <h1> <?php echo $_COMPANY["name"]; ?> </h1>
      </div>
    </div>

    <!-- List continer -->
    <div class="list-container">
      <ul>
        <li> <a href="#statistics" class="statistics" id="getAjaxPage"> <img src="../assets/svg/statistics.svg" /> <?php __("statistics"); ?> </a> </li>
      </ul>

      <ul>
        <li> <a href="#messages" id="getAjaxPage"> <img src="../assets/svg/messages.svg" /> <?php __("messages"); ?> <span class="label">10</span> </a> </li>
        <li> <a href="#account" id="getAjaxPage"> <img src="../assets/svg/account-settings.svg" /> <?php __("account_settings"); ?> </a> </li>
        <li> <a href="#ceo" id="getAjaxPage"> <img src="../assets/svg/user-settings.svg" /> <?php __("ceo_informations"); ?> </a> </li>
        <li> <a href="#company" id="getAjaxPage"> <img src="../assets/svg/building.svg" /> <?php __("company_information"); ?> </a> </li>
        <li> <a href="#delete" id="getAjaxPage" class="delete"> <?php echo file_get_contents("../assets/svg/red-delete.svg"); ?> <?php __("delete_account"); ?> </a> </li>
      </ul>
    </div>
  </div>

  <!-- Ajax container -->
  <div class="right-side ajaxContainer">
    <div class="loadingContainer active"></div>
  </div>
  <!-- END Ajax container -->
</div>

<div class="push-notifications-container"></div>

<?php require_once("../templates/footer.php"); ?>
<script type="text/javascript" src="assets/js/page-control.js"></script>
