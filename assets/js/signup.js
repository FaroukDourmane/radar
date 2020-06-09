$(function(){

  // Steps Pages
  var steps_pages = {
    1 : "ajax/signup/step-1.php",
    2 : "ajax/signup/step-2.php",
    3 : "ajax/signup/step-3.php",
  };

  var steps_count = 3;

  // Initialize Page
  init_page ();

  // Init signup page content
  function init_page ()
   {

     $(".ajax-form-container").load(steps_pages[signup_step],function(){
       $(".login-container .content-side").removeClass("loading");

       var current = signup_step;

       $(".content-side .steps-container .step").removeClass("current");
       $(".content-side .steps-container .step").removeClass("done");
       $(".content-side .steps-container .step."+current).addClass("current");

       if (current == 2)
       {
         $(".ajax-title").text(step_2);
         $(".content-side .steps-container .step.1").addClass("current");
         $(".content-side .steps-container .step.1").addClass("done");

         if ( $(".ajax-form-container .avatar-container .avatar").css("background-image") !== "none" ){
           $(".ajax-form-container .avatar-container .avatar svg").hide();
           $(".ajax-form-container .avatar-container .buttons").show();
         }

       }else if (current == 3)
       {
         $(".ajax-title").text(step_3);
         $(".content-side .steps-container .step.1").addClass("current");
         $(".content-side .steps-container .step.2").addClass("current");
         $(".content-side .steps-container .step.1").addClass("done");
         $(".content-side .steps-container .step.2").addClass("done");

         if ( $(".ajax-form-container .logo-container .logo").css("background-image") !== "none" ){
           $(".ajax-form-container .logo-container .logo svg").hide();
           $(".ajax-form-container .logo-container .buttons").show();
         }
       }else{
         $(".ajax-title").text(step_1);
       }
     });

   }

   // Submit to next step
   function next_step()
   {
     var form_data = $(".ajax-form-container form").serializeArray();
     form_data.push({name: 'action', value: 'nextStep'});

     $.post("ajax/signup.php", form_data)
     .done(function(response){

       response = $.parseJSON(response);
       if ( response.type == "success" )
       {
         $(".login-container .content-side").removeClass("loading");
         signup_step = response.next;
         $(".ajax-title").text(response.title);
         init_page();
       }else{
         open_alert(response.title, response.content);
       }
     });
   }

   $(document).on("submit", ".signup-form", function(e){
     e.preventDefault();
     $(".login-container .content-side").addClass("loading");
     next_step();
   });


   $(document).on("submit", ".final-form", function(e){
     e.preventDefault();
     $(".login-container .content-side").addClass("loading");

     var form_data = $(".ajax-form-container .final-form").serializeArray();
     form_data.push({name: 'action', value: 'finalizeSignup'});

     $.post("ajax/signup.php", form_data)
     .done(function(response){
       $(".login-container").removeClass("loading");
       response = $.parseJSON(response);
       if ( response.type == "success" )
       {
         $(".login-container").addClass("success");
       }else{
         open_alert(response.title, response.content);
       }
     });
   });


   // Submit to next step
   function previous_step()
   {
     var data = {
       action: "prevStep",
     }

     $.post("ajax/signup.php", data)
     .done(function(response){
       $(".login-container .content-side").removeClass("loading");
       response = $.parseJSON(response);
       if ( response.type == "success" )
       {
         if ( response.next !== 0 )
         {
           $(".ajax-title").text(response.title);
           signup_step = response.previous;
           init_page();
         }
       }else{
         open_alert(response.title, response.content);
       }
     });
   }

   // Previous step When clicking the 'back' button
   $(document).on("click",".back-btn",function(e){
     e.preventDefault();
     $(".login-container .content-side").addClass("loading");
     previous_step();
   });

   function open_alert(title, content){
     $("body").addClass("disabled");
     $(".login-container .content-side").removeClass("loading");
     $(".alert-window h1").text(title);
     $(".alert-window p").text(content);
     $(".alert-window").addClass("active");
   }

   function close_alert(){
     $(".alert-window").removeClass("active");
     $("body").removeClass("disabled");
   }

   $(".close-alert-window").click(function(e){
     e.preventDefault();
     close_alert();
   });

   // Show & Hide Password
   $(document).on("click",".password-container span",function(){
     var container = $(this).parent(".password-container");
     var input = $(container).find("input");

     if ( $(input).attr("type") == "password" )
     {
       $(input).attr("type","text");
       $(this).addClass("active");
     }else{
       $(input).attr("type","password");
       $(this).removeClass("active");
     }
   });


   // CEO AVATAR Upload
   $(document).on("change",".avatar-container .avatar input[type='file']",function(e){
     formdata = new FormData();

     if($(this).prop('files').length > 0)
     {
         file =$(this).prop('files')[0];
         formdata.append("avatar", file);
         formdata.append("token", signup_token);
     }

     $(".ajax-form-container .avatar-container").addClass("loading");

     $.ajax({
     url: "ajax/uploadCEOAvatar.php",
     type: "POST",
     data: formdata,
     processData: false,
     contentType: false,
     success: function (response) {

          response = $.parseJSON(response);
          $(".avatar-container").removeClass("loading");

          if ( response.type == "success" )
          {
            $(".avatar-container .avatar").css("background-image","url(assets/temp/"+response.message+")");
            $(".avatar-container .avatar svg").hide();
            $(".ajax-form-container .avatar-container .buttons").show();
          }else{
           open_alert(response.title, response.content);
          }
     }
     });
   });


   // DELETE CEO AVATAR
   $(document).on("click",".deleteCeoAvatar",function(e){
     e.preventDefault();

     $(".ajax-form-container .avatar-container").addClass("loading");

     $.post("ajax/deleteCeoAvatar.php", {action: "deleteCeoAvatar"})
     .done(function(response){
       $(".ajax-form-container .avatar-container").removeClass("loading");
       response = $.parseJSON(response);
       if ( response.type == "success" )
       {
         $(".avatar-container .avatar").css("background","#FFF");
         $(".avatar-container .avatar svg").show();
         $(".ajax-form-container .avatar-container .buttons").hide();
       }else{
         open_alert(response.title, response.message);
       }
     });
   });



   // COMPANY LOGO UPLOAD
   $(document).on("change",".logo-container .logo input[type='file']",function(e){
     formdata = new FormData();

     if($(this).prop('files').length > 0)
     {
         file =$(this).prop('files')[0];
         formdata.append("logo", file);
         formdata.append("token", signup_token);
     }

     $(".ajax-form-container .logo-container").addClass("loading");

     $.ajax({
     url: "ajax/uploadLogo.php",
     type: "POST",
     data: formdata,
     processData: false,
     contentType: false,
     success: function (response) {

          response = $.parseJSON(response);
          $(".logo-container").removeClass("loading");

          if ( response.type == "success" )
          {
            $(".logo-container .logo").css("background-image","url(assets/temp/"+response.message+")");
            $(".logo-container .logo svg").hide();
            $(".ajax-form-container .logo-container .buttons").show();
          }else{
           open_alert(response.title, response.content);
          }
     }
     });
   });

   // DELETE COMPANY LOGO
   $(document).on("click",".deleteLogo",function(e){
     e.preventDefault();

     $(".ajax-form-container .logo-container").addClass("loading");

     $.post("ajax/deleteLogo.php", {action: "deleteLogo"})
     .done(function(response){
       $(".ajax-form-container .logo-container").removeClass("loading");
       response = $.parseJSON(response);
       if ( response.type == "success" )
       {
         $(".logo-container .logo").css("background","#FFF");
         $(".logo-container .logo svg").show();
         $(".ajax-form-container .logo-container .buttons").hide();
       }else{
         open_alert(response.title, response.message);
       }
     });
   });


   // UPLOAD GALLERY PHOTOS
   $(document).on("change",".gallery-container .gallery input[type='file']",function(e){

     var form = $(".ajax-form-container .gallery-container form");
     var formdata = new FormData($(form)[0]);
     formdata.append("token", signup_token);

     $(".ajax-form-container .gallery-container").addClass("loading");

     $.ajax({
     url: "ajax/uploadGallery.php",
     type: "POST",
     data: formdata,
     processData: false,
     contentType: false,
     success: function (response) {

          response = $.parseJSON(response);
          var images_array = response.message;

          $(".ajax-form-container .gallery-container").removeClass("loading");

          if ( response.type == "success" )
          {
            $.each(images_array, function(i, item){
              var item = '<div class="item '+i+'" id="'+i+'" style="background-image:url(assets/temp/'+item+')"> <a class="delete">x</a> </div>';
              $(".ajax-form-container .gallery-container .wrapper").prepend(item);
            });
          }else{
           open_alert(response.title, response.message);
          }
     }
     });
   });


   // DELETE GALLERY PHOTO
   $(document).on("click",".ajax-form-container .gallery-container .wrapper .item .delete",function(e){
     e.preventDefault();
     $(".ajax-form-container .gallery-container").addClass("loading");
     var id = $(this).parent(".item").attr("id");

     $.post("ajax/deleteGallery.php", {action: "deleteGallery", id: id})
     .done(function(response){
       $(".ajax-form-container .gallery-container").removeClass("loading");
       response = $.parseJSON(response);

       if ( response.type == "success" )
       {
         $(".ajax-form-container .gallery-container .wrapper .item."+id).remove();
       }else{
         open_alert(response.title, response.message);
       }
     });

   });
});
