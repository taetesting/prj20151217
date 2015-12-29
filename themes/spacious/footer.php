<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>
        <!-- </div> --><!-- .inner-wrap -->
    </div><!-- #main -->    
    <?php do_action( 'spacious_before_footer' ); ?>
        <footer id="colophon" class="clearfix"> 
            <?php get_sidebar( 'footer' ); ?>   
            <div class="footer-socket-wrapper clearfix">
                <div class="inner-wrap">
                    <div class="footer-socket-area">
                        <?php do_action( 'spacious_footer_copyright' ); ?>
                        <nav class="small-menu clearfix">
                            <?php
                                if ( has_nav_menu( 'footer' ) ) {                                   
                                        wp_nav_menu( array( 'theme_location' => 'footer',
                                                                 'depth'           => -1
                                                                 ) );
                                }
                            ?>
                        </nav>
                    </div>
                </div>
            </div>          
        </footer>
        <a href="#masthead" id="scroll-up"></a> 
    </div><!-- #page -->
    <script type="text/javascript">
        // jQuery(function(){
        //     var shrinkHeader = 100;
        //     jQuery(window).scroll(function() {
        //         var scroll = getCurrentScroll();
        //             if (scroll >= shrinkHeader) {
        //                jQuery('#header-text-nav-container').addClass('shrink');
        //             } else {
        //                 jQuery('#header-text-nav-container').removeClass('shrink');
        //             }
        //       });
        //     function getCurrentScroll() {
        //         return window.pageYOffset || document.documentElement.scrollTop;
        //     }
        // });

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 1){  
                jQuery('#header-text-nav-container').addClass("shrink");
              }
              else{
                jQuery('#header-text-nav-container').removeClass("shrink");
              }
            });
        jQuery(function() {
            jQuery('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        jQuery('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
            jQuery('.about-second-video .video-link').click(function() {
                alert('SHIT!!!');
            });
        });

        var swiper = new Swiper('.header-swiper-container', {
            speed: 400,
            pagination: '.header-swiper-pagination',
            paginationClickable: true
        });
    </script>
    <!-- <button id="btnBottom">Click</button> -->
    <?php wp_footer(); ?>
</body>
</html>