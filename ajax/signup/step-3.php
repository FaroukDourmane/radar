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
$gallery_photos = fill_gallery();
?>

<link rel="stylesheet" href="assets/css/bootstrap-file-input.css">

<a href="#" class="back-btn"> <?php echo file_get_contents(__DIR__."/../../assets/svg/right-arrow.svg"); ?> <?php __("back"); ?> </a>
<div class="clear"></div>

<form class="logo-container" dir="<?php __("dir"); ?>">
  <div class="loadingUploader"></div>
  <label class="logo" <?php echo ( !empty(trim(fill_input("company_logo"))) ) ? 'style="background-image: url(assets/temp/'.fill_input("company_logo").')"' : ""; ?>>
  <?php echo file_get_contents(__DIR__."/../../assets/svg/upload.svg"); ?>

    <input type="file" name="logo" style="display:none;" />
  </label>

  <div class="buttons">
    <a href="#" class="deleteLogo"> <?php echo file_get_contents(__DIR__."/../../assets/svg/delete.svg"); ?> </a>
  </div>
  <p> <?php __("company_logo"); ?> <i>( <?php __("logo_notice"); ?>  )</i> </p>
</form>

<div class="gallery-container" dir="<?php __("dir"); ?>">
  <form class="add-container" method="POST">
    <div class="loadingUploader"></div>
    <label class="gallery">
      <?php echo file_get_contents(__DIR__."/../../assets/svg/upload.svg"); ?>
      <input type="file" name="gallery[]" multiple style="display:none;" />
    </label>
    <p> <?php __("company_slideshow"); ?> <i>( <?php __("gallery_notice"); ?>)</i> </p>

    <div class="wrapper">
      <?php if ( $gallery_photos ) { foreach ($gallery_photos as $key => $value) { ?>
        <div class="item <?php echo $key; ?>" id='<?php echo $key; ?>' style="background-image:url('assets/temp/<?php echo $value; ?>');">
          <a class="delete">x</a>
        </div>
      <?php }} ?>
    </div>
  </form>
  <div class="pictures-container"></div>
</div>

<form class="final-form" action="" method="post">

  <h5> <span><?php __("company_description"); ?></span> </h5>
  <textarea name="work_description" placeholder="<?php __("description"); ?>" required> <?php echo fill_input("workd_description"); ?> </textarea>

  <h5> <span><?php __("social_media"); ?></span> </h5>
  <input type="url" name="facebook_link" placeholder="<?php __("facebook_link"); ?>" value="<?php echo fill_input("facebook_link"); ?>" />
  <input type="url" name="twitter_link" placeholder="<?php __("twitter_link"); ?>" value="<?php echo fill_input("twitter_link"); ?>" />
  <input type="url" name="instagram_link" placeholder="<?php __("instagram_link"); ?>" value="<?php echo fill_input("instagram_link"); ?>" />
  <input type="url" name="linkedin_link" placeholder="<?php __("linkedin_link"); ?>" value="<?php echo fill_input("linkedin_link"); ?>" />

  <h5> <span><?php __("contact_informations"); ?></span> </h5>
  <input type="text" name="company_email" placeholder="<?php __("company_email"); ?>" value="<?php echo fill_input("company_email"); ?>" required />
  <input type="text" name="company_phone" placeholder="<?php __("company_phone"); ?>" value="<?php echo fill_input("company_phone"); ?>" required />
  <input type="text" name="company_whatsapp" placeholder="<?php __("whatsapp_number"); ?>" value="<?php echo fill_input("company_whatsapp"); ?>" required />

  <h5> <span><?php __("company_position"); ?></span> </h5>
  <input type="text" name="company_address" placeholder="<?php __("company_address"); ?>" value="<?php echo fill_input("company_address"); ?>" required />
  <textarea name="google_position" placeholder="Google map HTML Code"><?php echo fill_input("google_position"); ?></textarea>
  <div class="notice">
    <li> <a href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=<?php echo __("lang_prefix"); ?>" target="_blank"> <?php __("google_map_tutorial"); ?> <img src="assets/svg/external-link.svg" /> </a> </li>
  </div>
  <input type="submit" name="" value="<?php __("confirm"); ?>" />
</form>
