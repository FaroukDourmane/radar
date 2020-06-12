$(document).ready(function(){

  $('.articles-wrapper').owlCarousel({
    loop:false,
    nav: true,
    margin:0,
    //items: 3,
    center:false,
    autoWidth:false,
    navText: ['<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="292.359px" height="292.359px" viewBox="0 0 292.359 292.359" style="enable-background:new 0 0 292.359 292.359;" xml:space="preserve"><g><path d="M222.979,133.331L95.073,5.424C91.456,1.807,87.178,0,82.226,0c-4.952,0-9.233,1.807-12.85,5.424 c-3.617,3.617-5.424,7.898-5.424,12.847v255.813c0,4.948,1.807,9.232,5.424,12.847c3.621,3.617,7.902,5.428,12.85,5.428 c4.949,0,9.23-1.811,12.847-5.428l127.906-127.907c3.614-3.613,5.428-7.897,5.428-12.847 C228.407,141.229,226.594,136.948,222.979,133.331z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>','<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="292.359px" height="292.359px" viewBox="0 0 292.359 292.359" style="enable-background:new 0 0 292.359 292.359;" xml:space="preserve"><g><path d="M222.979,133.331L95.073,5.424C91.456,1.807,87.178,0,82.226,0c-4.952,0-9.233,1.807-12.85,5.424 c-3.617,3.617-5.424,7.898-5.424,12.847v255.813c0,4.948,1.807,9.232,5.424,12.847c3.621,3.617,7.902,5.428,12.85,5.428 c4.949,0,9.23-1.811,12.847-5.428l127.906-127.907c3.614-3.613,5.428-7.897,5.428-12.847 C228.407,141.229,226.594,136.948,222.979,133.331z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>'],
    responsive: {
        0:{
          items:1
        },
        650:{
            items:2
        },
        1039:{
            items:3
        }
    }
  });



  // Categories slider init
  $(".categories-container .scrollUp").hide();
  var scrolled=0;
  var maxScrollLength = $(".categories-container .categories-wrapper .item").length;
  maxScrollLength = Math.ceil(maxScrollLength/2);
  var maxScroll = maxScrollLength*150;

    $(".categories-container .scrollDown").on("click" ,function(){
      var wrapper = $(".categories-container .categories-wrapper");
      var scrollValue = $(".categories-container .categories-wrapper").scrollTop();

      if (scrollValue < maxScroll ) {
        if ($(wrapper).hasClass("list"))
        {
          scrolled=scrollValue+280;
        }else{
          scrolled=scrollValue+300;
        }

  			$(".categories-container .categories-wrapper").animate({ scrollTop:  scrolled });
      }else{
        $(".categories-container .categories-wrapper").animate({ scrollTop:  maxScroll });
      }

      $(".categories-container .scrollUp").show();
			});


    $(".categories-container .scrollUp").on("click" ,function(){

      if (scrolled > 0 ) {
        var wrapper = $(".categories-container .categories-wrapper");

        if ($(wrapper).hasClass("list"))
        {
          scrolled=scrolled-280;
        }else{
          scrolled=scrolled-300;
        }

				$(".categories-container .categories-wrapper").animate({ scrollTop:  scrolled });
      }else{
        $(".categories-container .scrollUp").hide();
        $(".categories-container .categories-wrapper").animate({ scrollTop:  0 });
      }
			});

});
