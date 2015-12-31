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

    jQuery('a.gallery-cate-photo').click(function(){
        var data = {
        'action': 'my_action',
        'gallery_category': 'video'      // We pass php values differently!

        };
        jQuery.ajax({
            url: ajax_object.ajax_url,
            data : {
                    'action': 'my_action',
                    'gallery_category': 'Photo'      // We pass php values differently!
            },
            success: function( data ) {
                // jQuery('').html();
            }, error: function(errorThrown) {
                console.log(errorThrown);
            }
        });
        // alert('done');
    });

    
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    
    // jQuery('.about-second-video .video-link').click(function() {
});