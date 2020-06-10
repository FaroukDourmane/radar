<?php
  $text_container = "hide";
  require_once("templates/header.php");
  create_signup_session();

  if ( isLogged() )
  {
    redirect("index.php");
    exit;
  }
?>

  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/signup.css">

  <!-- Aler Window -->
  <div class="alert-window unblur">
    <h1> Alert </h1>
    <p></p>
    <a href="#" class="close-alert-window"> Close </a>
  </div>
  <!-- END Alert Window -->

  <div class="body-container">
    <!-- Login Container -->
    <div class="login-container success">
      <div class="photo-side">
        <div class="success-text" dir="<?php __("dir"); ?>">
          <h1><?php __("congrats"); ?></h1>
          <p>
            <?php __("signup_success_text"); ?>
          </p>

          <div class="buttons">
            <a href="index.php"> <?php __("home"); ?> </a>
            <a href="dashboard.php" class="red"> <?php __("dashboard"); ?> </a>
          </div>
        </div>
        <img src="assets/svg/logo.svg" class="logo" />
      </div>
      <div class="content-side loading">
        <div class="loadingContainer"></div>
        <div class="login">
          <h1 class="ajax-title"> <?php __("account_informations"); ?> </h1>

          <div class="steps-container">

            <div class="step current 1"> <span> <?php __("account_informations"); ?> </span> </div>
            <div class="step 2"> <span> <?php __("ceo_informations"); ?> </span> </div>
            <div class="step 3"> <span> <?php __("company_details"); ?> </span> </div>
          </div>

          <div class="ajax-form-container" style="min-height:400px;"></div>
        </div>
      </div>
    </div>
    <!-- END Login Container -->
  </div>

<?php require_once("templates/footer.php");?>

<script type="text/javascript">
  var signup_token = "<?php echo $_SESSION["signup_token"]; ?>";
  var signup_step = "<?php echo intval($_SESSION["signup_step"]); ?>";
  var step_1 = "<?php __("account_informations"); ?>";
  var step_2 = "<?php __("ceo_informations"); ?>";
  var step_3 = "<?php __("company_details"); ?>";
</script>

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="assets/js/jquery/jquery.min.js"></script>
<!-- Plugins js -->
<script src="assets/js/plugins.js"></script>

<script src="assets/js/signup.js"></script>
