jQuery(document).ready(function(){
    
    jQuery(window).scroll(function () {

        // set distance user needs to scroll before we start fadeIn
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.navbar').addClass("navbar-fixed-top");
        } else {
            jQuery('.navbar').removeClass("navbar-fixed-top");
        }
    });
    
    jQuery(".search-icon").click(function() {
        jQuery("#nav-search").toggle();
        jQuery(this).toggleClass("close-search");
        if(jQuery(this).find("i").hasClass("fa-search")) {
            jQuery(this).find("i").removeClass("fa-search");
            jQuery(this).find("i").addClass("fa-remove");
        } else {
            jQuery(this).find("i").removeClass("fa-remove");
            jQuery(this).find("i").addClass("fa-search");
        }
    });

});