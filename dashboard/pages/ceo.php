<?php
  require_once("../../config/config.php");

  if ( !isLogged() )
  {
    redirect("../index.php");
    exit;
  }
?>

<h1> CEO informations </h1>

<div class="image-preview" style="background:url('../<?php echo $_COMPANY['ceo_avatar']; ?>')">
  <a class="edit"> <img src="../assets/svg/edit.svg" /> </a>
</div>

<div class="form-container center">
  <div class="label">
    <div class="group">
      <span>Firstname</span>
      <input type="text" name="" value="<?php echo $_COMPANY["ceo_firstname"]; ?>" required />
    </div>

    <div class="group">
      <span>Lastname</span>
      <input type="text" name="" value="<?php echo $_COMPANY["ceo_lastname"]; ?>" required />
    </div>
  </div>

  <div class="label">
    <div class="group">
      <span>Job title</span>
      <input type="text" name="" value="<?php echo $_COMPANY["ceo_job_description"]; ?>" required />
    </div>
  </div>

  <div class="label">
    <div class="group">
      <span>Email</span>
      <input type="text" name="" value="<?php echo $_COMPANY["ceo_email"]; ?>" required />
    </div>

    <div class="group">
      <span>Phone</span>
      <input type="text" name="" value="<?php echo $_COMPANY["ceo_phone"]; ?>" required />
    </div>
  </div>

  <input type="submit" name="" value="Update informations" />
</div>
