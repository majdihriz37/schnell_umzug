$(function(){
  $(".go-reg").click(function(){
    $(".reg-form").slideDown('slow');
    $(".anm-form").slideUp("slow");
    
    $(".go-anm").click(function(){
      $(".anm-form").slideDown('slow');
      $(".reg-form").slideUp("slow");
    })
  })
})