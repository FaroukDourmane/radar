$(document).ready(function(){

  // Open/Close Header menu
  $(".open-header-menu").click(function(e){
    e.preventDefault();
    $(".header-menu").toggleClass("active");
  });

  // Categories switch
  $(".categories-switch").click(function(e){
    e.preventDefault();
    var id = $(this).attr("id");
    var attr = $(this).attr("active");

    if (typeof attr == typeof undefined || attr == false) {
      $(".categories-switch").removeClass("active");
      $(this).addClass("active");

      if ( id == "list" )
      {
        $(".categories-container .categories-wrapper").addClass('list');
      }else{
        $(".categories-container .categories-wrapper").removeClass('list');
      }
    }

    scrolled=0;
    $(".categories-container .categories-wrapper").animate({
            scrollTop:  scrolled
       });

  });

  // Currency exchange
  $(".currency-js-input").on("change keyup",function(e){
    var usd = parseFloat($(this).val()).toFixed(2);

    // rates
    var try_rate = parseFloat($("input[type='hidden'][name='try']").val());
    var eur_rate = parseFloat($("input[type='hidden'][name='eur']").val());
    var gbp_rate = parseFloat($("input[type='hidden'][name='gbp']").val());

    var lira = (usd*try_rate).toFixed(2);
    var eur = (usd*eur_rate).toFixed(2);
    var gbp = (usd*gbp_rate).toFixed(2);

    $(".currency-try").val(lira);
    $(".currency-gbp").val(gbp);
    $(".currency-eur").val(eur);
  });
});
