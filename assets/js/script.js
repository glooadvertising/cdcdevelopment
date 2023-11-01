//Attach plugin to slideshow with ".gallery-slideshow" class

jQuery(document).ready(function($) {
    $(function() {
        $('.gallery-slideshow').slideshow({
          interval: 2000,
        //   width: 600,
        //   height: 450
        });
      });
  })
  