<div class="movingPictures <?php if($movingClass) echo $movingClass; ?>">
	<div class="movingPicturesTop">
		<?php if($TopLeft) { ?>
			<div class="movingPicturesTopLeft">
			<a onclick="openModal()" class="openModal">
				подписаться
			</a>
			<a style="pointer-events: none;">
				ежемесячный обзор лпк
			</a>
		</div>
		<?php } ?>
		<div class="movingPicturesTopRight">
			<span id="<?php if($movingClass) echo $movingClass; ?>TopArrowLeft" class="arrowSwitch arrowSwitchLeft">
					 <svg role="img" >
							<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
					 </svg>
			</span>
			<span id="<?php if($movingClass) echo $movingClass; ?>TopArrowRight" class="arrowSwitch arrowSwitchRight">
					 <svg role="img">
							<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
					 </svg>
			</span>
		</div>
	</div>
	
	<div id="<?php if($movingClass) echo $movingClass; ?>" class="swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
			
			<?php
				while ( $query->have_posts() ) {
				$query->the_post();
			?>
			
			<div class="swiper-slide">
				<a href="<?php the_permalink(); ?>">
					<div class="imgBlock imgBlockFull">
						<?php the_post_thumbnail('thumbnail'); ?>
						<?php if(has_tag(2124)) {
							?> <div class="newsOfHour"><p>Горячая тема</p></div> <?php } ?>
					</div>
				</a>
				<div>
					<?php //$cat = get_the_category()[0];
						$cat = get_the_terms(get_the_ID(), 'sections')[0];
						if($cat) {
					?>
					<a class="categoryBlock" href="<?php echo get_category_link($cat -> term_id); ?>"><?php echo $cat -> name; ?></a>
					<?php }?>
					<a class="movingPicturesTitle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
			
			<?php }	?>
			
		</div>
	</div>
</div>
