<div class="mainPageWrapper-part3">
	<?php if(is_home()) { ?>
		<?php get_template_part('includes/foxyC'); ?>
	<?php } ?>
	
	<?php if(is_singular()) { ?>
		<?php get_template_part('includes/foxyF'); ?>
	<?php } ?>
	
	<?php if(is_404()) { ?>
		<?php get_template_part('includes/foxyE'); ?>
	<?php } ?>
	
	<div class="mainPageWrapper-part3__center">
		<?php  ?>
		<a href="<?php echo get_category_link(7); ?>" class="h2Title">Деревообработка</a>
		
		<?php
			global $post;
			$dateAndViews = true;
			
			$query = new WP_Query( [
				'posts_per_page' => 3,
				'offset' => 0,
				'tax_query' => [
					'relation' => 'AND',
					[
						'taxonomy' => 'category',
						'field' => 'id',
						'terms' => [ '7' ] //деревообработка
					],
					[
						'operator' => 'NOT IN',
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2005' ] //новости
					]
				]
			] );
			
			if ( $query->have_posts() ) {
				require locate_template('includes/horizontalBarType2.php');
			}
			
			
			$dateAndViews = false;
			wp_reset_postdata();
		?>
	
	</div>
	
	<div class="mainPageWrapper-part3__line"></div>
	
	<div class="mainPageWrapper-part3__right">
		<a href="<?php echo get_category_link(6) ?>" class="h2Title">Лесозаготовка</a>
		
		<?php
			global $post;
			$dateAndViews = true;
			
			$query = new WP_Query( [
				'posts_per_page' => 3,
				'offset' => 0,
				'tax_query' => [
					'relation' => 'AND',
					[
						'taxonomy' => 'category',
						'field' => 'id',
						'terms' => [ '6' ] //лесозаготовка
					],
					[
						'operator' => 'NOT IN',
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2005' ] //новости
					]
				]
			] );
			
			if ( $query->have_posts() ) {
				require locate_template('includes/horizontalBarType2.php');
			}
			
			
			$dateAndViews = false;
			wp_reset_postdata();
		?>
	
	</div>
</div>