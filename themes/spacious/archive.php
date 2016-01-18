<?php
/**
 * The template for displaying Archive page.
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
	    .entry-title a {
	    	color: #222222;
	    }
	    .entry-title a:hover {
	        color: #ee5a35 !important;
	    }
	    .post-thumbnail img {
	        height: 200px;
	        width: auto;
	    }
	    article.post {
	        border-bottom: 2px solid #dcdcdc;
	        margin: 0 0 40px 0;
	        padding-bottom: 20px !important;
	    }
	    .post-featured-image {
	    	/*text-align: left !important;*/
	    }
	    .post-featured-image img {
	    	height: 150px;
	    	width: auto;
	    }
	    .entry-header{
	    	height: 86px;
	    	overflow: hidden;
	    }

	</style>
	<div id="primary">
		<div id="content" class="clearfix">
			<div class="inner-wrap">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php get_template_part( 'navigation', 'archive' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>
				
			<?php endif; ?>
			<?php
	        if (function_exists("pagination")) {
	            pagination($queryPosts->max_num_pages);
	        }
	        ?>
			</div><!-- .inner-wrap -->
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php spacious_sidebar_select(); ?>
	
	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>