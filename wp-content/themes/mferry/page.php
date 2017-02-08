<?php get_header(); ?>

			<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="page-header standard-header">
					<div class="wrap">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					</div>
				</div>

				<div class="full-width white">

					<div id="inner-content" class="wrap cf">

							<aside class="sub-navigation no-mobile t-1of5 d-1of6">
								
								<ul>

									<?php
									global $post;
									$children = get_pages( array( 'child_of' => $post->ID ) );

									if ( is_page() && $post->post_parent ) : 

										$parent = $post->post_parent;
										$parent_name = get_the_title($parent);
	    								wp_list_pages(array('title_li' => $parent_name,'child_of' => $parent));

									elseif ( is_page() && count( $children ) > 0 ) :

										$page_name = get_the_title($post);
	    								wp_list_pages(array('title_li' => $page_name,'child_of' => $post->ID));

									else : ?>
									This is a parent page without children.

									<?php endif; ?>


	    							

								</ul>
							</aside>

							<main id="main" class="m-all t-4of5 d-5of6 cf padd-right"  role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


									<section class="entry-content cf" itemprop="articleBody">
										<?php
											// the content (pretty self explanatory huh)

											the_content();

											/*
											 * Link Pages is used in case you have posts that are set to break into
											 * multiple pages. You can remove this if you don't plan on doing that.
											 *
											 * Also, breaking content up into multiple pages is a horrible experience,
											 * so don't do it. While there are SOME edge cases where this is useful, it's
											 * mostly used for people to get more ad views. It's up to you but if you want
											 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
											 *
											 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
											 *
											*/
											wp_link_pages( array(
												'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
												'after'       => '</div>',
												'link_before' => '<span>',
												'link_after'  => '</span>',
											) );
										?>
									</section> <?php // end article section ?>

									<footer class="article-footer cf">

									</footer>

									<?php comments_template(); ?>

								</article>

								

							</main>


					</div>
				</div>

				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>
