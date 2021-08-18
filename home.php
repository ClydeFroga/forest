<?php get_header(); ?>

<div class="container">
	<?php get_template_part('includes/mainPageWrapper-part1'); ?>

    <div class="mainPageWrapper-part2">
        <div>
					<?php get_template_part('includes/greenBlock'); ?>
	
					<?php get_template_part('includes/foxyB'); ?>
	
					<?php
						global $post;
						$title = 'Технологии';
						$AnotherNewsId= 2010;
						$AnotherNewsCat = 'sections';
						$query = new WP_Query( [
							'posts_per_page' => 4,
							'offset' => 0,
							'tax_query' => [
								[
									'taxonomy' => 'sections',
									'field' => 'id',
									'terms' => [ '2010' ] // технологии
								],
							]
						] );
						if ( $query->have_posts() ) {
							require locate_template('includes/anotherNews.php');
						}
		
						wp_reset_postdata();
					?>
	
					<?php get_template_part('includes/socialBlock'); ?>
					
					<?php get_template_part('includes/foxyFullOne'); ?>
        </div>
    </div>
	
	<?php get_template_part('includes/mainPageWrapper-part3'); ?>
</div>

<?php get_template_part('includes/mainPageWrapper-part6'); ?>

<div class="container">
	<?php get_template_part('includes/mainPageWrapper-part5'); ?>

    <div class="mainPageWrapper-part3 mainPageWrapper-part3Bottom">
			<?php get_template_part('includes/foxyF'); ?>
	
			<div class="mainPageWrapper-part3__center">
				<a href="<?php echo get_category_link(1981) ?>" class="h2Title">Лесное хозяйство</a>
		
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
								'terms' => [ '1981' ] // лесное хозяйство
							],
							[
								'operator' => 'NOT IN',
								'taxonomy' => 'sections',
								'field' => 'id',
								'terms' => [ '2005' ] // новости
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
				<a href="<?php echo get_category_link(93); ?>" class="h2Title">Биоэнергетика</a>
		
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
								'terms' => [ '93' ] // Биоэнергетика
							],
							[
								'operator' => 'NOT IN',
								'taxonomy' => 'sections',
								'field' => 'id',
								'terms' => [ '2005' ] // новости
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
</div>

<div class="container">
	<?php get_template_part('includes/mainPageWrapper-part4'); ?>
</div>

<?php get_template_part('includes/bigSubForm'); ?>

<?php get_template_part('includes/partners-slider'); ?>

<div class="container mainPageWrapper-part9">
	<?php get_template_part('includes/rubricatorTitle'); ?>
	
	<?php get_template_part('includes/rubricator'); ?>
</div>

<?php get_footer(); ?>