<div>
	<a href="<?php the_permalink(); ?>">
		<div class="imgBlock horizontalBarFirst">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<span>
        <?php the_title(); ?>
      </span>
	</a>
	
	<?php
		if($dateAndViews) {
			require locate_template('includes/dateAndViews.php');
		} ?>

</div>
