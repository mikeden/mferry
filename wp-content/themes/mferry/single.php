<?php get_header(); ?>

			<div id="content">

				<div class="page-header standard-header">
					<div class="wrap">
						<div class="header-image" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>)"></div>
					</div>
					<div class="offset"></div>
				</div>

				<div class="full-width white">

					<div id="inner-content" class="wrap cf">

						<aside class="sub-navigation m-all t-1of5 d-1of6">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php printf( '<p class="category-listing">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
								<p class="byline entry-meta vcard">
	                                 <?php printf( __( '', 'bonestheme' ).' %1$s',
	       								/* the time the post was published */
	       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
	    							); ?>
								</p>
								<p class="author">
									By <?php 
										$fname = get_the_author_meta('first_name');
										$lname = get_the_author_meta('last_name');
										$full_name = '';

										if( empty($fname)){
										    $full_name = $lname;
										} elseif( empty( $lname )){
										    $full_name = $fname;
										} else {
										    //both first name and last name are present
										    $full_name = "{$fname} {$lname}";
										}

										echo $full_name;
									 ?>
								</p>
							<?php endwhile; ?>

							<?php else : ?>

							<?php endif; ?>
							
						</aside>

						<main id="main" class="m-all t-4of5 d-5of6 cf padd-right" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php
									/*
									 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
									 *
									 * So this function will bring in the needed template file depending on what the post
									 * format is. The different post formats are located in the post-formats folder.
									 *
									 *
									 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
									 * A SPECIFIC POST FORMAT.
									 *
									 * If you want to remove post formats, just delete the post-formats folder and
									 * replace the function below with the contents of the "format.php" file.
									*/
									get_template_part( 'post-formats/format', get_post_format() );
								?>

							<?php endwhile; ?>

							<?php else : ?>

								<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
										</footer>
								</article>

							<?php endif; ?>

						</main>


					</div>
				</div>

			</div>

<?php get_footer(); ?>
