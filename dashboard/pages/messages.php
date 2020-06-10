<h1> Messages </h1>

<!-- stats wrapper -->
<div class="stats-wrapper">

  <!-- Item -->
  <div class="item">
    <div class="wrap">
      <h1>100</h1>
      <span>Total</span>
    </div>
  </div>
  <!-- END Item -->

  <!-- Item -->
  <div class="item yellow">
    <div class="wrap">
      <h1>10</h1>
      <span>Unseen</span>
    </div>
  </div>
  <!-- END Item -->

</div>
<!-- End stats wrapper -->

<!-- inline-tools -->
<div class="inline-tools">
  <a> <label class="checkbox" for="select_all"> <input type="checkbox" id="select_all" value=""> <span></span> Select all </label> </a>
  <a href="#" class="delete"> <img src="../assets/svg/red-delete.svg" /> Delete selected </a>
</div>
<!-- END inline-tools -->


<h1 class="yellow-title"><span>Unseen</span> </h1>
<!-- Messages wrapper -->
<div class="messages-wrapper">
  <?php for ($i=0; $i < 4; $i++) { ?>
    <div class="item unseen">
      <label class="checkbox" for="select_<?php echo $i; ?>"> <input type="checkbox" id="select_<?php echo $i; ?>" value=""> <span></span> </label>
      <a href="#"> <b>Farouk dourmane</b> <span>dourmanefarouk@gmail.com</span> </a>
      <span class="date">1 day ago</span>
    </div>
  <?php } ?>
  
  <?php for ($i=0; $i < 4; $i++) { ?>
    <div class="item">
      <label class="checkbox" for="select_<?php echo $i; ?>"> <input type="checkbox" id="select_<?php echo $i; ?>" value=""> <span></span> </label>
      <a href="#"> <b>Farouk dourmane</b> <span>dourmanefarouk@gmail.com</span> </a>
      <span class="date">1 day ago</span>
    </div>
  <?php } ?>
</div>
<!-- END Messages -->
