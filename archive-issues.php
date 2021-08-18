<?php
	/*
	Template name: Архив номеров
	*/
	get_header();
?>
	
	<div class="container">
		<div class="rubric magArchive">
			<?php get_template_part('includes/breadcrumbs'); ?>
			
			<div class="magazine magazine1">
				<?php
					$magazines = get_terms(array(
						'taxonomy' => 'issue',
						'number' => '9',
						'orderby' => 'slug',
						'order' => 'DESC',
					));
					foreach( $magazines as $mag ) {
						require locate_template('includes/magazine__item.php');
					} ?>
			</div>
			
			<div class="magazine magazine2">
				<?php
					$magazines2 = get_terms(array(
						'taxonomy' => 'issue',
						'offset' => '9',
						'number' => '9',
						'order' => 'DESC',
						'orderby' => 'slug',
						
					));
					foreach( $magazines2 as $mag ) {
						require locate_template('includes/magazine__item.php');
					} ?>
			</div>
			
			<div class=" foxyOne">
				<?php get_template_part('includes/foxyA'); ?>
			</div>
			<div class=" foxyTwo">
				<?php get_template_part('includes/foxyB'); ?>
			</div>
			<div class=" foxyThree">
				<?php get_template_part('includes/foxyC'); ?>
			</div>
			<div class=" foxyFour">
				<?php get_template_part('includes/foxyE'); ?>
			</div>
			<div class=" foxyFive">
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
				global $post;
				$title = 'Информ';
				$AnotherNewsId= 93;
				$AnotherNewsCat = 'category';
				$query = new WP_Query( [
					'posts_per_page' => 5,
					'offset' => 0,
					'tax_query' => [
						[
							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => [ '93' ]
						],
					]
				] );
				if ( $query->have_posts() ) {
					require locate_template('includes/anotherNews.php');
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
			
			<?php
				$readersChoiseName = 'Выбор читателей';
				$readersChoiseLimit = 5;
				require locate_template('includes/readersChoise.php');
			?>
			
			<script>
				var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
				var offset = 18;
			</script>

			<?php
				$loadMoreID = 'archiveLoad';
				require locate_template('includes/loadmore.php');
			?>
		</div>
	</div>
	

<?php get_footer(); ?>