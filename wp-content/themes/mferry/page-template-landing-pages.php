<?php
/*
 Template Name: Section Landing Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="full-width hero-wrap" data-parallax="scroll" data-image-src="<?php the_field('header_image'); ?>">
					<div class="wrap">
						<div class="type">
							<h3 class="section-header intro"><?php the_title(); ?></h3>
							<h1><?php the_field('page_header_copy'); ?></h1>
						</div>
					</div>
				</div>

				<?php if (get_field('intro_copy')) { ?>
					<div class="full-width about-wrap" id="gradient">
						<div class="wrap">
							<?php if (get_field('intro_title')) { ?>
								<h3 class="section-header"><?php the_field('intro_title'); ?></h3>
							<?php } ?>
							<p>
								<?php the_field('intro_copy'); ?>
							</p>
							<?php if (get_field('intro_link')) { ?>
								<p>
									<a href="<?php the_field('intro_link'); ?>" class="btn-white">LEARN MORE</a>
								</p>
							<?php } ?>
						</div>
					</div>
				<?php } ?>


				<div class="full-width white">

					<div id="inner-content" class="wrap cf">


						<main id="main" class="m-all t-all d-all cf"  role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if( have_rows('callout') ):

							 	// loop through the rows of data
							    while ( have_rows('callout') ) : the_row(); ?>

									<div class="callout">
										<div class="m-all d-1of6 t-1of5">
							    			<h1 class="sub-head"><?php the_sub_field('title'); ?> </h1> 
							    		</div>
							    		<div class="m-all d-1of2 t-2of5 image no-dt-sm">
							      			<img src="<?php the_sub_field('image'); ?>" />
							      		</div>
							    		<div class="m-all d-1of3 t-2of5 description">
							      			<p><?php the_sub_field('description'); ?></p>
							      			<p class="btn-space"><a href="<?php the_sub_field('link'); ?>" class="btn-black"><?php the_sub_field('link_copy'); ?></a></p>
							      		</div>
							      		<div class="m-all d-1of2 t-2of5 image no-mobile-sm">
							      			<img src="<?php the_sub_field('image'); ?>" />
							      		</div>
							      		<div class="clearfix"></div>
							      	</div>
								        
							      	<div class="clearfix"></div>

							    <?  endwhile;

							else :

							    // no rows found

							endif;  ?>

							
							

						</main>


					</div>
				</div>

				<div class="full-width quote-wrap">
					<div class="wrap">
						<img src="<?php the_field('author-photo'); ?>">
						<h1><?php the_field('quote'); ?></h1>
						<p><?php the_field('author'); ?></p>
					</div>
				</div>

				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>
