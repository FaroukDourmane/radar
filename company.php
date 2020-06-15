<?php
  require_once("templates/header.php");

  $id = (isset($_GET["id"])) ? intval($_GET["id"]) : 0;

  if ( !$id && !isLogged() )
  {
    redirect("index.php");
    exit;
  }

  if ( !$id && isLogged() )
  {
    $fetch = $_COMPANY;
    $id = $fetch["id"];
  }else if ( $id )
  {
    $check = $Q->query("SELECT * FROM `company` WHERE `id`='$id' ");
    if ( $check->num_rows > 0 )
    {
      $fetch = $check->fetch_assoc();
    }else{
      redirect("index.php");
      exit;
    }
  }

  $lang_prefix = __("lang_prefix", TRUE);
  $category = get_category($fetch["category"]);
  $category_name = $category["name_$lang_prefix"];
  $category_photo = $category["image_path"];
  // GET company gallery
  $gallery_q = $Q->query("SELECT * FROM `company_images` WHERE `company_id`='$id' ");
?>
<link rel="stylesheet" href="assets/css/company.css">
<div class="body-container">

  <?php if ( $gallery_q->num_rows > 0 ) { ?>
    <div class="company-slider" style="background-image:url('assets/img/bg-test.jpg');<?php echo (isLogged()) ? 'top:-50px;' : ""; ?>">
      <div class="icons-wrapper">
        <?php while ( $gallery_fetch = $gallery_q->fetch_assoc() ) { ?>
          <div class="icon" style="background-image:url('<?php echo $gallery_fetch['image_path']; ?>')"></div>
        <?php } ?>
        <a class="arrow right"> <img src="assets/svg/arrow-head-right.svg" /> </a>
        <a class="arrow left"> <img src="assets/svg/arrow-head-right.svg" /> </a>
      </div>
    </div>
  <?php } ?>

  <div class="visit-card-container">
    <!-- VISIT CARD HEAD -->
    <div class="header">
      <div class="black-path"></div>

      <div class="logo">
        <img src="<?php echo $fetch["company_logo"]; ?>" />
      </div>
      <div class="content">
        <h1> <?php echo $fetch["name"]; ?> </h1>
        <p> <img src="<?php echo $category_photo; ?>" /> <?php echo $category_name; ?></p>
        <p> <img src="assets/svg/location.svg" /> <?php echo $fetch["company_address"]; ?></p>
        <p> <img src="assets/svg/phone.svg" /> <?php echo $fetch["company_phone"]; ?> </p>
        <p> <img src="assets/svg/email.svg" /> <?php echo $fetch["company_email"]; ?> </p>
        <div class="social-media">
          <?php if ( !empty(trim($fetch["company_facebook"])) ) { ?>
            <a href="<?php echo $fetch["company_facebook"]; ?>" target="_blank" class="facebook"> <?php echo file_get_contents("assets/svg/facebook-square.svg"); ?> </a>
          <?php } ?>

          <?php if ( !empty(trim($fetch["company_instagram"])) ) { ?>
            <a href="<?php echo $fetch["company_instagram"]; ?>" target="_blank" class="instagram"> <?php echo file_get_contents("assets/svg/instagram-square.svg"); ?> </a>
          <?php } ?>

          <?php if ( !empty(trim($fetch["company_twitter"])) ) { ?>
            <a href="<?php echo $fetch["company_twitter"]; ?>" target="_blank" class="twitter"> <?php echo file_get_contents("assets/svg/twitter.svg"); ?> </a>
          <?php } ?>

          <?php if ( !empty(trim($fetch["company_linkedin"])) ) { ?>
            <a href="<?php echo $fetch["company_linkedin"]; ?>" target="_blank" class="linkedin"> <?php echo file_get_contents("assets/svg/linkedin.svg"); ?> </a>
          <?php } ?>

        </div>
      </div>
      <div class="social">
        <div class="wrapper">

          <div class="item views">
              <div>
                <span>1,5k</span>
                <img src="assets/svg/eye-black.svg" />
              </div>
          </div>

          <div class="item whatsapp">
            <a href="#">
               <img src="assets/svg/whatsapp.svg" />
            </a>
          </div>
          <div class="item favorite js-favorite">
            <div>
              <span>100</span>
              <?php echo file_get_contents("assets/svg/star.svg"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END VISIT CARD HEAD -->

    <!-- CEO Card -->
    <div class="ceo-card">
      <div class="avatar" style="background-image:url('<?php echo $fetch['ceo_avatar']; ?>')"></div>
      <h5> <?php echo $fetch["ceo_firstname"]." ".$fetch["ceo_lastname"]; ?> </h5>
      <p class="description"> <?php echo $fetch["ceo_job_description"]; ?> </p>
      <p>
        <img src="assets/svg/email-outline.svg" />
        <?php echo $fetch["ceo_email"]; ?>
      </p>

      <p>
        <img src="assets/svg/phone-outline.svg" />
        <?php echo $fetch["ceo_phone"]; ?>
      </p>
    </div>
    <!-- END CEO Card -->

    <!-- Work description -->
    <div class="description-container">
      <h1 class="title"> <span><?php __("work_description"); ?></span> </h1>
      <div class="content">
        <?php echo htmlspecialchars_decode(stripslashes(stripslashes($fetch["work_description"]))); ?>
      </div>
    </div>
    <!-- END Work description -->

    <!-- Contact Form -->
    <div class="contact-container">
      <h1 class="title"> <span><?php __("send_us_message"); ?></span> </h1>
      <form class="" action="" method="post">
        <input type="text" name="" value="" placeholder="<?php __("fullname"); ?>" required />
        <input type="email" name="" value="" placeholder="<?php __("email"); ?>" required />
        <textarea name="name" required placeholder="<?php __("message"); ?>"></textarea>
        <input type="submit" name="" value="<?php __("send_it"); ?>" />
      </form>
    </div>
    <!-- END Contact Form -->

    <?php
      $map_code = htmlspecialchars_decode(stripslashes(stripslashes($fetch["map_code"])));
      if ( check_google_maps($map_code) ) {
    ?>
    <!-- Map container -->
    <div class="map-container">
      <div class="location-pin"> <?php echo file_get_contents("assets/svg/location.svg"); ?> </div>
      <?php echo $map_code; ?>
    </div>
    <!-- END Map -->
    <?php } ?>
    
  </div>
</div>
<?php require_once("templates/footer.php");?>
<script type="text/javascript" src="assets/js/company.js"></script>
