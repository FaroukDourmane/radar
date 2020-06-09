<?php
require_once(__DIR__."/../../config/config.php");

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
if ( isLogged() ) { exit; }
?>

<a href="#" class="back-btn"> <?php echo file_get_contents(__DIR__."/../../assets/svg/right-arrow.svg"); ?> <?php __("back"); ?> </a>
<div class="clear"></div>


<form class="avatar-container">
  <div class="loadingUploader"></div>
  <label class="avatar" <?php echo ( !empty(trim(fill_input("ceo_avatar"))) ) ? 'style="background-image: url(assets/temp/'.fill_input("ceo_avatar").')"' : ""; ?>>
  <?php echo file_get_contents(__DIR__."/../../assets/svg/upload-avatar.svg"); ?>

    <input type="file" name="avatar" style="display:none;" />
  </label>

  <div class="buttons">
    <a href="#" class="deleteCeoAvatar"> <?php echo file_get_contents(__DIR__."/../../assets/svg/delete.svg"); ?> </a>
  </div>
  <p> <?php __("ceo_personal_picture"); ?> <i>( <?php __("avatar_preferred_size"); ?> )</i> </p>
</form>

<form class="signup-form" action="" method="post">

  <input type="text" name="ceo_firstname" placeholder="<?php __("firstname"); ?>" value="<?php echo fill_input("ceo_firstname"); ?>" required />
  <input type="text" name="ceo_lastname" placeholder="<?php __("lastname"); ?>" value="<?php echo fill_input("ceo_lastname"); ?>" required />

  <input type="text" name="ceo_job" placeholder="<?php __("job_title"); ?>" value="<?php echo fill_input("ceo_job"); ?>" required />

  <div class="notice">
    <li> <?php __("ceo_title_notice"); ?> </li>
  </div>

  <input type="email" name="ceo_email" placeholder="<?php __("contact_email"); ?>" value="<?php echo fill_input("ceo_email"); ?>" required />
  <input type="submit" name="" value="<?php __("continue"); ?>" />
</form>
