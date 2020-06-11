<?php
  require_once("templates/header.php");
  $exchange_rates = fetch_rates();
?>
  <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
   <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>

  <!-- Home stylesheet -->
  <link rel="stylesheet" href="assets/css/home.css">

  <div class="body-container" <?php echo (isLogged()) ? "style='padding-top:100px;'" : ""; ?>>

    <div class="top-ad-container">
      <div class="left-ad"></div>

      <div class="main-ad">
        إعلان رئيسي
      </div>
    </div>


    <!-- Body wrapper -->
    <div class="body-wrapper">
      <div class="left-side">
        <!-- Categories -->
        <div class="categories-container">
          <div class="top-bar">
            <div class="tools">
              <a href="#" id="rectangles" class="categories-switch active"> <?php echo file_get_contents("assets/svg/rectangles.svg"); ?> </a>
              <a href="#" id="list" class="categories-switch"> <?php echo file_get_contents("assets/svg/bars.svg"); ?> </a>
            </div>
            <div class="title">طريقة العرض</div>
          </div>

          <div class="categories-wrapper">
            <?php for ($i=0; $i < 6; $i++) { ?>
              <div class="item">
                <a href="#" class="hidden-link"></a>
                <?php echo file_get_contents("assets/svg/lawyer.svg"); ?>
                <b> محامي </b>
                <p> 10 نتائج </p>
              </div>
            <?php } ?>
          </div>

          <a href="#" class="more"> تصفح المزيد </a>
        </div>

        <!-- Currency exchanger -->
        <?php if ($exchange_rates){ ?>
        <div class="currency-container">
          <div class="title">
            أسعار الصرف
            <span class="date"> <?php echo date("d/m/Y", intval($exchange_rates["last_update"])); ?> </span>
          </div>

          <div class="wrapper">
            <div class="item blue">
              <div class="text">
                <b>$</b>
                <span>الدولار الأمريكي </span>
              </div>
              <div class="input">
                <input type="number" class="currency-js-input" value="1" min="0" />
              </div>
            </div>

            <div class="item">
              <div class="text">
                <b>₺</b>
                <span> الليرة التركية </span>
              </div>
              <div class="input">
                <input type="number" class="currency-try" value="<?php echo round_float($exchange_rates["try"]); ?>" min="0" readonly />
              </div>
            </div>

            <div class="item">
              <div class="text">
                <b>£</b>
                <span> الجنيه الإسترليني </span>
              </div>
              <div class="input">
                <input type="number" class="currency-gbp" value="<?php echo round_float($exchange_rates["gbp"]); ?>" min="0" readonly />
              </div>
            </div>

            <div class="item">
              <div class="text">
                <b>€</b>
                <span> اليورو </span>
              </div>
              <div class="input">
                <input type="number" class="currency-eur" value="<?php echo round_float($exchange_rates["eur"]); ?>" min="0" readonly />
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- END Currency -->

        <div class="ad-container">
          منطقة إعلانية
        </div>
      </div>

      <div class="right-side">
        <div class="ads-container">
          <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="ad">
              <a href="#" class="hidden-link"></a>
              <img class="logo" src="assets/svg/logo.svg" />
              <h5 class="name"> شركة رادار للعقارات </h5>
              <p class="category"> عقارات </p>
              <?php echo file_get_contents("assets/svg/home.svg"); ?>
              <div class="abstract"></div>
            </div>
          <?php } ?>
        </div>

        <a href="#" class="all-ads">
           تصفح كل الإعلانات
           <span class="arrow"> <?php echo file_get_contents("assets/svg/right-arrow.svg"); ?> </span>
        </a>

        <!-- Articles -->
        <div class="articles-container">
          <h1>
            <img src="assets/svg/coffee-paper.svg" />
             آخر الأخبار
          </h1>

          <div class="wrapper articles-wrapper slider">
            <?php for ($i=0; $i < 3; $i++) { ?>
            <div class="item">
              <div class="cover" style="background:url('assets/img/login-bg.jpg');"></div>
              <h5> آخر إحصائيات وباء كورونا و موعد رفع الحجر الصحي </h5>
              <p class="date">00/00/0000 00:00</p>
              <p class="content">
                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال … او نماذج مواقع انترنت …
              </p>

              <a href="#" class="read">
                <?php echo file_get_contents("assets/svg/eye.svg"); ?>
              </a>
            </div>
            <?php } ?>
          </div>

          <a href="#" class="read-more">
             قراءة المزيد
             <span> <?php echo file_get_contents("assets/svg/eye.svg"); ?> </span>
          </a>
        </div>
        <!-- END Articles -->
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="contact-container">
    <div class="wrapper">
      <div class="left-side">
        <div class="form">
          <div class="input-group">
            <input type="text" name="" value="" placeholder="الإسم" />
            <input type="text" name="" value="" placeholder="البريد الإلكتروني" />
          </div>

          <div class="input-group">
            <textarea name="name" rows="8" cols="80"></textarea>
          </div>
        </div>

        <a href="#" class="submit email">
          أرسل
        </a>
      </div>

      <div class="right-side">
        <h5> للتواصل معنا </h5>
        <p>
          عبر الهاتف :
          <b> +90 552 455 17 93 </b>
        </p>

        <p>
          البريد الإلكتروني :
          <b> support@radarturkiye.com </b>
        </p>

        <h5> أو عبر مواقع التواصل الإجتماعي </h5>

        <div class="social">
          <a href="#"> <img src="assets/svg/facebook.svg" /> </a>
          <a href="#"> <img src="assets/svg/instagram.svg" /> </a>
        </div>

        <a href="#" class="submit whatsapp">
          واتساب
        </a>
      </div>
    </div>
  </div>
  <!-- END Contact -->

<!-- Hidden currency exchange rates -->
<input type="hidden" name="try" value="<?php echo round_float($exchange_rates["try"]); ?>" />
<input type="hidden" name="gbp" value="<?php echo round_float($exchange_rates["gbp"]); ?>" />
<input type="hidden" name="eur" value="<?php echo round_float($exchange_rates["eur"]); ?>" />

<?php require_once("templates/footer.php"); ?>

<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/js/home.js"></script>
