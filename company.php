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
        <?php //echo $fetch["company_logo"]; ?>
      </p>
    </div>
    <!-- END CEO Card -->

    <!-- Work description -->
    <div class="description-container">
      <h1 class="title"> <span>Work Description</span> </h1>
      <div class="content">
        <?php echo $fetch["work_description"]; ?>
      </div>
    </div>
    <!-- END Work description -->

    <!-- Contact Form -->
    <div class="contact-container">
      <h1 class="title"> <span>Send us a message</span> </h1>
      <form class="" action="" method="post">
        <input type="text" name="" value="" placeholder="Name" required />
        <input type="email" name="" value="" placeholder="Email" required />
        <textarea name="name" required placeholder="Message"></textarea>
        <input type="submit" name="" value="Send it" />
      </form>
    </div>
    <!-- END Contact Form -->

    <!-- Map container -->
    <div class="map-container">
      <div class="location-pin"> <?php echo file_get_contents("assets/svg/location.svg"); ?> </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385395.558995652!2d28.731988885938588!3d41.00550052122371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2sIstanbul!5e0!3m2!1sfr!2str!4v1591177835702!5m2!1sfr!2str" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- END Map -->
  </div>
</div>
<?php require_once("templates/footer.php");?>
<script type="text/javascript" src="assets/js/company.js"></script>
