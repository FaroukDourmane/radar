$(function(){

  $(".ajax-login-form").submit(function(e){
    e.preventDefault();
    $(".login-container .content-side").addClass("loading");

    var email = $(".ajax-login-form input[name='email']").val();
    var password = $(".ajax-login-form input[name='password']").val();

    $.post("ajax/login.php",{action: "loginCompany", email: email, password: password, login_token: login_token})
    .done(function(response){
      response = $.parseJSON(response);

      if ( response.type == "success" )
      {
        $(".login-container .content-side").addClass("success");
        setTimeout(function(){
          window.location.reload();
        },3000);
      }else{
        $(".login-container .content-side").removeClass("loading");
        $(".login .error").text(response.message);
        $(".login .error").addClass("active");
      }
    });
  });

  $(".ajax-login-form input[name='email']").keyup(function(e){
    if ( $(".login .error").hasClass("active") )
    {
      $(".login .error").removeClass("active");
    }
  });

  $(".ajax-login-form input[name='password']").keyup(function(e){
    if ( $(".login .error").hasClass("active") )
    {
      $(".login .error").removeClass("active");
    }
  });
});
