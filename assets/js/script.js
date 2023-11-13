AOS.init();

//Attach plugin to slideshow with ".gallery-slideshow" class

jQuery(document).ready(function($) {
    $(function() {
        $('.gallery-slideshow').slideshow({
          interval: 5000,
        //   width: 600,
        //   height: 450
        });
      });

      $("#contact").hide();
      $(".show-form a").click(function(){
        $("#contact").show();
      });
  

  })
