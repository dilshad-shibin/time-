var THEMEMASCOT = {};

(function($) {
    "use strict";

 
    var $document = $(document);
    var $document_body = $(document.body);
    var $window = $(window);
    var $html = $('html');
    var $body = $('body');
  
  

    THEMEMASCOT = {

        init: function() {

            var t = setTimeout(function() {
              
                THEMEMASCOT.TM_scrollToFixed();
                THEMEMASCOT.TM_sticky();
                
            }, 0);

        },


        TM_scrollToFixed: function() {
            $('.navbar-scrolltofixed').scrollToFixed({zIndex: 999});
            $('.scrolltofixed').scrollToFixed({
                marginTop: $(' .header-nav').outerHeight(true) + 10,
                limit: function() {
                  
                }
            });
          
        },

     
        TM_sticky: function() {
            $(".navbar-sticky").sticky({topSpacing:0});
        },

       

      
    };


    THEMEMASCOT.documentOnReady = {
        init: function() {
         
            THEMEMASCOT.init();
            
        }
    };


  
    $document.ready(
        THEMEMASCOT.documentOnReady.init
    );
   
  


})(jQuery);