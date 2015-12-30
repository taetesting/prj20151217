jQuery(document).ready(function(){
    jQuery("#scroll-up").hide();
    jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 1000) {
                jQuery('#scroll-up').fadeIn();
            } else {
                jQuery('#scroll-up').fadeOut();
            }
        });
        jQuery('a#scroll-up').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        // jQuery('.previous-post a').click(function() {
        //     alert('Previous post');
        // });
        // jQuery('.next-post a').click(function() {
        //     alert('Next post');
        // });
    });
    jQuery(".various").fancybox({
        // maxWidth    : 800,
        maxHeight   : 400,
        fitToView   : false,
        width       : '100%',
        // height      : '70%',
        autoSize    : true,
        closeClick  : true,
        openEffect  : 'none',
        closeEffect : 'none',
        margin      : 0,
        padding     : 0,
        leftRatio   : 0,
        scrolling   : 'hidden'
    });
    // jQuery('.about-second-video .video-link').click(function() {
    // alert('SHIT!!!?');
});