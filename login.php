<?php
  $text_container = "hide";
  require_once("templates/header.php");

  if ( isLogged() )
  {
    redirect("index.php");
    exit;
  }
?>

  <link rel="stylesheet" href="assets/css/login.css">

  <div class="body-container">
    <!-- Login Container -->
    <div class="login-container">
      <div class="photo-side">
        <img src="assets/svg/logo.svg" class="logo" />
      </div>
      <div class="content-side">
        <div class="loadingContainer"></div>

        <div class="login-success">
          <h1> <?php __("congrats"); ?> </h1>
          <p> <?php __("login_success"); ?> </p>
          <p> <?php __("redirect"); ?> </p>
        </div>

        <div class="login">
          <h1> <?php __("login"); ?> </h1>

          <div class="error"></div>

          <form class="ajax-login-form" action="" method="post">
            <input type="email" name="email" placeholder="<?php __("account_email"); ?>" required />
            <input type="password" name="password" placeholder="<?php __("account_password"); ?>" required />

            <input type="submit" name="" value="<?php __("login"); ?>" />
          </form>

          <div class="reset-password">
            <p> <?php __("password_forget"); ?> </p>
            <a href="#"> <?php __("password_recovery"); ?> </a>
          </div>
        </div>

        <div class="signup">
          <p> <?php __("no_account"); ?> </p>
          <a href="signup.php"> <?php __("create_free_account"); ?> </a>
        </div>
      </div>
    </div>
    <!-- END Login Container -->
  </div>

<?php require_once("templates/footer.php");?>
<script type="text/javascript">
  var login_token = "<?php echo $_SESSION["_TOKEN"]; ?>";
</script>
<script type="text/javascript" src="assets/js/login.js"></script>
