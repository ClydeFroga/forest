<div>
	<div>
		<?php if(!$ItsNewsPage) { ?>
			<a href="<?php the_permalink(); ?>" class="horizontalBarFirst imgBlock">
				
				<?php
					if($count == 0) {
						the_post_thumbnail('large');
					} else {
						the_post_thumbnail('thumbnail');
					}
					?>
				<?php if(has_tag(2124)) {
					?> <div class="newsOfHour"><p>Горячая тема</p></div> <?php } ?>
			</a>
		<?php } ?>
		<div class="horizontalBar__Right">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
			<?php if($countFirst) { ?>
				<span class="date">
					<?php echo get_the_date(); ?>
				</span>
			<?php } ?>
			<a href="<?php the_permalink(); ?>">
				<?php echo kama_excerpt( array('maxchar'=>250, 'text'=> get_the_excerpt()) ); ?>
			</a>
			<?php if(!$ItsNewsPage) { ?>
				<div class="dateAndViews">
					<?php if(!$countFirst) { ?>
						<span class="date">
							<?php echo get_the_date(); ?>
						</span>
					<?php } ?>
					<?php
						require locate_template('includes/tags.php');
					 ?>
				</div>
			<?php } else
				require locate_template('includes/dateAndViews.php');
				?>
		</div>
	</div>
</div>