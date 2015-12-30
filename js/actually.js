jQuery(document).ready(function(){
    
    jQuery(window).scroll(function () {

        // set distance user needs to scroll before we start fadeIn
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.navbar').addClass("navbar-fixed-top");
        } else {
            jQuery('.navbar').removeClass("navbar-fixed-top");
        }
    });
    
    jQuery("i.fa-search").click(function() {
        jQuery("#nav-search").toggle();
        jQuery(this).parent(".search-icon").toggleClass("close-search");
        if(jQuery(this).hasClass("fa-search")) {
            jQuery(this).removeClass("fa-search");
            jQuery(this).addClass("fa-remove");
        } else {
            jQuery(this).removeClass("fa-remove");
            jQuery(this).addClass("fa-search");
        }
    });

});