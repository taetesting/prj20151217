<?php 
/**
 * Theme Single Post Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<style type="text/css">
		#masthead {
			background-color: #fff;
		}
		#featured-slider {
			background-color: #f4f3f3;
		}
		#header-text-nav-container {
		    position: relative;
		}
		.header-post-title-class {
			font-size: 25px;
			text-transform: uppercase;
		}
		#content {
			padding: 0 20px;
		}
		.entry-meta {
			display: none;
		}
		.share-area {
			height: 40px;
		}
		.fb-share-button {

		}
		/*.fb-share-button iframe {
			height: 40px !important;
			width: 100px !important;
		}
		.fb-share-button iframe div.pluginButton {
			height: 30px !important;
			width: 90px !important;
		}*/
		section#lien-he .section-header {
			margin: 0 0 20px 0;
		}
	</style>
	<div id="primary">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'content', 'single' ); ?>

				<?php //get_template_part( 'navigation', 'archive' ); ?>

				<!-- share post -->
				<div id="fb-root"></div>
				<script>
					(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="share-area">
					<div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button_count"></div>
				</div>

				<?php
					do_action( 'spacious_before_comments_template' );
					// If comments are open or we have at least one comment, load up the comment template
					// if ( comments_open() || '0' != get_comments_number() ) {
					// 	comments_template();
					// }		
	      		do_action ( 'spacious_after_comments_template' );
				?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<section id="lien-he" class="section default">
        <div class="inner-wrap">
            <div class="section-header">
                <h3 class="same-logo-color">LIÊN HỆ</h3>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode("[contact-form-7 id='25' title='Index Contact Form']"); ?>
            </div>
        </div>
    </section>
    <section id="info-map" class="section default">
        <div class="contact-info">
            <div class="contact-info-logo"></div>
            <!-- <div class="contact-info-line"></div> -->
            <div class="contact-info-addr">
                <p>449/94 Sư Vạn Hạnh ( nối dài ), Phường 12, Quận 10, TP.Hồ Chí Minh</p>
                <div class="contact-info-phone">08 3862 5703</div>
            </div>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2771.5082145459023!2d106.66629413954291!3d10.772618528010373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d10.772503!2d106.6677811!5e0!3m2!1svi!2s!4v1450747773113" width="100%" height="323" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="clearfix"></div>
    </section>
    <div class="clearfix"></div>
	<?php spacious_sidebar_select(); ?>
	
	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>