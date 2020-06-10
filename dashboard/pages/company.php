<?php
  require_once("../../config/config.php");

  if ( !isLogged() )
  {
    redirect("../index.php");
    exit;
  }
?>

<h1> Company informations </h1>

<div class="image-preview contain" style="background:url('../<?php echo $_COMPANY['company_logo']; ?>')">
  <a class="edit"> <img src="../assets/svg/edit.svg" /> </a>
</div>
<p class="text-center notice">Company logo</p>

<div class="form-container center">
  <div class="label">
    <div class="group">
      <span>Company name</span>
      <input type="text" name="" value="<?php echo $_COMPANY['name']; ?>" />
    </div>

    <div class="group">
      <span>Category</span>
      <input type="text" name="" value="">
    </div>
  </div>

  <div class="label">
    <div class="group">
      <span>Email</span>
      <input type="email" name="" value="<?php echo $_COMPANY['company_email']; ?>" />
    </div>

    <div class="group">
      <span>Phone</span>
      <input type="text" name="" value="<?php echo $_COMPANY['company_phone']; ?>" />
    </div>
  </div>

  <div class="label">
    <div class="group">
      <span>Address</span>
      <input type="text" name="" value="<?php echo $_COMPANY['company_address']; ?>" />
    </div>
  </div>

  <input type="submit" name="" value="Update informations" />
</div>

<h1>Gallery</h1>
<div class="gallery-container">
  <div class="item upload">
    <img src="../assets/svg/upload.svg" />
  </div>
<?php for ($i=0; $i < 6; $i++) { ?>
  <div class="item"></div>
<?php } ?>
</div>
