<?php
  require_once("../../config/config.php");

  if ( !isLogged() )
  {
    redirect("../index.php");
    exit;
  }
?>

<h1> <?php __("account_settings"); ?> </h1>

<form class="form-container" action="" method="post">
  <h2> <span> <?php __("change_email"); ?> </span> </h2>
  <input type="email" name="" value="<?php echo $_COMPANY["account_email"]; ?>" required />
  <input type="password" name="" placeholder="<?php __("enter_password"); ?>" required />

  <input type="submit" name="" value="<?php __("change_email"); ?>" />
</form>


<form class="form-container" action="" method="post">
  <h2> <span> <?php __("change_password"); ?> </span> </h2>
  <input type="password" name="current_password" placeholder="<?php __("current_password"); ?>" required />
  <input type="password" name="new_password" placeholder="<?php __("new_password"); ?>" required />
  <input type="password" name="new_password_confirm" placeholder="<?php __("new_password_confirm"); ?>" required />

  <input type="submit" name="" value="<?php __("change_password"); ?>" />
</form>
