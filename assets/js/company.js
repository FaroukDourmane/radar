$(document).ready(function(){
  $(".js-favorite").click(function(e){
    e.preventDefault();
    $(this).toggleClass("active");
  });
});
