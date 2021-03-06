<?php
  require_once("../../config/config.php");

  if ( !isLogged() )
  {
    redirect("../index.php");
    exit;
  }
?>

<h1> <?php __("statistics"); ?> </h1>

<!-- stats wrapper -->
<div class="stats-wrapper">

  <!-- Item -->
  <div class="item">
    <div class="wrap">
      <h1>1.5K</h1>
      <img src="../assets/svg/eye-black.svg" />
      <span><?php __("views"); ?></span>
    </div>
  </div>
  <!-- END Item -->

  <!-- Item -->
  <div class="item yellow">
    <div class="wrap">
      <h1>1K</h1>
      <img src="../assets/svg/star.svg" />
      <span><?php __("favorite"); ?></span>
    </div>
  </div>
  <!-- END Item -->

  <!-- Item -->
  <div class="item notify">
    <div class="wrap">
      <h1>10</h1>
      <img src="../assets/svg/messages-black.svg" />
      <span><?php __("messages"); ?></span>
    </div>
  </div>
  <!-- END Item -->

</div>
<!-- End stats wrapper -->

<h1 class="yellow-title"> <img src="../assets/svg/yellow-bell.svg" /><span><?php __("notifications"); ?></span> </h1>
<!-- Notifications wrapper -->
<div class="notifications-wrapper">
  <div class="item">
    <img src="../assets/svg/eye-black.svg" /> <?php __("last_view_at"); ?> : <b><?php echo date("d/m/Y h:i", time()); ?></b>
  </div>

  <div class="item">
    <img src="../assets/svg/eye-black.svg" /> 2 <?php __("unred_messages"); ?> : <b><?php echo date("d/m/Y h:i", time()); ?></b>
  </div>
</div>
<!-- END Notifications -->
