<div class="container partners-slider">
	<div class="partners-slider__sliderTop">
		<div class="partners-slider__sliderTopLeft">
			<h2 class="h2Title">Партнеры проекта</h2>
		</div>
		
		<div class="partners-slider__sliderTopRight">
			<span id="partners-slider__sliderTopArrowLeft" class="arrowSwitch arrowSwitchLeft">
					 <svg role="img" >
							<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
					 </svg>
			</span>
			<span id="partners-slider__sliderTopArrowRight" class="arrowSwitch arrowSwitchRight">
					 <svg role="img">
							<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
					 </svg>
			</span>
		</div>
	</div>
	
	<div id="partners-slider" class="swiper-container partners-slider__sliderBot">
		
		<div class="swiper-wrapper">
			<?php
				global $post;
				$query = new WP_Query( [
					'posts_per_page' => 10,
					'post_type' => 'partners',
					'orderby'=>'rand',
					'offset' => 0,
				] );
				if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
				$query->the_post();
			?>
			
			
			<div class="swiper-slide">
				<div class="imgBlock imgBlockFull">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
				<div>
					<p>
						<?php the_title(); ?>
					</p>
					<span>
							<?php echo kama_excerpt( array('maxchar'=>200, 'text'=> get_the_excerpt()) ); ?>
					</span>
				</div>
			</div>
			
			<?php
					}
				}
				wp_reset_postdata();
			?>
			
		</div>
	</div>
</div>
