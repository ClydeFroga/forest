<div class=" mainPageWrapper-part1">
	
	<?php
		global $post;
		$query = new WP_Query( [
			'posts_per_page' => 6,
			'offset' => 0,
			'ignore_sticky_posts'=>true,
			'tax_query' => [
				[
					"operator" => 'NOT IN',
					'taxonomy' => 'sections',
					'field' => 'id',
					'terms' => [ '2005' ]
				],
			]
		] );
		
		if ( $query->have_posts() ) {
			$mainNum = 0;
			?>
				
				<?php while ($query->have_posts()) {
					$query->the_post();
					if($mainNum == 0) {
						$main = true;
						require locate_template('includes/mainPageWrapper-part1__mid.php');
						$main = false;
					} if($mainNum > 0 && $mainNum < 6) { ?>
				
					<?php if($mainNum == 1) { ?>
						<div class="horizontalBar">
					<?php } ?>
						
						<?php	require locate_template('includes/horizontalBarForMainPagePart1.php'); ?>
						
					<?php if($mainNum == 5) { ?>
						</div>
					<?php } ?>
				
					
					<?php }
					$mainNum++;
				} ?>
			
		<?php }
		
		wp_reset_postdata();
	?>
	
	<?php if(is_404()) { ?>
		<?php get_template_part('includes/foxyB'); ?>
	<?php } ?>
	
	<?php if(!is_404()) { ?>
		
		<?php get_template_part('includes/foxyA'); ?>
	
		<?php
			global $post;
			$query = new WP_Query( [
				'posts_per_page' => 8,
				'offset' => 0,
				'tax_query' => [
					[
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2005' ]
					],
				]
			] );
			if ( $query->have_posts() ) {
				require locate_template('includes/mainPageWrapper-part1__right.php');
			}
			
			wp_reset_postdata();
		?>
		
		<?php
			global $post;
			$movingClass = 'movingPicturesOne';
			$TopLeft = true;
			$a = get_option( 'sticky_posts' );
			$sss = array_slice($a, 0, 6);
			
			$query = new WP_Query( array(
				'numberposts' => 6,
				'post__in'     => $sss,
			) );
			if ( $query->have_posts() ) {
				shuffle($query -> posts);
				require locate_template('includes/movingPictures.php');
			}
			$TopLeft = false;
			wp_reset_postdata();
		?>
		
		<?php get_template_part('includes/foxyD'); ?>
		
		<?php get_template_part('includes/rubricatorTitle'); ?>
		
		<?php get_template_part('includes/rubricator'); ?>
	
	<?php } ?>
</div>