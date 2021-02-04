<div class="mainPageWrapper-part6">
	<div class="container">
		<div class="mainPageWrapper-part6__sliderTop">
			<div class="mainPageWrapper-part6__sliderTopLeft">
				<a href="<?php echo get_term_link(2012, 'sections'); ?>" class="h2Title">Взгляд изнутри</a>
			</div>
			
			<div class="mainPageWrapper-part6__sliderTopRight">
                <span id="mainPageWrapper-part6__sliderTopArrowLeft" class="arrowSwitch arrowSwitchLeft">
                         <svg role="img" >
                            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
                         </svg>
                    </span>
				<span id="mainPageWrapper-part6__sliderTopArrowRight" class="arrowSwitch arrowSwitchRight">
                         <svg role="img">
                            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
                         </svg>
                    </span>
			</div>
		</div>
		
		<div  class="swiper-container mainPageWrapper-part6__sliderBot">
			
			<div class="swiper-wrapper">
				
				<?php
					global $post;
					$query = new WP_Query( [
						'posts_per_page' => 6,
						'offset' => 0,
						'tax_query' => [
							[
								'taxonomy' => 'sections',
								'field' => 'id',
								'terms' => [ '2012' ] // Взгляд изнутри
							],
						]
					] );
					if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
				?>
				
				<a href="<?php the_permalink(); ?>" class="swiper-slide">
					<div>
						<div class="imgBlock">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div>
							<p>
								<?php echo get_field('VI_name') ?>
							</p>
							<p>
								<?php echo get_field('VI_position') ?>
							</p>
						</div>
					</div>
					
					<div>
						<p>
							<?php the_title(); ?>
						</p>
						<p>
							<?php echo kama_excerpt( array('maxchar'=>150, 'text'=> get_the_excerpt()) ); ?>
						</p>
						<div class="dateAndViews">
							<span >Подробнее...</span>
							<span class="date"><?php echo get_the_date(); ?></span>
						</div>
					</div>
				</a>
				
				<?php
						}
					}
					wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>