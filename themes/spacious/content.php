<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>
<?php 
	$lastInRow = (count_post() % 4) == 0;
?>
<article id="post-<?php the_ID(); ?>" class="tg-one-fourth <?= (count_post() % 4)==0 ? 'tg-one-fourth-last' : ''; ?>">
	<?php do_action( 'spacious_before_post_content' ); ?>

	<?php
	if( !is_single() ) {
	?>
	<header class="entry-header">
	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php echo mb_strimwidth(get_the_title(), 0, 36, '...'); ?></a>
	</h2><!-- .entry-title -->
	</header>
	<?php
	}
	?>

	<?php
		if( has_post_thumbnail() ) {
			if( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'box_1218px' || spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'wide_1218px' ) {
				$featured = 'featured-blog-large';
			}
			elseif( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'box_978px' || spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'wide_978px' ) {
				$featured = 'featured';
			}
			$image = '';
     		$title_attribute = get_the_title( $post->ID );
     		$image .= '<figure class="post-featured-image">';
  			$image .= '<a href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">';
  			$image .= get_the_post_thumbnail( $post->ID, $featured, array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
  			$image .= '</figure>';

  			echo $image;
  		} else {
  			if( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'box_1218px' || spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'wide_1218px' ) {
				$featured = 'featured-blog-large';
			}
			elseif( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'box_978px' || spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'wide_978px' ) {
				$featured = 'featured';
			}
			$image = '';
     		$title_attribute = get_the_title( $post->ID );
     		$image .= '<figure class="post-featured-image">';
  			$image .= '<a href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">';
  			$image .= get_the_post_thumbnail( $post->ID, $featured, array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
  			$image .= '<img width="300" height="300" src="'.get_template_directory_uri().'/img/noimage.jpg" class="attachment-featured-blog-large size-featured-blog-large wp-post-image" alt="'.$title_attribute.'" title="'.$title_attribute.'" >';
  			$image .= '</figure>';

  			echo $image;
  		}
	?>

	<div class="entry-content clearfix">
		<?php
			// the_excerpt();
		?>
	</div>

	<?php //spacious_entry_meta(); ?>

	<?php
	do_action( 'spacious_after_post_content' );
   ?>
</article>