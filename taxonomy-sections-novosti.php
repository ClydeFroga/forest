<?php get_header(); ?>

<div class="container">

  <div class="news">
		<?php get_template_part('includes/breadcrumbs'); ?>
	
		<?php if(have_posts()) {
			$count = 0;
			$ItsNewsPage = true;
			$arhive = true;
			$tagsReq = true;
			while(have_posts()){
				the_post();
				?>
			
				<?php if($count === 0) {
					?>
					<div class="horizontalBar horizontalBar1">
				<?php } ?>
			
				<?php
				if($count < 2) {
					require locate_template('includes/horizontalBarDiv.php');
				}
				?>
			
				<?php
				if($count === 1) { ?>
					</div>
					<div class="horizontalBar horizontalBar2">
				<?php }
				?>
			
				<?php
				if($count >= 2 && $count < 5) {
					require locate_template('includes/horizontalBarDiv.php');
				}
				?>
			
				<?php
				if($count === 4) { ?>
					</div>
					<div class="horizontalBar horizontalBar3">
				<?php }
				?>
			
				<?php
				if($count >= 5 && $count < 7) {
					require locate_template('includes/horizontalBarDiv.php');
				}
				?>
			
				<?php
				if($count === 6) { ?>
					</div>
					<div class="horizontalBar horizontalBar4">
				<?php }
				?>
			
				<?php
				if($count >= 7 && $count < 10) {
					require locate_template('includes/horizontalBarDiv.php');
				}
				?>
			
				<?php
				if($count === 9) { ?>
					</div>
					<div class="horizontalBar horizontalBar5">
				
					<?php }
				?>
				
				<?php
				if($count >= 10 && $count < 14) {
					require locate_template('includes/horizontalBarDiv.php');
				}
				?>
				
				<?php
				if($count === 13) { ?>
					<?php break; }
				?>
				
				<?php $count++;
			}
			$ItsNewsPage = false;
			$tagsReq = false;
			?>
			</div>
		<?php } ?>
		
		<div class="foxyOne">
			<?php get_template_part('includes/foxyA'); ?>
		</div>
		<div class="foxyTwo">
			<?php get_template_part('includes/foxyB'); ?>
		</div>
		<div class="foxyThree">
			<?php get_template_part('includes/foxyC'); ?>
		</div>
		<div class="foxyFour">
			<?php get_template_part('includes/foxyE'); ?>
		</div>
		<div class="foxyFive">
			<?php get_template_part('includes/foxyF'); ?>
		</div>
	
		<div class="foxyFullOne">
			<?php get_template_part('includes/foxyFullOne'); ?>
		</div>
		<div class="foxyFullTwo">
			<?php get_template_part('includes/foxyFullTwo'); ?>
		</div>
	
		<?php get_template_part('includes/foxyD'); ?>
	
		<?php
			$readersChoiseName = 'Выбор читателей';
			$readersChoiseLimit = 5;
			require locate_template('includes/readersChoise.php');
		?>
	
		<?php
			global $post;
			$title = 'Взгляд изнутри';
			$AnotherNewsId= 2012;
			$AnotherNewsCat = 'sections';
			$query = new WP_Query( [
				'posts_per_page' => 5,
				'offset' => 0,
				'tax_query' => [
					[
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2012' ]
					],
				]
			] );
			if ( $query->have_posts() ) {
				require locate_template('includes/anotherNews.php');
			}
		
			wp_reset_postdata();
		?>
	
		<?php get_template_part('includes/newMag'); ?>
	
		<?php
			global $post;
			$movingClass = 'movingPicturesBigOne';
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
		
			wp_reset_postdata();
		?>
	
		<?php
			global $post;
			$movingClass = 'movingPicturesBigTwo';
			$TopLeft = true;
			$query = new WP_Query( [
				'posts_per_page' => 8,
				'offset' => 0,
				'tax_query' => [
					[
						'taxonomy' => 'category',
						'field' => 'id',
						'terms' => [ '7', '68' ] // деревообработка, взгляд изнутри
					],
				]
			] );
			if ( $query->have_posts() ) {
				require locate_template('includes/movingPictures.php');
			}
			$TopLeft = false;
			wp_reset_postdata();
		?>
	
		<?php //get_template_part('includes/partners-slider'); ?>
	
		<?php get_template_part('includes/pagination'); ?>
	
		<?php get_template_part('includes/calendarOfEvents'); ?>
	
		<?php
			global $post;
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
				require locate_template('includes/sliderMini.php');
			}
		
			wp_reset_postdata();
		?>
	
		<?php get_template_part('includes/greenBlock'); ?>
	
		<?php
			global $post;
			$query = new WP_Query( [
				'posts_per_page' => 4,
				'offset' => 0,
				'tax_query' => [
					[
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2003' ] // технологии
					],
				]
			] );
			if ( $query->have_posts() ) {
				require locate_template('includes/sliderMini.php');
			}
		
			wp_reset_postdata();
		?>
	
		<?php get_template_part('includes/socialBlock'); ?>
  </div>
</div>

<?php get_footer(); ?>