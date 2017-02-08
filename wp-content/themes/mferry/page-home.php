<?php get_header(); ?>


			<div id="content">

				<div class="full-width hero-wrap" data-parallax="scroll" data-image-src="<?php the_field('header_image'); ?>">
					<div class="wrap">
						<div class="type">
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

				<div class="full-width home-events-wrap">
					<!-- Slider main container -->
					<div class="swiper-container">
					    <!-- Additional required wrapper -->
					    <div class="swiper-wrapper">
					        <!-- Slides -->
					        <div class="swiper-slide" style="">
					        	<div class="info">
					        		<div class="wrap">
					        			<h3 class="section-header">Featured Event</h3>
					        			<h1>2017 Production Retreat Executive Club</h1>
					        			<p>Get EXCLUSIVE access to amazing benefits at the 2017 Production Retreat. Mike Ferry is giving you this special opportunity to have a fantastic Retreat experience! </p>
					        			<p><strong>January 16 - 18, 2017</strong><br/><em>San Diego, CA</em></p>
					        			<p class="btn-space"><a class="btn-red">See Details</a></p>
					        		</div>
					        	</div>
					        	<div class="bg-image"></div>
					        </div>

					         <div class="swiper-slide">
					        	<div class="info">
					        		<div class="wrap">
					        			<h3 class="section-header">Featured Event</h3>
					        			<h1>This is another featured event</h1>
					        			<p>Get EXCLUSIVE access to amazing benefits at the 2017 Production Retreat. Mike Ferry is giving you this special opportunity to have a fantastic Retreat experience! </p>
					        			<p><strong>January 16 - 18, 2017</strong><br/><em>San Diego, CA</em></p>
					        			<p class="btn-space"><a class="btn-red">See Details</a></p>
					        		</div>
					        	</div>
					        	<div class="bg-image"></div>
					        </div>
					         <div class="swiper-slide">
					        	<div class="info">
					        		<div class="wrap">
					        			<h3 class="section-header">Featured Event</h3>
					        			<h1>2017 Production Retreat Executive Club</h1>
					        			<p>Get EXCLUSIVE access to amazing benefits at the 2017 Production Retreat. Mike Ferry is giving you this special opportunity to have a fantastic Retreat experience! </p>
					        			<p><strong>January 16 - 18, 2017</strong><br/><em>San Diego, CA</em></p>
					        			<p class="btn-space"><a class="btn-red">See Details</a></p>
					        		</div>
					        	</div>
					        	<div class="bg-image"></div>
					        </div>
					    </div>
					    <!-- If we need pagination -->
					    <div class="swiper-pagination"></div>
					</div>
				</div>

				<div class="full-width home-blog-wrap">
					<div class="wrap">
						<h3 class="section-header dark">
							Recent Blog Posts
						</h3>
						<p>
							Stay up to date with the Mike Ferry Organization and lorem ipsum dolar sit amet dolar.
						</p>
						<div class="recent-posts">

							<?php 
							   // the query
							   $the_query = new WP_Query( array(
							      'posts_per_page' => 4
							   )); 
							?>

							<?php if ( $the_query->have_posts() ) : ?>
					  		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					  			<div class="post m-all t-1of4 d-1of4">
									<div class="detail">
										<div class="image" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></div>
										<?php printf( '<p class="cat">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
										<h1><?php the_title(); ?></h1>
										<p><?php echo get_excerpt_home(); ?></p>
										<a href="<?php the_permalink(); ?>" class="btn-transparent light">LEARN MORE</a>
									</div>
								</div>
				  			<?php endwhile; ?>
						  	<?php wp_reset_postdata(); ?>

							<?php else : ?>
						  		<p><?php __('No Posts'); ?></p>
							<?php endif; ?>

							
							<div class="clearfix"></div>
						</div>

						<p>
							<a href="<?php echo site_url(); ?>/about/blog/" class="btn-red">Read the Blog</a>
						</p>
					</div>
				</div>

				<div class="full-width quote-wrap">
					<div class="wrap">
						<img src="<?php the_field('author-photo'); ?>">
						<h1><?php the_field('quote'); ?></h1>
						<p><?php the_field('author'); ?></p>
					</div>
				</div>

			</div>

<?php get_footer(); ?>
