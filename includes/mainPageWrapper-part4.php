<div class="mainPageWrapper-part4">
	
	<?php get_template_part('includes/calendarOfEvents'); ?>
	
	<?php
		global $post;
		$query = new WP_Query( [
			'posts_per_page' => 4,
			'offset' => 0,
			'tax_query' => [
				[
					'taxonomy' => 'post_tag',
					'field' => 'id',
					'terms' => [ '135' ] // выставка
				],
			]
		] );
		if ( $query->have_posts() ) {
			require locate_template('includes/sliderMini.php');
		}
		
		wp_reset_postdata();
	?>
	
	<?php if(is_404()) { ?>
		<?php get_template_part('includes/foxyF'); ?>
	<?php } ?>
	<?php if(!is_404()) { ?>
		<?php get_template_part('includes/quiz'); ?>
	<?php } ?>

	
	<?php get_template_part('includes/foxyFullTwo'); ?>
</div>