<?php get_header(); ?>

			<div id="content">

				<div class="page-header standard-header">
					<div class="wrap">
						<?php the_archive_title( '<h1 class="page-title">', '</h1>' );  ?>
					</div>
				</div>
				<div class="full-width white">

					<div id="inner-content" class="wrap cf">

							<aside class="sub-navigation no-mobile t-1of5 d-1of6">
								
								<ul>
	    							<?php 
	    								global $post;
	    								$parent = $post->post_parent;
	    								wp_list_pages(array('title_li' => 'About','child_of' => '17')); 
	    							?>
								</ul>
							</aside>

							<main id="main" class="m-all t-4of5 d-5of6 cf padd-right" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<?php
								//the_archive_title( '<h1 class="page-title">', '</h1>' );
								//the_archive_description( '<div class="taxonomy-description">', '</div>' );
								?>
								
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

								<?php endwhile; ?>

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

								<?php else : ?>

										<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>

							</main>


					</div>
				</div>

			</div>

<?php get_footer(); ?>
