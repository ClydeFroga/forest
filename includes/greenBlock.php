<div class="greenBlock">
	<a href="<?php echo home_url(); ?>/sections/market" class="h2Title">
		Рынок
	</a>
	<div class="greenBlock__Left">
		<a href="<?php echo home_url(); ?>/sections/market" class="h2Title">
			Рынок
		</a>
		
		<?php
			global $post;
			$query = new WP_Query( [
				'posts_per_page' => 5,
				'offset' => 1,
				'tax_query' => [
					[
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2007' ]
					],
				]
			] );
			
			if ( $query->have_posts() ) {
				require locate_template('includes/horizontalBar.php');
			}
			
			wp_reset_postdata();
		?>
	</div>
	
	<?php
		$query = new WP_Query( [
			'posts_per_page' => 1,
			'offset' => 0,
			'tax_query' => [
				[
					'taxonomy' => 'sections',
					'field' => 'id',
					'terms' => [ '2007' ]
				],
			]
		] );
		
		if ( $query->have_posts() ) {
			$INeedCategories = true;
			while ($query->have_posts()) {
				$query->the_post();
				require locate_template('includes/verticalBlock.php');
			}
		}
		$INeedCategories = false;
		wp_reset_postdata();
	?>

</div>