<?php require_once("templates/header.php"); ?>
<link rel="stylesheet" href="assets/css/dashboard.css">

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
        <li> <a href="#" class="statistics"> <img src="assets/svg/statistics.svg" /> Statistics </a> </li>
      </ul>

      <ul>
        <li> <a href="#"> <img src="assets/svg/messages.svg" /> Messages <span class="label">10</span> </a> </li>
        <li> <a href="#"> <img src="assets/svg/account-settings.svg" /> Account settings </a> </li>
        <li> <a href="#"> <img src="assets/svg/user-settings.svg" /> CEO informations </a> </li>
        <li> <a href="#"> <img src="assets/svg/building.svg" /> Company informations </a> </li>
        <li> <a href="#" class="delete"> <img src="assets/svg/red-delete.svg" /> Delete account </a> </li>
      </ul>
    </div>
  </div>

  <div class="right-side">
    <h1> Statistics </h1>

    <!-- stats wrapper -->
    <div class="stats-wrapper">

      <!-- Item -->
      <div class="item">
        <div class="wrap">
          <h1>1.5K</h1>
          <img src="assets/svg/eye-black.svg" />
          <span>Views</span>
        </div>
      </div>
      <!-- END Item -->

      <!-- Item -->
      <div class="item yellow">
        <div class="wrap">
          <h1>1K</h1>
          <img src="assets/svg/star.svg" />
          <span>Favorite</span>
        </div>
      </div>
      <!-- END Item -->

      <!-- Item -->
      <div class="item notify">
        <div class="wrap">
          <h1>10</h1>
          <img src="assets/svg/messages-black.svg" />
          <span>Messages</span>
        </div>
      </div>
      <!-- END Item -->

    </div>
    <!-- End stats wrapper -->

    <h1 class="yellow-title"> <img src="assets/svg/yellow-bell.svg" /><span>Notifications</span> </h1>
    <!-- Notifications wrapper -->
    <div class="notifications-wrapper">
      <div class="item">
        <img src="assets/svg/eye-black.svg" /> Last view at : <b><?php echo date("d/m/Y h:i", time()); ?></b>
      </div>

      <div class="item">
        <img src="assets/svg/eye-black.svg" /> 2 unread messages : <b><?php echo date("d/m/Y h:i", time()); ?></b>
      </div>
    </div>
    <!-- END Notifications -->
  </div>
</div>

<?php require_once("templates/footer.php"); ?>
