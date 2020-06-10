<?php require_once("../templates/header.php"); ?>
<link rel="stylesheet" href="../assets/css/dashboard.css">

<div class="dashboard-container">
  <div class="left-side">
    <!-- Avatar container -->
    <div class="avatar-container">
      <div class="wrapper">
        <div class="avatar"></div>
        <h1> Microsoft </h1>
      </div>
    </div>

    <!-- List continer -->
    <div class="list-container">
      <ul>
        <li> <a href="#statistics" class="statistics" id="getAjaxPage"> <img src="../assets/svg/statistics.svg" /> Statistics </a> </li>
      </ul>

      <ul>
        <li> <a href="#messages" id="getAjaxPage"> <img src="../assets/svg/messages.svg" /> Messages <span class="label">10</span> </a> </li>
        <li> <a href="#account" id="getAjaxPage"> <img src="../assets/svg/account-settings.svg" /> Account settings </a> </li>
        <li> <a href="#ceo" id="getAjaxPage"> <img src="../assets/svg/user-settings.svg" /> CEO informations </a> </li>
        <li> <a href="#company" id="getAjaxPage"> <img src="../assets/svg/building.svg" /> Company informations </a> </li>
        <li> <a href="#delete" id="getAjaxPage" class="delete"> <img src="../assets/svg/red-delete.svg" /> Delete account </a> </li>
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
