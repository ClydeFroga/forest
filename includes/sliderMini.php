<div class="sliderMini">
	<div id="sliderMini" class="swiper-container">
		
		<div class="swiper-wrapper">
			
			<?php while ( $query->have_posts() ) {
				$query->the_post();
			?>
			
			<div class="swiper-slide">
				<a href="<?php the_permalink(); ?>" class="sliderMini__Slide" style="background: linear-gradient(0deg, #003526 13.95%, rgba(255, 255, 255, 0) 100%),url('<?php the_post_thumbnail_url() ?>')">
					<div>
						<p class="sliderMini__SlideText">
							<?php the_title(); ?>
						</p>
					</div>
				</a>
			</div>
			
			<?php } ?>
			
		</div>
		
		<div class="sliderMini__SlideArrows">
				<span id="sliderMini__ArrowLeft" class="arrowSwitch arrowSwitchLeft">
						 <svg role="img" >
								<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
						 </svg>
				</span>
			<span id="sliderMini__ArrowRight" class="arrowSwitch arrowSwitchRight">
                                     <svg role="img">
                                        <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
                                     </svg>
                                </span>
		</div>
	</div>
</div>