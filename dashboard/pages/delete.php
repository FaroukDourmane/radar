<?php
  require_once("../../config/config.php");

  if ( !isLogged() )
  {
    redirect("../index.php");
    exit;
  }
?>

<h1> Hide company </h1>
<p class="notice big">You might just want to hide your company from the website without
deleting your account.</p>
</br>
<form class="form-container">
  <div class="label">
    <div class="group">
      <span> Hiding period </span>
      <input type="text" disabled name="" value="Until i turn it back" />
    </div>
  </div>

  <input type="submit" class="red" value="Hide company" />
</form>

<hr>

<h1> Delete account </h1>
<p class="notice big">
  This action is not reversible,  once you delete your account you will no longer be able to login.
  However, you can always come back whenever you want , but you will have to register again.
</p>

<form class="form-container" action="index.html" method="post">
  <div class="label">
    <div class="group">
      <span> Choose a reason </span>
      <input type="text" disabled name="" value="I'm not feeling safe" />
    </div>
  </div>

  <div class="label">
    <div class="group">
      <span> Further details <i>(optional)</i> </span>
      <textarea placeholder="Details"></textarea>
    </div>
  </div>

  <input type="submit" class="red" value="Delete account permanently" />
</form>
