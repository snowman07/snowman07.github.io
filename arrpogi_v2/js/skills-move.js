jQuery(document).ready(function () {
    /*MODIFICATION START*/
    jQuery(document).on('scroll', function () {
        if (jQuery('html,body').scrollTop() > jQuery('#skills-container-inner').height()) {
            /*MODIFICATION END*/
            jQuery(".progress-bar").each(function () {
                jQuery(this).find(".progress-content").animate({
                    width: jQuery(this).attr("data-percentage")
                }, 3000);

                jQuery(this).find(".progress-number-mark").animate({
                    left: jQuery(this).attr("data-percentage")
                }, {
                    duration: 3000,
                    step: function (now, fx) {
                        var data = Math.round(now);
                        jQuery(this).find(".percent").html(data + "%");
                    }
                });
            });
            /*MODIFICATION START*/
        }
    });
    /*MODIFICATION END*/
});