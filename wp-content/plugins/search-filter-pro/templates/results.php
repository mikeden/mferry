<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      http://www.designsandcode.com/
 * @copyright 2015 Designs & Code
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() )
{
	?>
	
	<!--Found <?php echo $query->found_posts; ?> Results<br />
	Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br />-->
	
	<!--<div class="pagination">
		
		<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>-->
	
	<?php
	while ($query->have_posts())
	{
		$query->the_post();
		
		?>
		<div class="clearfix"></div>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

			<div class="entry-thumbnail" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>)"></div>

			<div class="right-float">
				<header class="article-header">
					<?php printf( '<p class="category-listing">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
					<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p class="byline entry-meta vcard">
                         <?php printf( __( '', 'bonestheme' ).' %1$s',
								/* the time the post was published */
								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
						); ?>
					</p>
				</header>

				<section class="entry-content cf">
					<?php echo get_excerpt(); ?>
				</section>
			</div>

			<!--<footer class="article-footer cf">
				<p class="footer-comment-count">
					<?php //comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
				</p>
					<?php //the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
			</footer>-->
		</article>

		<?php
	}
	?>
	<!--Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br />-->
	
	<div class="pagination">
		
		<!--<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>-->
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>
	<?php
}
else
{
	echo "No Results Found";
}
?>