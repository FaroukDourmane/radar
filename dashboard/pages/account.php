<?php
  require_once("../../config/config.php");

  if ( !isLogged() )
  {
    redirect("../index.php");
    exit;
  }
?>

<h1> Account settings </h1>

<form class="form-container" action="" method="post">
  <h2> <span> Change email </span> </h2>
  <input type="email" name="" value="<?php echo $_COMPANY["account_email"]; ?>" required />
  <input type="password" name="" placeholder="Enter password" required />

  <input type="submit" name="" value="Change email" />
</form>


<form class="form-container" action="" method="post">
  <h2> <span> Change password </span> </h2>
  <input type="password" name="current_password" placeholder="Current password" required />
  <input type="password" name="new_password" placeholder="New password" required />
  <input type="password" name="new_password_confirm" placeholder="New password confirm" required />

  <input type="submit" name="" value="Change password" />
</form>
