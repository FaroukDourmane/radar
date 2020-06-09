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

$categories_q = $Q->query("SELECT * FROM `category` ");
$lang_prefix = __("lang_prefix", TRUE);
?>

<form class="signup-form" action="" method="post">
  <div class="rs-select2 js-select-simple select--no-search">
      <select name="company_category">
          <option selected="selected" value="0"><?php __("company_category"); ?></option>
          <?php if ($categories_q->num_rows > 0) { ?>
            <?php while ( $categories_fetch = $categories_q->fetch_assoc() ) { ?>
              <option value="<?php echo $categories_fetch["id"]; ?>" <?php echo ( fill_input("company_category") == $categories_fetch["id"] ) ? "selected" : ""; ?>> <?php echo $categories_fetch["name_$lang_prefix"] ?> </option>
            <?php } ?>
          <?php } ?>
      </select>
      <div class="select-dropdown"></div>
  </div>

  <input type="text" name="company_name" placeholder="<?php __("company_name"); ?>" value="<?php echo fill_input("company_name"); ?>" required />

  <input type="email" name="account_email" placeholder="<?php __("account_email"); ?>" value="<?php echo fill_input("account_email"); ?>" required />
  <div class="notice">
    <li> <?php __("account_email_notice_1"); ?> </li>
    <li> <?php __("account_email_notice_2"); ?> </li>
  </div>

  <div class="password-container">
    <span> <?php echo file_get_contents(__DIR__."/../../assets/svg/eye-black.svg"); ?> </span>
    <input type="password" name="password" value="<?php echo fill_input("password"); ?>" placeholder="<?php __("account_password"); ?>" required />
  </div>

  <input type="submit" name="" value="<?php __("continue"); ?>" />
</form>

<!-- Active js -->
<script src="assets/js/active.js"></script>
