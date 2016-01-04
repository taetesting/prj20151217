<?php 
/**
 * Theme Page Section for our theme.
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

				<?php get_template_part( 'content', 'page' ); ?>

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
					// if ( comments_open() || '0' != get_comments_number() )
					// 	comments_template();					
	      		do_action ( 'spacious_after_comments_template' );
				?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php include_once('contact-section.php'); ?>
	<?php spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>