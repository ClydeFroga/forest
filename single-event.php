<?php get_header();

?>

<div class="container single">
	<?php get_template_part('includes/breadcrumbs'); ?>
	
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
	
	<?php get_template_part('includes/foxyD'); ?>
	<div class="foxyFullOne">
		<?php get_template_part('includes/foxyFullOne'); ?>
	</div>
	<div class="foxyFullTwo">
		<?php get_template_part('includes/foxyFullTwo'); ?>
	</div>
	
	<?php
		global $post;
		$title = 'Новости';
		$AnotherNewsId= 2005;
		$AnotherNewsCat = 'sections';
		$query = new WP_Query( [
			'posts_per_page' => 5,
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
			require locate_template('includes/anotherNews.php');
		}
		
		wp_reset_postdata();
	?>
	<?php
		$readersChoiseLimit = 5;
		$readersChoiseName = 'Выбор читателей';
		require locate_template('includes/readersChoise.php');
	?>
	

  	<div class="firstContent verticalBlock verticalBlockMain">
    <a class="verticalBlock__ImgBlc">
      <div class="imgBlock imgBlockFull">
				<?php the_post_thumbnail('full'); ?>
      </div>
    </a>

    <a class="verticalBlock__TextBlc">
      <h1>
				<?php the_title(); ?>
      </h1>
    </a>
  
  </div>
		<?php //get_template_part('includes/grade'); ?>
		
		<div class="disqus">
			<?php //comments_template();?>
		</div>
		
		<?php get_template_part('includes/sharingAndErrors'); ?>

	
  <div class="single__mainContent">
		<?php the_content(); ?>
	</div>
	
	<?php get_template_part('includes/greenBlock'); ?>

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
	<?php get_template_part('includes/mainPageWrapper-part3'); ?>
 
</div>

<?php get_footer(); ?>