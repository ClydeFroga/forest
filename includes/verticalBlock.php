

<div class="verticalBlock <?php if($vertNum) echo 'verticalBlock' . $vertNum; ?>">
	<a href="<?php the_permalink(); ?>" class="verticalBlock__ImgBlc">
		<div class="imgBlock imgBlockFull">
			<?php the_post_thumbnail('large'); ?>
		</div>
		<?php if(has_tag(2123)) {
			?> <span>Новость часа</span> <?php  } ?>
	</a>
	
	<a href="<?php the_permalink(); ?>" class="verticalBlock__TextBlc">
		<p>
			<?php the_title(); ?>
		</p>
		
		<?php if($vertNum && !$its_single) { ?>
			<div class="dateAndViews">
				<span class="date"><?php echo get_the_date(); ?></span>
			</div>
		<?php } ?>
		
		<p>
			<?php echo kama_excerpt( array('maxchar'=>$maxChar ? $maxChar : 250, 'text'=> get_the_excerpt()) ); ?>
		</p>

        <?php if($its_single) { ?>
            <p class="verticalBlock__TextBlcRead">Читать далее...</p>
        <?php } ?>
	</a>
	
	<?php
		require locate_template('includes/tags.php');
		?>
	
	
	<?php if(!$vertNum) {
		require locate_template('includes/dateAndViews.php');
	} ?>
</div>
